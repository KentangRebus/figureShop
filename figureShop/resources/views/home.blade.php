@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="w-85 m-auto d-flex">
        <div class="d-flex flex-column my-4 w-35">
            <h5>Welcome, Guest</h5>
            <h6>Current date: </h6>
            <form action="">
                <div class="form-group d-flex">
                    <input type="text" class="form-control w-80" id="searchInput" placeholder="Search">
                    <i class="fas fa-search fa-lg align-self-center ml-2 search-btn" onclick=""></i>
                </div>
            </form>
        </div>
        <div class="my-4 ml-2 d-flex flex-wrap">
            {{-- item loop here! --}}
            @for($i = 0 ; $i < 6 ; $i++)
            <div class="card mx-2 mb-2" style="width: 18rem;">
                <img src="{{asset('assets/placeholder.jpg')}}" class="card-img-top" alt="Image Here!">
                <div class="card-body">
                    <a href="#"><h5 class="card-title">Figure title</h5></a>
                    <p class="card-text truncate" style="width: 15rem">Figure Description Here!</p>
                    <p class="card-text">Qty: 99</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Category Here!</small>
                    <button type="button" class="btn btn-success btn-block mt-3">Add to Cart</button>
                </div>
            </div>
            @endfor

            {{--  Pagination over here! --}}
            <nav class="m-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
@endsection