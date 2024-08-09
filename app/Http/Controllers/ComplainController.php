<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Review::with('transaction')->get();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <form class="inline-block" action="' . route('dashboard.complain.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->editColumn('foto_1', function ($item) {
                    return '<img style="max-width: 150px;" src="'. $item->foto_1 .'"/>';
                })
                ->editColumn('driver', function ($item) {
                    return $item->transaction->driver->nama_driver;
                })
                ->editColumn('invoice', function ($item) {
                    return $item->transaction->invoice;
                })
                ->editColumn('user', function ($item) {
                    return $item->transaction->user->name;
                })
               
                ->rawColumns(['action', 'foto_1','driver','invoice','user'])
                ->make();
        }

        return view('pages.dashboard.complain.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Temukan komplain berdasarkan ID
        $complaint = Review::find($id);

        // Jika komplain ditemukan, hapus
        if ($complaint) {
            // Hapus file foto jika ada
            if ($complaint->foto_1) {
                Storage::delete($complaint->foto_1);
            }

            // Hapus data komplain dari database
            $complaint->delete();
            
            return redirect()->back()->with('success', 'Komplain berhasil dihapus');
        }

        // Jika komplain tidak ditemukan, kembalikan pesan error
        return redirect()->back()->with('error', 'Komplain tidak ditemukan');
    }
}
