@extends('layout.master')

@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div>
        <div class="sign-in-box shadow-sm" style="margin-top: 11vh; margin-bottom: 11vh">
            <h3 class="text-center pb-2">Update Figure</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Figure Name" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="" rows="3" placeholder="Figure Description" required></textarea>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="" placeholder="Quantity" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="" placeholder="Price" required>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        {{-- loop category here! --}}
                        @for($i = 0 ; $i < 3 ; $i++)
                            <option>Category</option>
                        @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Figure Picture</label>
                    <input type="file" class="form-control-file" id="">
                </div>
                <button type="submit" class="btn btn-primary btn-block" onclick="">Update</button>
            </form>
        </div>
    </div>
@endsection