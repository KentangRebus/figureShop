@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="mt-4">
        <div class="w-75 m-auto mt-5">
            <h4 class="mb-4">Manage Category</h4>
            <a href="/Admin/Category/Insert">
                <button type="button" class="btn btn-primary">Insert New Category</button>
            </a>

            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th scope="col">Category Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>
                            <form action="/Admin/Category/Update/{{$d->id}}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-primary" onclick="">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="/Admin/Category/doDelete/{{$d->id}}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger" onclick="">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection