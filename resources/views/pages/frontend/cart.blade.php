@extends('layouts.market')
@section('market-content')
<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($carts as $cart)
                    <tr>
                        <td class="align-middle"><img
                                src="{{ $cart->product->galleries()->exists() ?($cart->product->galleries->first()->url) : 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN88B8AAsUB4ZtvXtIAAAAASUVORK5CYII=' }}"
                                alt="" style="width: 50px;"> {{$cart->product->name}}
                            Stylish Shirt</td>
                        <td class="align-middle">Rp.{{number_format($cart->product->price)}}</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                    value="{{$cart->quantity}}">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">Rp.{{number_format($cart->product->price * $cart->quantity)}}</td>
                        <td class="align-middle">
                            <form action="{{route('cart-delete',$cart->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                {{--  <div class="input-group">
                    <input disabled type="text" class="form-control p-4"
                        placeholder="Edit Keranjang Anda Bila Ada Perubahan">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Edit Keranjang </button>
                    </div>
                </div>  --}}
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Shopping Summary</h4>
                </div>
                <div class="card-body">
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
                    <a href="{{route('checkoutpage')}}" class="btn btn-block btn-primary my-3 py-3">Proceed To
                        Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection