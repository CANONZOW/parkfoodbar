@extends('layouts.admin')

@section('admin-content')
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
              <table class="items-center bg-transparent w-full border-collapse cell-border display responsive nowrap "
                  id="crudTable">
                  <thead>
                      <tr>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              No
                          </th>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              Invoice
                          </th>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              Nama Pelanggan
                          </th>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              Alamat Pelanggan
                          </th>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              Total Harga
                          </th>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              Pembayaran
                          </th>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              Status
                          </th>
                          <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                              Action
                          </th>

                      </tr>
                  </thead>

                  <tbody class="text-left">
                  </tbody>

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
      }],dom: 'Bfrtip',
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
              data: 'DT_RowIndex',
              name: 'DT_RowIndex',
              width: '5%'
          },
          {
              data: 'invoice',
              name: 'invoice'
          },
          {
              data: 'user.name',
              name: 'user.name'
          },
          {
              data: 'address',
              name: 'address'
          },
          {
              data: 'total_price',
              name: 'total_price',
              orderable: false,
              searchable: false,
          },
          {
              data: 'payment',
              name: 'payment',
          },
          {
              data: 'status',
              name: 'status',
              orderable: false,
              searchable: false,
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

<section class="d-flex flex-column gap-4">

  <div class="d-flex justify-content-between align-items-center gap-3">
    <h4 class="title-section-content">Member of ParkFoodBar</h4>
    <a href="#" class="btn-link">View All Shoes</a>
  </div>
  <div class="d-flex gap-3 flex-wrap">
    @forelse ($memberships as $membership)
    @php
    $awal = date_create($membership->date_of_registration);
    $akhir = date_create($membership->date_expired);
    $difftime = date_diff($awal, $akhir);
    @endphp
    <div class="product-card ">
      <div class="card">

        <div class="top-row">
          <div class="visa text-left">
            <h4>PARK FOOD BAR</h4>
            <span>This Card is Issude By PARK. Food+Bar and can be used in PARK. premises.</span> <br>
            <span class="pl-2">- This card not transferble.</span> <br>
            <span class="pl-2">- Membership card is valid for 6 months. and can be renewed if it
              expires.</span> <br>
            <span class="pl-2">- Present this card when using our services.</span> <br>
            <span class="pl-2">- if lost. please notify us immediately.</span> <br>
            <span class="pl-2">- this card remains property of PARK. Food + Bar, and can be canccelled</span>
            <br>
            <span class="pl-3">anytime with regrads of intruding our system.</span> <br>

          </div>
        </div>
        <div class="bottom-row">
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="dots ">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <span class="number">{{$membership->number_card}}</span>
        </div>
        <div class="bottom-row pl-3">
          <div class="left d-flex justify-content-between">
            <span class="pr-3 text-sm">EXPIRED</span>
            <span class=" text-sm">{{$membership->date_expired}}</span>
          </div>
        </div>


      </div>
      <div class="product-detail pt-3">
        <div>
          <p class="label-detail mb-1">{{$membership->member->name}}</p>
          <p class="title-detail">Tanggal DiBuat : {{$membership->date_of_registration}} </p>
        </div>

      </div>

      <div class="product-detail pt-4">
        <div>
          <p class="label-detail mb-1">Sisa:</p>
          <p class="price-detail">{{$difftime->m}} Bulan {{$difftime->d}} Hari </p>
        </div>

      </div>
    </div>

    @empty

    @endforelse




  </div>
  {{ $memberships->links() }}
 
</section>


@endsection
