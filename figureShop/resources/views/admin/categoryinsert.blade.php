@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm" style="margin-top: 11vh; margin-bottom: 11vh">
            <h3 class="text-center pb-2">Insert Figure Category</h3>
            <form action="/Admin/Category/doInsert" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Category Name" name="name" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block" onclick="">Insert</button>
            </form>
        </div>
    </div>
@endsection