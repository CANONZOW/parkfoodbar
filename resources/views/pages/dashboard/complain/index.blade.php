@extends('layouts.admin')

@section('admin-content')


    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pb-10">
        Komplain Check
        </h2>
  

   

   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>
                        <tr>
                            <th class="px-2 py-4">ID</th>
                            <th class="px-6 py-4">Transaksi Invoice</th>
                            <th class="px-6 py-4">Foto Komplain</th>
                            <th class="px-6 py-4">Deskripsi Komplain</th>
                            <th class="px-6 py-4">Pelanggan</th>
                            <th class="px-6 py-4">Nama Driver</th>
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
                { data: 'invoice', name: 'invoice' },
                { data: 'foto_1', name: 'foto_1' },
                { data: 'keterangan', name: 'keterangan' },
                { data: 'user', name: 'user' },
                { data: 'driver', name: 'driver' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '10%'
                },
            ],
        });
    </script>

@endsection()