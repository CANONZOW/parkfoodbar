@extends('layouts.admin')
@section('admin-content')


<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{ __('Membership') }}
</h2>



<div class="py-1">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="mb-10">
        </div>
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5  bg-white sm:p-6">
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
        dom: 'Bfrtip',
        buttons: [{
            extend: 'print',
            customize: function (win) {
                $(win.document.body)
                    .css('font-size', '10pt')
                    .prepend(
                        '<div><hr class="bg-black"><hr class="bg-black"><hr class="bg-black"><table class="bg-white px-5 py-5" width="100%"><tr><td width="25" align="center"><img src="https://img.indoclubbing.com/places/958213996265025078704229690425/park-foodbar_260.png" width="100%"></td><td width="50" align="center"><h1 class="text-2xl font-bold">PARK FOOD BAR REPORT MEMBERSHIP</h1><h1 class="text-base font-bold">PARKFOODBAR CORP</h1><h1 class="text-2xl font-bold">LAPORAN MEMBERSHIP PARKFOODBAR</h1><p>Jl. Soekarno-Hatta No.3, The Hok, Kec.Jambi Sel., Kota Jambi, Jambi 36138 </p><p>Tlp: 0741 3066090 </p></td><td width="25" align="center"><img src="https://img.indoclubbing.com/places/958213996265025078704229690425/park-foodbar_260.png"width="100%"></td></tr></table><hr class="bg-black"><hr class="bg-black"><hr class="bg-black"></div>'
                    );

                $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
            }
        }],
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





        ],
    });

</script>

@endsection
