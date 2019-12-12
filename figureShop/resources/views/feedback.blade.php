@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm" style="margin-top: 21vh; margin-bottom: 21vh">
            <h3 class="text-center pb-2">Insert Feedback</h3>
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea type="text" class="form-control" name="" placeholder="Feedback" cols="30" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Insert New Feedback</button>
            </form>
        </div>
    </div>
@endsection
