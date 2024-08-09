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
            <div class="d-flex align-items-center border mb-4" style="padding: 30px;  background-color: green">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0 text-white">Pesanan Selesai</h5>
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
        @elseif($transaction->status == "PENGEMBALIAN")
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
            <div class="d-flex align-items-center border mb-4" style="padding: 30px; background-color: RED ">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0 text-white">Komplain Di Terima</h5>
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
        <div class="col-lg-5 mb-5">
            <div class="d-flex flex-column">
                <h5 class="font-weight-semi-bold mb-3"> Detail Driver</h5>
                <img class="mb-2"
                src="{{ $transaction->driver->foto_driver ?($transaction->driver->first()->foto_driver) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                alt="" style="width: 100px;">
                <p class="mb-2"><i class="fa fa-user text-primary mr-3"></i>{{ $transaction->driver->nama_driver }}
                </p>

                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>{{ $transaction->driver->no_hp }}</p>
                <div class="d-flex flex-column">
                    <!-- Tombol aksi -->
                    
                </div>
            </div>
              
        </div>
    
        <div class="col-lg-5 mb-5">
            <div class="d-flex flex-column">
                <h5 class="font-weight-semi-bold mb-3"> Detail Kendaraan Driver</h5>
            
                <p class="mb-2"><i
                        class="fa fa-credit-card text-primary mr-3"></i>{{ $transaction->driver->no_plat }}
                </p>

                <p class="mb-2"><i class="fa fa-truck text-primary mr-3"></i>{{ $transaction->driver->no_plat }}</p>
                <p class="mb-2"><i class="fa fa-truck text-primary mr-3"></i>{{ $transaction->driver->tipe_kendaraan }}</p>

               
            </div>
              
        </div>

        <style>
            .centered-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .form-wrapper {
                background-color: #f9f9f9; /* Warna latar belakang */
                border: 1px solid #ddd; /* Warna border */
                border-radius: 8px; /* Radius border untuk rounded corners */
                padding: 20px; /* Jarak dalam div */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
                width: 100%;
                max-width: 600px; /* Atur lebar maksimal jika perlu */
            }
            .form-group {
                margin-bottom: 1rem; /* Jarak antara elemen form */
            }
            .form-control {
                margin-bottom: 0.5rem; /* Jarak antara input dan label */
            }
        </style>
        
        <div class="col-lg-12 mb-5">
            <div class="centered-content">
                <!-- Tampilkan formulir dan tombol hanya jika status transaksi adalah PENDING atau SEDANG DI ANTAR -->
                @if(in_array($transaction->status, ['PENDING', 'SEDANG DI ANTAR']))
                    <div class="form-wrapper">
                        <h5 class="font-weight-semi-bold mb-3">Jika Pesanan Tidak Sesuai</h5>
                        <p>Masukan Bukti Foto Beserta Keterangan Komplain Anda Di Bawah.</p>
                        <form action="{{ route('complaints.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="foto_1">Masukan Foto</label>
                                <input type="file" class="form-control" name="foto_1" id="foto_1" accept="image/*">
                                <input type="hidden" value="{{ $transaction->id }}" name="transactions_id">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Komplain atau Pengembalian</label>
                                <textarea id="deskripsi" name="keterangan" class="form-control" rows="4" placeholder="Masukkan deskripsi...">{{ old('keterangan') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm text-white">Ajukan Pengembalian</button>
                        </form>
                    </div>
                @endif
        
                <!-- Tampilkan tombol hanya jika status transaksi adalah PENDING atau SEDANG DI ANTAR -->
                @if(in_array($transaction->status, ['PENDING', 'SEDANG DI ANTAR']))
                    <div class="mt-3">
                        <a href="{{ route('dashboard.transaction.changeStatus', ['id' => $transaction->id, 'status' => 'PESANAN DITERIMA']) }}" class="btn btn-success btn-sm">
                            Pesanan Diterima
                        </a>
                    </div>
                @endif
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

<div class="col-lg-12 table-responsive mb-5">
    <table class="table table-bordered text-center mb-0">
        <thead class="bg-secondary text-dark">
            <tr>
                <th>Foto Review</th>
                <th>Invoice</th>
                <th>Driver</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody class="align-middle">
            @forelse ($complains as $complain)
            <tr>
                <td class="align-middle"><img
                        src="{{ $complain->foto_1 ?($complain->first()->foto_1) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                        alt="" style="width: 50px;"> FOTO KOMPLAIN</td>
                <td class="align-middle">{{ $complain->transaction->invoice }}</td>
                <td class="align-middle">
                    <div class="input-group quantity mx-auto" style="width: 100px;">

                        <input disabled type="text" class="form-control form-control-sm bg-secondary text-center"
                            value="{{$complain->transaction->driver->nama_driver}}">

                    </div>
                </td>
                <td class="align-middle">{{ $complain->transaction->status }}</td>

            </tr> 
            @empty
            <tr>
                <td class="align-middle"></td>
                <td class="align-middle">ANDA BELUM MENGAJUKAN KOMPLAIN ATAU PESANAN BERHASIL</td>
               
                <td class="align-middle"></td>

            </tr>
            @endforelse
            @foreach ($complains as $complain)
          
            @endforeach


        </tbody>
    </table>
</div>
<!-- Contact End -->
@endsection