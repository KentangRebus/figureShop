@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm my-5">
            <h3 class="text-center pb-2">Sign Up</h3>
            <form enctype="multipart/form-data" action="{{ url('/doRegister') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" id="fullNameInput" name="FullName" placeholder="Full Name" value="{{ old('FullName') }}">
                </div>
                
                <div class="form-group">
                    <input type="email" class="form-control" id="emailInput" name="Email" placeholder="Email Address" value="{{ old('Email') }}">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="passwordInput" name="Password" placeholder="Password" value="{{ old('Password') }}">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="confirmPasswordInput" name="ConfirmPassword" placeholder="Confirm Password" value="{{ old('ConfirmPassword') }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="phoneInput" name="Phone" placeholder="Phone Number" value="{{ old('Phone') }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="addressInput" name="Address" placeholder="Address" value="{{ old('Address') }}">
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

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="agreeCheckBox" name="Agreement">
                    <label class="form-check-label">I Agree to Term and Condition</label>
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
                <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
            </form>
        </div>
    </div>
@endsection