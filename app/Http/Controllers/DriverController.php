<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Yajra\DataTables\Facades\DataTables;
class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Driver::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <form class="inline-block" action="' . route('dashboard.driver.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->editColumn('foto_driver', function ($item) {
                    return '<img style="max-width: 150px;" src="'. $item->foto_driver .'"/>';
                })
               
                ->rawColumns(['action', 'foto_driver'])
                ->make();
        }

        return view('pages.dashboard.driver.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama_driver' => 'required|string|max:255',
            'foto_driver' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file
            'no_hp' => 'required|string|max:20',
            'no_plat' => 'required|string|max:20',
            'tipe_kendaraan' => 'required|string|max:50',
        ]);
    
        // Ambil data dari request
        $data = $request->only(['nama_driver', 'no_hp', 'no_plat', 'tipe_kendaraan']);
        $driver_foto = $request->file('foto_driver');
    
        // Simpan file foto_driver jika ada
        if ($driver_foto) {
            $path = $driver_foto->store('public/gallery'); // Simpan di folder yang sesuai
            $data['foto_driver'] = $path;
        }
    
        // Buat driver baru
        Driver::create($data);
    
        // Redirect atau return sesuai kebutuhan
        return redirect()->route('dashboard.driver.index')->with('success', 'Data Berhasil Di Upload');
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
    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect()->route('dashboard.driver.index')->with('success','Data Berhasil Di Hapus');
    }
}
