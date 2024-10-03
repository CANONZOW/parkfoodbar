<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {

        $memberships = Membership::with('member')->simplePaginate(4);

        $product = Product::with('galleries', 'category')->get();

        $category = ProductCategory::all();

        if (request()->ajax()) {
            $query = Transaction::with(['user']);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline" 
                            href="' . route('dashboard.transaction.show', $item->id) . '">
                            Show
                        </a>
                        ';
                })
                ->editColumn('total_price', function ($item) {
                    return number_format($item->total_price);
                })->addIndexColumn()
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.index', compact(
            'memberships',
            'product',
            'category',
            

        ));
    }
}
