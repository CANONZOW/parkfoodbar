@extends('layouts.market')
@section('market-content')
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        @if($transaction->status == "PENDING")
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di-Siapkan</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; ">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>

                <h5 class="font-weight-semi-bold m-0">Pesanan Sedang Diantar</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class=" fa fa-solid fa-hand-holding-heart text-primary m-0 mr-3">
                </h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di Terima</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; ">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Selesai</h5>
            </div>
        </div>
        @elseif($transaction->status == "SEDANG DI ANTAR")
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di-Siapkan</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow ">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>

                <h5 class="font-weight-semi-bold m-0">Pesanan Sedang Diantar</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                <h1 class=" fa fa-solid fa-hand-holding-heart text-primary m-0 mr-3">
                </h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di Terima</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; ">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Selesai</h5>
            </div>
        </div>
        @elseif($transaction->status == "PESANAN DITERIMA")
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di-Siapkan</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow ">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>

                <h5 class="font-weight-semi-bold m-0">Pesanan Sedang Diantar</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow">
                <h1 class=" fa fa-solid fa-hand-holding-heart text-primary m-0 mr-3">
                </h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di Terima</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; ">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Selesai</h5>
            </div>
        </div>
        @elseif($transaction->status == "SUCCESS")
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di-Siapkan</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow ">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>

                <h5 class="font-weight-semi-bold m-0">Pesanan Sedang Diantar</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: yellow">
                <h1 class=" fa fa-solid fa-hand-holding-heart text-primary m-0 mr-3">
                </h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Di Terima</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: green ">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Pesanan Selesai</h5>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Terimakasih Pesanan Anda Sedang Kami Siapkan</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-5">
            <h5 class="font-weight-semi-bold mb-3">Detail Pesanan Anda</h5>
            <p>Terimakasih Sudah Melakukan Pemesanan Berikut Detail Pemesanan anda.</p>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3">Alamat</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{$transaction->address}}</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>{{$transaction->address2}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+{{$transaction->no_hp}}</p>
            </div>
            <div class="d-flex flex-column">
                <h5 class="font-weight-semi-bold mb-3">Detail Pelanggan</h5>
                <p class="mb-2"><i class="fa fa-user text-primary mr-3"></i>{{$transaction->user->name}}</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>{{$transaction->user->email}}</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>{{$transaction->no_hp}}</p>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <h5 class="font-weight-semi-bold mb-3">Detail Pesanan Anda</h5>
            <p>Terimakasih Berikut Detail Pembayaran.</p>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3">Detail invoice dan Pembayaran</h5>
                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                <p class="mb-2"><i class="fa  fa-file-invoice text-primary mr-3"></i>{{$transaction->invoice}}
                </p>
                <p class="mb-2"><i class="fa fa-credit-card text-primary mr-3"></i>{{$transaction->payment}}
                </p>
                <p class="mb-2"><i class="fas fa-exchange-alt text-primary mr-3"></i>{{$transaction->status}}
                </p>
            </div>
            <div class="d-flex flex-column">
                <h5 class="font-weight-semi-bold mb-3"> Detail Pembayaran</h5>
                <p class="mb-2"><i
                        class="fa fa-credit-card text-primary mr-3"></i>Rp.{{number_format($transaction->total_price)}}
                </p>

                <p class="mb-2"><i class="fa fa-truck text-primary mr-3"></i>FREE</p>
                <p class="mb-0"><i class="fa fa-calendar text-primary mr-3"></i>{{$transaction->tgl}}</p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 table-responsive mb-5">
    <table class="table table-bordered text-center mb-0">
        <thead class="bg-secondary text-dark">
            <tr>
                <th>Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>

            </tr>
        </thead>
        <tbody class="align-middle">
            @foreach ($transactionitem as $item)
            <tr>
                <td class="align-middle"><img
                        src="{{ $item->product->galleries()->exists() ?($item->product->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                        alt="" style="width: 50px;"> {{$item->product->name}}</td>
                <td class="align-middle">Rp.{{number_format($item->product->price)}}</td>
                <td class="align-middle">
                    <div class="input-group quantity mx-auto" style="width: 100px;">

                        <input disabled type="text" class="form-control form-control-sm bg-secondary text-center"
                            value="{{$item->quantity}}">

                    </div>
                </td>
                <td class="align-middle">Rp.{{number_format($item->product->price * $item->quantity)}}</td>

            </tr>
            @endforeach


        </tbody>
    </table>
</div>
<!-- Contact End -->
@endsection