@extends('layouts.market')
@section('market-content')
<!-- Checkout Start -->
<form action="{{route('checkout')}}" method="post">
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">

                @csrf
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Alamat Pengiriman</h4>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Nama </label>
                            <input class="form-control" type="text" placeholder="John" value="{{ Auth::user()->name  }}">
                        </div>
                        {{--  <div class="col-md-6 form-group">
                            <label>Nama Belakang</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div>  --}}
                        <div class="col-md-12 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="contoh@contoh.com" value="{{Auth::user()->email }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Nomor Telepon</label>
                            <input class="form-control" type="text" name="no_hp" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Alamat</label>
                            <input class="form-control" type="text" name="address" placeholder="Jalan 123">
                        </div>
                        {{--  <div class="col-md-6 form-group">
                            <label>Alamat Baris 2</label>
                            <input class="form-control" type="text" name="address2" placeholder="Jalan 123">
                        </div>  --}}
                        {{--  <div class="col-md-6 form-group">
                            <label>Negara</label>
                            <select class="custom-select" name="negara">
                                <option selected>Indoensia</option>

                            </select>
                        </div>  --}}
                        {{--  <div class="col-md-6 form-group">
                            <label>Kota</label>
                            <input class="form-control" type="text" name="kota" placeholder="Jambi">
                        </div>  --}}
                        {{--  <div class="col-md-6 form-group">
                            <label>Provinsi</label>
                            <input class="form-control" type="text" name="provinsi" placeholder="Jambi">
                        </div>  --}}
                        <div class="col-md-12 form-group">
                            <label>Kode Pos</label>
                            <input class="form-control" type="text" name="kodepos" placeholder="36125">
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        @foreach ($carts as $cart)
                        <div class="d-flex justify-content-between">
                            <p>{{$cart->product->name}}</p>
                            <p>Rp.{{number_format($cart->product->price * $cart->quantity)}}</p>
                        </div>
                        @endforeach

                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Total Item</h6>
                            <h6 class="font-weight-medium">{{number_format($totalItem)}}</h6>
                        </div>
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Total Quantity</h6>
                            <h6 class="font-weight-medium">{{number_format($totalQuantity)}}</h6>
                        </div>
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">Rp.{{number_format($subtotal)}}</h6>
                        </div>

                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">Rp.{{number_format($subtotal)}}</h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="COD">
                                <label class="custom-control-label" for="COD">COD</label>
                            </div>
                        </div>
                        {{--  <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>  --}}
                        {{--  <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>  --}}
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place
                            Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Checkout End -->
@endsection