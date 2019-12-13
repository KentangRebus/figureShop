@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="mt-5">
        <div class="w-75 m-auto">
            <h4 class="mb-4">Transaction History</h4>
            @foreach($items as $item)
            <div class="my-2">
                Transaction Date: {{$item['header']->date}}
            </div>
            <div class="my-2">
                Transaction Number: {{$item['header']->id}}
            </div>
            <div class="my-2">
                Buyer Name: {{$item['header']->users->name}}
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
                @foreach($item['detail'] as $detail)
                    <tr>
                        <td>
                            <img src="{{asset('storage/'.$detail->picture)}}" alt="" class="user-image">
                        </td>
                        <td>
                            {{$detail->name}}
                        </td>
                        <td>
                            {{$detail->quantity}}
                        </td>
                        <td>
                            Rp.{{$detail->price}}
                        </td>
                        <td>
                            Rp. {{$detail->quantity*$detail->price}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                @endforeach
            {{ $items->links() }}
        </div>
    </div>
@endsection
