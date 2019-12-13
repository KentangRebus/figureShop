@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm" style="margin-top: 11vh; margin-bottom: 11vh">
            <h3 class="text-center pb-2">Update Figure</h3>
            <form enctype="multipart/form-data" method="post" action="{{ url('Figure/doUpdate/'.$figure->id) }}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Figure Name" name="name" value="{{$figure->name}}">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="" rows="3" placeholder="Figure Description" name="description" >{{ $figure->description }}</textarea>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="" placeholder="Stock" name="stock" value="{{$figure->quantity}}">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="" placeholder="Price" name="price" value="{{$figure->price}}">
                </div>
                <div class="form-group">
                    <select class="form-control" name="category">
                        {{-- loop category here! --}}
                        <option value="category">Category</option>
                        @foreach($categories as $category)
                            <option value={{$category->id}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Figure Picture</label>
                    <input type="file" class="form-control-file" id="" name="picture">
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
                <button type="submit" class="btn btn-primary btn-block" onclick="">Insert</button>
            </form>
        </div>
    </div>
@endsection
