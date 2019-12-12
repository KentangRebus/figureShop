@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="mt-5">
        <div class="w-75 m-auto mt-5">
            <h2>Profile</h2>
            <hr>
            <div class="w-50 m-auto">
                <h4>Personal Info</h4>
                <form>
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" id="" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="text" class="form-control" id="" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label>Gender:</label>
                        <input type="text" class="form-control" id="" placeholder="Gender" required>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" id="" placeholder="Address" required>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block" onclick="">Edit Profile</button>
                </form>
            </div>
        </div>
    </div>
@endsection