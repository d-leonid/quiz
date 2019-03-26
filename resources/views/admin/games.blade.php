@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ URL('Admin/CreateGames') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="title">Title</label>
                        @if ($errors->has('title'))
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                        <input type="text" name="title" id="title" required="required" class="form-control">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="image">Image</label>
                        @if ($errors->has('image'))
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                        @endif
                        <input type="file" name="image" id="image" required="required" class="form-control p-1">
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-success  float-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
