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
                @foreach($users as $user)
                    <tr>
                        <td>
                            <img src="{{asset('storage/'.$user->picture)}}" alt="" class="user-image">
                        </td>
                        <td class="">
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            {{$user->phone}}
                        </td>
                        <td class="w-25">
                            {{$user->address}}
                        </td>
                        <td>
                            {{$user->gender}}
                        </td>
                        <td>
                            {{$user->role}}
                        </td>
                        <td>
                            <a href={{url('Admin/User/'.$user->id)}}>
                                <button type="button" class="btn btn-primary" onclick="">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href={{url('Profile/doDelete/'.$user->id)}}>
                                <button type="button" class="btn btn-danger" onclick="">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
