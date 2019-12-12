@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="w-85 m-auto d-flex">
        <div class="d-flex flex-column my-4 w-35">
            @if($user != null)
            <h5>Welcome, {{$user->name}}</h5>
            @else
                <h5>Welcome, Guest</h5>
            @endif
            <h6>Current date: </h6>
            <form action="{{url('/')}}" method="get">
                <div class="form-group d-flex">
                    <input type="text" class="form-control w-80" id="searchInput" placeholder="Search" name="search">
                    <button type="submit">
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
                        <button type="submit" class="btn btn-success btn-block mt-3">Add to Cart</button>
                    </div>
                </div>
                </form>
            @endforeach

            {{--  Pagination over here! --}}
            {{ $figures->links() }}
{{--            <nav class="m-auto">--}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Previous">--}}
{{--                            <span aria-hidden="true">&laquo;</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Next">--}}
{{--                            <span aria-hidden="true">&raquo;</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}

        </div>
    </div>
@endsection
