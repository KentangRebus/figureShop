@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="mt-5">
        <div class="w-75 m-auto mt-5">
            <h4 class="mb-4">Manage Feedback</h4>

            <table class="table table-striped mt-5">
                <thead>
                <tr>
                    <th scope="col">Feedback Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Approve</th>
                    <th scope="col">Reject</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d->description}}</td>
                        <td>{{$d->status}}</td>
                        <td>
                            <form action="/Admin/Feedback/Approve/{{$d->id}}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-primary" onclick="">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="/Admin/Feedback/Reject/{{$d->id}}" method="POST">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger" onclick="">
                                    <i class="fas fa-times"></i>
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