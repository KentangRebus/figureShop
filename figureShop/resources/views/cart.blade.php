@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="my-5">
        <div class="w-75 m-auto">
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
                @for($i = 0 ; $i < 3 ; $i++)
                    <tr>
                        <td class="w-25">
                            <img src="{{asset('assets/pika.jpg')}}" alt="" class="cart-image">
                        </td>
                        <td class="">
                            Pikachu
                        </td>
                        <td>
                            99
                        </td>
                        <td>
                            Rp. 999999
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger btn-block" onclick="">Remove</button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
            <div class="ml-auto w-50 d-flex flex-row mb-3">
                <h5 >Total</h5>
                <h5 class="ml-auto">Rp. 99999999</h5>
            </div>
            <div class="ml-auto w-50">
                <button type="button" class="btn btn-success btn-block" onclick="">CheckOut</button>
            </div>
        </div>
    </div>
@endsection