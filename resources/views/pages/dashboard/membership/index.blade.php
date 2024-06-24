@extends('layouts.admin')
@section('admin-content')


<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Membership') }}
</h2>



<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-10">
            <a href="{{ route('dashboard.membership.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                + Create Membership
            </a>
        </div>
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table id="crudTable" class="table table-striped table-bordered dt-responsive nowrap"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Officer</th>
                            <th>Number Card</th>
                            <th>Date Of Registration</th>
                            <th>Date Expired</th>
                            <th>Full Name</th>
                            <th>Nickname</th>
                            <th>Email</th>
                            <th>Date Of Birth</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Job</th>

                            <th>Aksi</th>
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
        columns: [{
                data: 'id',
                name: 'id',
                width: '5%'
            },
            {
                data: 'member.name',
                name: 'member.name'
            },
            {
                data: 'number_card',
                name: 'number_card'
            },
            {
                data: 'date_of_registration',
                name: 'date_of_registration'
            },
            {
                data: 'date_expired',
                name: 'date_expired'
            },
            {
                data: 'full_name',
                name: 'full_name'
            },
            {
                data: 'nickname',
                name: 'nickname'
            },
            {
                data: 'member.email',
                name: 'member.email'
            },
            {
                data: 'date_of_birth',
                name: 'date_of_birth'
            },
            {
                data: 'gender',
                name: 'gender'
            },
            {
                data: 'phone',
                name: 'phone'
            },
            {
                data: 'job',
                name: 'job'
            },




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

@endsection
