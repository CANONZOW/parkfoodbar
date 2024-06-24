@extends('layouts.admin')

@section('admin-content')


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
