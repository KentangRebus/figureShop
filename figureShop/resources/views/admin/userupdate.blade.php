@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm my-5">
            <h3 class="text-center pb-2">Update User</h3>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" id="fullNameInput" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="emailInput" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="phoneInput" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="addressInput" placeholder="Address">
                </div>
                <div class="form-group">
                    <select class="form-control" id="genderSelection">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" id="roleSelection">
                        <option>Role</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control-file" id="profilePictureInput" required>
                </div>
                <div class="form-group text-danger">
                    Error message here!
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
@endsection