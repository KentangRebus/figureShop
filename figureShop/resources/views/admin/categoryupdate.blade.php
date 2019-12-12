@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm" style="margin-top: 11vh; margin-bottom: 11vh">
            <h3 class="text-center pb-2">Update Figure Category</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Category Name" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block" onclick="">Update</button>
            </form>
        </div>
    </div>
@endsection