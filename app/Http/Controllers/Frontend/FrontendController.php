<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Membership;
use App\Models\ProductCategory;
use App\Models\Transaction;
use App\Models\Driver;
use App\Models\Review;
use App\Models\TransactionItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(Request $request)
    {

        $membershipsearch = Membership::with('member')->latest();

        if (request('cari')) {
            $membershipsearch->where('number_card', 'like', '%' . request('cari') . '%');
        }
        $products = Product::with('category', 'galleries')->get();
        return view('pages.frontend.index', compact('products'), [
            'membershipsearch' => $membershipsearch->get(),
        ]);
    }

    public function cari(Request $request)
    {


        $membershipsearch = Membership::with('member')->latest();

        if (request('cari')) {
            $membershipsearch->where('number_card', 'like', '%' . request('cari') . '%');
        }
        $products = Product::with('category')->get();
        return view('pages.frontend.index', compact('products'), [
            'membershipsearch' => $membershipsearch->get(),
        ]);
    }

    public function blog()
    {
        return view('pages.frontend.blog');
    }

    public function market()
    {

        $category = ProductCategory::all();
        $products = Product::all();
        return view('pages.frontend.market', compact('category', 'products',));
    }
    public function cart()
    {
        $category = ProductCategory::all();
        $date = Carbon::now()->isoFormat('dddd');
        $carts = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->get();
        $totalItem = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->count();
        $subtotal = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->sum('total_price');
        $totalQuantity = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->sum('quantity');
        return view('pages.frontend.cart', compact('carts', 'category'), [
            'carts' => $carts,
            'subtotal' => $subtotal,
            'totalItem' => $totalItem,
            'totalQuantity' => $totalQuantity,
            'date' => $date,
        ]);
    }
    public function cartAdd(Request $request, $id)
    {
        //AMBIL DATA PRODUCT YANG MAU DI ADD
        $products = Product::findOrFail($id);
        Cart::create([
            'users_id' => Auth::user()->id,
            'products_id' => $id,
            'quantity' => $request->quantity,
            'total_price' => $products->price * $request->quantity,

        ]);

        $products->update([
            'stock' => $products->stock - $request->quantity
        ]);

        return redirect('cart')->with('success', 'Produk Telah Ditambahkan Ke Keranjang!');
    }

    public function cartDelete(Request $request, $id)
    {
        $item = Cart::findOrfail($id);

        $item->delete();

        return redirect('cart')->with('success', 'Produk Telah Di Hapus Dalam Keranjang');
    }

    public function detail(Request $request, $id)
    {
        $category = ProductCategory::all();
        $product = Product::with(['galleries'])->where('id', $id)->firstOrFail();
        // $ratingperproduct = Comment::where('products_id', $id)->get();
        // $comments = Comment::where('products_id', $id)->paginate(5);

        // $jumlahdata = $ratingperproduct->count();

        // if ($jumlahdata > 0) {
        //     $nilai = $ratingperproduct->sum('nilai');
        //     $rating = $nilai / $jumlahdata;
        // } else {
        //     $rating = 0;
        // }
        $recommendations = Product::with(['galleries'])->inRandomOrder()->limit(4)->get();

        return view('pages.frontend.detail', compact('product', 'recommendations', 'category'));
    }
    public function checkoutpage()
    {
        $category = ProductCategory::all();
        $date = Carbon::now()->isoFormat('dddd');
        $carts = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->get();
        $totalItem = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->count();
        $subtotal = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->sum('total_price');
        $totalQuantity = Cart::with(['product.galleries'], ['product.category'])->where('users_id', Auth::user()->id)->sum('quantity');
        return view('pages.frontend.checkoutpage', compact('category'), [
            'carts' => $carts,
            'subtotal' => $subtotal,
            'totalItem' => $totalItem,
            'totalQuantity' => $totalQuantity,
            'date' => $date,
        ]);
    }

    public function getAvailableDriverId()
    {
        // Cek apakah ada transaksi yang sudah dibuat
        $transactionCount = Transaction::count();
    
        if ($transactionCount === 0) {
            // Jika belum ada transaksi, pilih driver secara acak
            $driver = Driver::inRandomOrder()->first();
        } else {
            // Jika sudah ada transaksi, pilih driver yang tidak sibuk
            $busyDriverIds = Transaction::whereIn('status', [ 'SEDANG DI ANTAR'])
                                        ->pluck('driver_id')
                                        ->toArray();
    
            $driver = Driver::whereNotIn('id', $busyDriverIds)->inRandomOrder()->first();
        }
    
        return $driver ? $driver->id : null; // Mengembalikan id driver atau null jika tidak ada driver yang tersedia
    }

    public function checkout(Request $request)
    {
        $data = $request->all();
        $notiket = rand(111111, 999999);
        $driver_id = $this->getAvailableDriverId();
        
        if (!$driver_id) {
            return redirect()->back()->with('error', 'Tidak ada driver yang tersedia saat ini.');
        }
    
       
        $data['invoice'] =  "PFB-" . $notiket;
        // Get Carts data
        $carts = Cart::with(['product.galleries'])->where('users_id', Auth::user()->id)->get();

        $today = Carbon::today();
        // Add to Transaction data
        $data['users_id'] = Auth::user()->id;
        $data['no_hp'] = $request->no_hp;
        $data['address'] = $request->address; 
        $data['kodepos'] = $request->kodepos;


        $data['driver_id'] = $driver_id;


        $data['total_price'] = $carts->sum('total_price');
        $data['tgl'] = $today;

        $transaction = Transaction::create($data);
        foreach ($carts as $cart) {
            TransactionItem::create([
                'transactions_id' => $transaction->id,
                'users_id' => $cart->users_id,
                'products_id' => $cart->products_id,
                'quantity' => $cart->quantity
            ]);
        }
        Cart::where('users_id', Auth::user()->id)->delete();
        return redirect('success')->with('success', 'Pesanan Telah Dibuat ');
    }
    public function success()
    {
        $category = ProductCategory::all();
        $transaction = Transaction::where('users_id', Auth::user()->id)->latest()->first();
        $transactionitem = TransactionItem::where('transactions_id', $transaction->id)->get();
        return view('pages.frontend.success', compact('category', 'transaction', 'transactionitem'));
    }
    public function shop()
    {
        $category = ProductCategory::all();
        $products = Product::all();
        return view('pages.frontend.shop', compact('category', 'products'));
    }
    public function contact()
    {
        $category = ProductCategory::all();
        return view('pages.frontend.contact', compact('category'));
    }

    public function searchInvoice(Request $request)
    {
        $invoiceNumber = $request->input('invoice');

        // Cari transaksi berdasarkan nomor invoice
        $transaction = Transaction::where('invoice', $invoiceNumber)->first();

        if ($transaction) {
            // Redirect ke halaman track dengan parameter invoice_number
            return redirect()->route('track', ['invoice' => $transaction->invoice]);
        } else {
            // Redirect ke halaman dengan pesan transaksi tidak ditemukan
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }
    }

    public function track(Request $request)
    {
        // Ambil nomor invoice dari session
        $transaction = Transaction::where('invoice', $request->invoice)->latest()->first();
        $transactionitem = TransactionItem::where('transactions_id', $transaction->id)->get();
        $category = ProductCategory::all();
        $complains = Review::where('transactions_id', $transaction->id)->get();
        return view('pages.frontend.track', compact('category', 'transaction', 'transactionitem','complains'));
    }

    public function complain(Request $request)
    {
        // Validasi input
        $request->validate([
          
            'foto_1' => 'required|mimes:jpeg,png,jpg,gif|max:50000',
            'keterangan' => 'required|string|max:255',
        ]);

        // Menyimpan foto jika ada
    
        if ($request->hasFile('foto_1')) {
            $foto = $request->file('foto_1');
            $fotoPath = $foto->store('public/gallery'); // Simpan di folder 'public/complaints'
        }

        // Membuat data komplain baru
        Review::create([
            'transactions_id' => $request->transactions_id,
            'users_id' => Auth::user()->id,
            'foto_1' => $fotoPath,
            'keterangan' => $request->keterangan,
        ]);
        $transactions = Transaction::where('id', $request->transactions_id)->first();
        $transactions->update([
            'status' => 'PENGEMBALIAN',
        ]);
        return redirect()->back()->with('success', 'Komplain berhasil dikirim');
    }

    public function changeStatus(Request $request, $id, $status)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->status = $status;
        $transaction->save();

        return redirect()->back()->with('success', 'Pesanan berhasil Diterima');
    }
}
