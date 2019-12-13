@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm my-5">
            <h3 class="text-center pb-2">Update Profile</h3>
            <form enctype="multipart/form-data" action="{{ url('Profile/doUpdate/'.$user->id) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" id="fullNameInput" name="FullName" placeholder="Full Name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="emailInput" name="Email" placeholder="Email Address" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="phoneInput" name="Phone" placeholder="Phone Number" value="{{ $user->phone }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="addressInput" name="Address" placeholder="Address" value="{{ $user->address }}">
                </div>
                <div class="form-group">
                    <select class="form-control" id="genderSelection" name="Gender">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control-file" id="profilePictureInput" name="profile_picture">
                </div>
                <div class="form-group text-danger">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
@endsection
