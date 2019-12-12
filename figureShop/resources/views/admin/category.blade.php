@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="mt-4">
        <div class="w-75 m-auto mt-5">
            <h4 class="mb-4">Manage Category</h4>
            <button type="button" class="btn btn-primary">Insert New Category</button>

            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th scope="col">Category Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @for($i = 0 ; $i < 3 ; $i ++)
                    <tr>
                        <td>Category Name</td>
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
        </div>
    </div>
@endsection