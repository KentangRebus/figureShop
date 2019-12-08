@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm" style="margin-top: 21vh; margin-bottom: 21vh">
            <h3 class="text-center pb-2">Sign In</h3>
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="emailInput" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="passwordInput" placeholder="Password" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberCheckBox">
                    <label class="form-check-label">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
            </form>
        </div>
    </div>
@endsection