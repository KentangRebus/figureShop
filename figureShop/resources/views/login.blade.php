@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm" style="margin-top: 21vh; margin-bottom: 21vh">
            <h3 class="text-center pb-2">Sign In</h3>
            <form action="{{ url('/doLogin') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" id="emailInput" name="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="rememberCheckBox" name="remember">
                    <label class="form-check-label">Remember me</label>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
            </form>
        </div>
    </div>
@endsection
