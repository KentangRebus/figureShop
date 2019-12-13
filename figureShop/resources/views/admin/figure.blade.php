@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="my-5">
        <div class="w-85 m-auto">
            <a href='Figure/Insert'>
                <button type="button" class="btn btn-primary">Insert New Figure</button>
            </a>
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
                @foreach($datas as $data)
                    <tr>
                        <td>
                            <img src="{{asset('storage/'.$data->picture)}}" alt="" class="cart-image">
                        </td>
                        <td class="">
                            {{$data->name}}
                        </td>
                        <td>
                            {{$data->category->name}}
                        </td>
                        <td class="w-25">
                            {{$data->description}}
                        </td>
                        <td>
                            {{$data->quantity}}
                        </td>
                        <td>
                            Rp.{{$data->price}}
                        </td>
                        <td>
                            <a href={{url('Admin/Figure/Update/'.$data->id)}}>
                                <button type="button" class="btn btn-primary" onclick="">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>

                        </td>
                        <td>
                            <a href={{url('Figure/doDelete/'.$data->id)}}>
                                <button type="button" class="btn btn-danger" onclick="">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{--  Pagination over here! --}}
            {{ $datas->links() }}
        </div>
    </div>
@endsection
