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
                @for($i = 0 ; $i < 3 ; $i ++)
                    <tr>
                        <td>Feedback Here!</td>
                        <td>Status Here!</td>
                        <td>
                            <button type="button" class="btn btn-primary" onclick="">
                                <i class="fas fa-check"></i>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="">
                                <i class="fas fa-times"></i>
                            </button>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
@endsection