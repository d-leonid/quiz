@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ URL('Admin/UpdateGames') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $game->id }}">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="title">Title</label>
                        @if ($errors->has('title'))
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                        <input type="text" name="title" id="title" required="required" class="form-control" value="{{ $game->title }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="image">Image</label>
                        @if ($errors->has('image'))
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                        @endif
                        <input type="file" name="image" id="image" class="form-control p-1" value="{{ $game->img }}">
                    </div>
                    <div class="col-md-12  mt-3">
                        <button  class="btn btn-success ml-2 float-right">Submit</button>
                        <!-- <button type="button" class="btn btn-warning  float-right edit_question">Edit Question</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
