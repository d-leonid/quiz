@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ URL('Admin/UpdateQuestion') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $question->id }}">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="title">Question Number</label>
                        <input type="text" id="question_number"  disabled value="{{ $question->question_number }}" class="form-control" >
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="title">Title</label>
                        @if ($errors->has('title'))
                            <p class="text-danger">{{ $errors->first('title') }}</p>
                        @endif
                        <input type="text" name="title" id="title" required="required" class="form-control" value="{{ $question->title }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="title">Interesting Fact</label>
                        @if ($errors->has('interesting_fact'))
                            <p class="text-danger">{{ $errors->first('interesting_fact') }}</p>
                        @endif
                        <textarea name="interesting_fact" id="interesting_fact" required="required" class="form-control">{{ $question->description }}</textarea>
                    </div> 
                    <div class="col-md-12 mt-2">
                        <label for="image">Image</label>
                        @if ($errors->has('image'))
                            <p class="text-danger">{{ $errors->first('image') }}</p>
                        @endif
                        <input type="file" name="image" id="image" class="form-control p-1">
                    </div>
                    @foreach($question->answers as $key => $answer)                       
                    <div class="col-md-12 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <label >Right?</label>
                                <input type="radio" required="" <?php echo $answer->right == 1?'checked="checked"':''  ?> name="answer_rigth" value="{{$key+1}}">
                            </div>
                            <div class="col-md-11">
                                <label for="title">Answer {{$key+1}}</label>
                                @if ($errors->has('answer'))
                                    <p class="text-danger">{{ $errors->first('answer4') }}</p>
                                @endif
                                <input type="text" name="answer{{ $key+1 }}" required="required"  class="form-control" value="{{ $answer->answer }}" >
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-6 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <input type="radio" <?php echo $question->confirm == 1?'checked="checked"':''  ?> name="confirm"  value="1">
                            </div>
                            <div class="col-md-11">
                               <p>Confirmed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="row">
                            <div class="col-md-1">
                                <input type="radio" <?php echo $question->confirm == 0?'checked="checked"':''  ?> name="confirm"  value="0">
                            </div>
                            <div class="col-md-11">
                               <p>No Confirmed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12  mt-3">
                        <button  class="btn btn-success ml-2 float-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
