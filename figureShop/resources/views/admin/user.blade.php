@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="my-5">
        <div class="w-85 m-auto">
            <h2>Manage Users</h2>
            <hr>
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Role</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody class="">
                @for($i = 0 ; $i < 3 ; $i++)
                    <tr>
                        <td>
                            <img src="{{asset('assets/pika.jpg')}}" alt="" class="user-image">
                        </td>
                        <td class="">
                            User Name
                        </td>
                        <td>
                            User Email
                        </td>
                        <td>
                            User phone number
                        </td>
                        <td class="w-25">
                            User Address
                        </td>
                        <td>
                            User Gender
                        </td>
                        <td>
                            User Role
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

        </div>
    </div>
@endsection