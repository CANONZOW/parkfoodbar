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
                Tanggal
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
          <tfoot>
            <tr>
              <th colspan="4" style="text-align:right">Total:</th>
              <th></th> <!-- Tempat untuk total_price -->
              <th colspan="4"></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

</div>
<script>
  var datatable = $('#crudTable').DataTable({
      ajax: {
          url: '{!! url()->current() !!}',
      },
      dom: 'Bfrtip',
      buttons: [/* Print button code omitted for brevity */],
      columns: [
          { data: 'DT_RowIndex', name: 'DT_RowIndex', width: '5%' },
          { data: 'invoice', name: 'invoice' },
          { data: 'user.name', name: 'user.name' },
          { data: 'address', name: 'address' },
          { data: 'total_price', name: 'total_price', orderable: false, searchable: false },
          { data: 'payment', name: 'payment' },
          { data: 'tgl', name: 'tgl' },
          { data: 'status', name: 'status', orderable: false, searchable: false },
          { data: 'action', name: 'action', orderable: false, searchable: false, width: '25%' },
      ],
      "footerCallback": function (row, data, start, end, display) {
          var api = this.api();

          // Fungsi untuk merubah string menjadi integer
          var intVal = function (i) {
              return typeof i === 'string' ?
                  i.replace(/[\$,]/g, '') * 1 :
                  typeof i === 'number' ?
                  i : 0;
          };

          // Total keseluruhan dari semua data di kolom "total_price"
          var total = api
              .column(4) // Index kolom 'total_price'
              .data()
              .reduce(function (a, b) {
                  return intVal(a) + intVal(b);
              }, 0);

          // Total halaman ini saja (yang terlihat)
          var pageTotal = api
              .column(4, { page: 'current' })
              .data()
              .reduce(function (a, b) {
                  return intVal(a) + intVal(b);
              }, 0);

          // Update foot untuk menampilkan total di halaman ini
          $(api.column(4).footer()).html(
              'Rp ' + pageTotal.toLocaleString() + ' ( Total Rp ' + total.toLocaleString() + ')'
          );
      }
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