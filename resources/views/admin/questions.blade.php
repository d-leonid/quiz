@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ URL('Admin/CreateQuestion') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="title">Question Number</label>
                        <input type="text" id="question_number"  disabled value="{{ $q_number }}" class="form-control" >
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="title">Title</label>
                        @if ($errors->has('title'))
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                        <input type="text" name="title" id="title" required="required" class="form-control">
                    </div>
                    <input type="hidden" name="question_number" value="{{ $q_number }}" required="">
                    <div class="col-md-12 mt-2">
                        <label for="title">Interesting Fact</label>
                        @if ($errors->has('interesting_fact'))
                            <p class="text-danger">{{ $errors->first('interesting_fact') }}</p>
                        @endif
                        <textarea name="interesting_fact" id="interesting_fact" required="required" class="form-control"></textarea>
                    </div> 
                    <div class="col-md-12 mt-2">
                        <label for="image">Image</label>
                        @if ($errors->has('image'))
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                        @endif
                        <input type="file" name="image" id="image" required="required" class="form-control p-1">
                    </div>           
                     <div class="col-md-12 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <label >Right?</label>
                                <input type="radio" required="" name="answer_rigth" value="1">
                            </div>
                            <div class="col-md-11">
                                <label for="title">Answer 1</label>
                                @if ($errors->has('answer'))
                                    <p class="text-danger">{{ $errors->first('answer1') }}</p>
                                @endif
                                <input type="text" name="answer1"  required="required" class="form-control">
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <label >Right?</label>
                                <input type="radio" required="" name="answer_rigth" value="2">
                            </div>
                            <div class="col-md-11">
                                <label for="title">Answer 2</label>
                                @if ($errors->has('answer'))
                                    <p class="text-danger">{{ $errors->first('answer2') }}</p>
                                @endif
                                <input type="text" name="answer2"  required="required" class="form-control">
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <label >Right?</label>
                                <input type="radio" required="" name="answer_rigth" value="3">
                            </div>
                            <div class="col-md-11">
                                <label for="title">Answer 3</label>
                                @if ($errors->has('answer'))
                                    <p class="text-danger">{{ $errors->first('answer3') }}</p>
                                @endif
                                <input type="text" name="answer3"  required="required" class="form-control">
                            </div>
                        </div>
                    </div>                    
                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <label >Right?</label>
                                <input type="radio" required="" name="answer_rigth" value="4">
                            </div>
                            <div class="col-md-11">
                                <label for="title">Answer 4</label>
                                @if ($errors->has('answer'))
                                    <p class="text-danger">{{ $errors->first('answer4') }}</p>
                                @endif
                                <input type="text" name="answer4"  required="required" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <input type="radio"  name="confirm" value="1">
                            </div>
                            <div class="col-md-11">
                               <p>Confirmed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ URL('Admin/home') }}" class="btn btn-danger float-right m-2">Finish</a>
                <button class="btn btn-success mt-2 float-right">Next</button>
            </form>
        </div>
    </div>
</div>
@endsection
