@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="mt-5">
        <div class="w-75 m-auto">
            <h4 class="mb-4">Transaction History</h4>
            <div class="my-2">
                Transaction Date:
            </div>
            <div class="my-2">
                Transaction Number:
            </div>
            <div class="my-2">
                Buyer Name:
            </div>
            <table class="table table-striped mt-4">
                <thead>
                <tr>
                    <th scope="col">Figure Picture</th>
                    <th scope="col">Figure Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0 ; $i < 3 ; $i ++)
                    <tr>
                        <td>
                            <img src="{{asset('assets/pika.jpg')}}" alt="" class="user-image">
                        </td>
                        <td>
                            Figure Name
                        </td>
                        <td>
                            99 Pcs
                        </td>
                        <td>
                            Rp. 9999999
                        </td>
                        <td>
                            Rp. 9999999
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection