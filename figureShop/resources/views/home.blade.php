@extends('layout.master')

@section('css')

@endsection

@section('js')
    <script>
        let datePlaceHolder = document.getElementById('datePlaceHolder');

        setInterval(function(){
            let date = new Date();
            datePlaceHolder.innerHTML = date;
        }, 900)

    </script>
@endsection

@section('content')
    <div class="w-85 m-auto d-flex">
        <div class="d-flex flex-column my-4 w-35">
            @if($user != null)
            <h5>Welcome, {{$user->name}}</h5>
            @else
                <h5>Welcome, Guest</h5>
            @endif
            <h6>Current date: <span id="datePlaceHolder"></span></h6>
            <form action="{{url('/')}}" method="get">
                <div class="form-group d-flex">
                    <input type="text" class="form-control w-75" id="searchInput" placeholder="Search" name="search">
                    <button class="btn btn-link" type="submit">
                        <i class="fas fa-search fa-lg align-self-center ml-2 search-btn" onclick="" ></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="my-4 ml-2 d-flex flex-wrap">
            {{-- item loop here! --}}
            @foreach ($figures as $figure)
                <form action="{{ url('/addToCart') }}" method="post">
                    {{csrf_field()}}
                <div class="card mx-2 mb-2" style="width: 18rem;">
                    <img src="{{asset('storage/'.$figure->picture)}}" class="card-img-top" alt="Image Here!">
                    <div class="card-body">
                        <a href="Detail/{{$figure->id}}"><h5 class="card-title">{{ $figure->name }}</h5></a>
                        <p class="card-text truncate" style="width: 15rem">{{ $figure->description }}</p>
                        <p class="card-text">{{ $figure->quantity }}</p>

                        <input type="hidden" name="figureId" value={{$figure->id}}>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{$figure->category->name}}</small>
                        @if(auth()->user() != null)
                        <button type="submit" class="btn btn-success btn-block mt-3">Add to Cart</button>
                            @endif
                    </div>
                </div>
                </form>
            @endforeach
        </div>
    </div>
    <div class="w-25 m-auto">
        {{ $figures->links() }}
    </div>
@endsection
