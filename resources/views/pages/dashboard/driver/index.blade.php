@extends('layouts.admin')

@section('admin-content')


    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-10">
          Driver Table
        </h2>
  

   

   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.driver.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Tambah Driver
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                        <tr>
                            <th class="px-2 py-4">ID</th>
                            <th class="px-6 py-4">Foto Driver</th>
                            <th class="px-6 py-4">Nama Driver</th>
                            <th class="px-6 py-4">No Hp</th>
                            <th class="px-6 py-4">Nopolisi</th>
                            <th class="px-6 py-4">Kendaraan</th>
                            <th class="px-6 py-4">Action</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id', width: '5%'},
                { data: 'foto_driver', name: 'foto_driver' },
                { data: 'nama_driver', name: 'nama_driver' },
                { data: 'no_hp', name: 'no_hp' },
                { data: 'no_plat', name: 'no_plat' },
                { data: 'tipe_kendaraan', name: 'tipe_kendaraan' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '25%'
                },
            ],
        });
    </script>

@endsection()