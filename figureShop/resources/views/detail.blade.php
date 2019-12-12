@extends('layout.master')

@section('css')
    <style>
        .images {
            width: 60vh;
            height: 82vh;
            object-fit: cover;
        }
    </style>
@endsection

@section('js')

@endsection

@section('content')
    <div class="pt-3 pb-5">
        <h4 class="mb-4 w-75 m-auto" >{{$data->name}}</h4>
        <div class="w-75 m-auto d-flex pt-4">
            <div>
                <img src="{{asset('storage/'.$data->picture)}}" alt="" class="border images">
            </div>
            <div class="pl-5">
                <div>
                    <h6>
                        Category: {{$data->category->name}}
                    </h6>
                </div>
                <div>
                    <h6>
                        Quantity: {{$data->quantity}}
                    </h6>
                </div>
                <div>
                    <h6>
                        Price: Rp.{{$data->price}}
                    </h6>
                </div>
                <hr>
                <div>
                    <p>
                        {{$data->description}}
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
