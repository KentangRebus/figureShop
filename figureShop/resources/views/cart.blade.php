@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="my-5">
        <div class="w-75 m-auto">
            @if(count($carts) != 0)
            <form method="post" action={{url('/doCheckout/'.$carts[0]->cartId)}}>
                {{csrf_field()}}
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="">

                        @foreach($carts as $cart)
                            <tr>
                                <td class="w-25">
                                    <img src="{{asset('storage/'.$cart->picture)}}" alt="" class="cart-image">
                                </td>
                                <td class="">
                                    {{$cart->name}}
                                </td>
                                <td>
                                    {{$cart->quantity}}
                                </td>
                                <td>
                                    Rp.{{$cart->quantity*$cart->price}}
                                    <input type="hidden" style="display: none" name="total" value="{{$total += $cart->quantity*$cart->price}}">
                                </td>
                                <td>
                                    <a href={{url('Cart/RemoveDetail/'.$cart->id)}}>
                                        <button type="button" class="btn btn-danger btn-block" onclick="">Remove</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="ml-auto w-50 d-flex flex-row mb-3">
                    <h5 >Total</h5>
                    <h5 class="ml-auto">Rp.{{$total}}</h5>
                </div>
                <div class="ml-auto w-50">
                    <button type="submit" class="btn btn-success btn-block" onclick="">CheckOut</button>
                </div>
            </form>
            @else
                <h2>Cart is Empty</h2>
            @endif
        </div>
    </div>
@endsection
