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
        <h4 class="mb-4 w-75 m-auto" >Figure Title Here!</h4>
        <div class="w-75 m-auto d-flex pt-4">
            <div>
                <img src="{{asset('assets/placeholder.jpg')}}" alt="" class="border images">
            </div>
            <div class="pl-5">
                <div>
                    <h6>
                        Category: Category Here!
                    </h6>
                </div>
                <div>
                    <h6>
                        Quantity: 99
                    </h6>
                </div>
                <div>
                    <h6>
                        Price: Rp. 9999999
                    </h6>
                </div>
                <hr>
                <div>
                    <p>
                        Figure Description Here! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid blanditiis consequatur doloremque dolores eaque illum incidunt ipsam laboriosam rem sed similique, soluta voluptates? Debitis dolorem exercitationem incidunt molestiae voluptates?
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection