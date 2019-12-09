@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="my-5">
        <div class="w-85 m-auto">
            <button type="button" class="btn btn-primary">Insert New Figure</button>
            <hr>
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Figure Name</th>
                    <th scope="col">Figure Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody class="">
                @for($i = 0 ; $i < 5 ; $i++)
                    <tr>
                        <td>
                            <img src="{{asset('assets/pika.jpg')}}" alt="" class="cart-image">
                        </td>
                        <td class="">
                            Pikachu
                        </td>
                        <td>
                            Category
                        </td>
                        <td class="w-25">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, blanditiis consequuntur deserunt dolore doloremque harum illum
                        </td>
                        <td>
                            Quantity
                        </td>
                        <td>
                            Rp. 9999999
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
            {{--  Pagination over here! --}}
            <nav class="text-center">
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