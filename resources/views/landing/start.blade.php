@extends('landing_inc.template')
@section('contents')
<div class="container mt-3">
	<div class='row'>
		<div class='col-md-9 col-12'>
			<form action="{{ URL('quiz/test') }}" method="post" class="form_quiz">
				@csrf

				@if (count($game->questions) == 0)
        			<script>window.location.href = "{{URL('/') }}" </script>
        			<?php die; ?>
				@endif
				<div class="progress">
				  <div class="progress-bar" style="width:{{($starts->question_number*100)/count($game->questions).'%'}}"></div>
				  <span class="progress_span">Question {{$starts->question_number}} / {{count($game->questions)}}</span>
				</div>
		  		<h4 class="mt-2 mb-2 p-2 bg-secondary text-white quiz_start_title">{{$game->questions[$starts->question_number-1]->title}}</h4>
		  		<div class=" w-100 start_image">
		  			<div class="d-flex justify-content-center">
		  				<img  style='object-fit: cover;' src='{{ asset("images/".$game->questions[$starts->question_number-1]->image) }}'>
		  			</div>
		  		</div>
	  			<div class="row">
	  				<div class="col-12">
		  				<div class="container w-100">
				  			<div class="pt-2 d-flex justify-content-center">
				  				<img class='w-100' style='object-fit: cover;' src='{{ asset("images/728x90_ad.jpg") }}'>
				  			</div>
		  				</div>
		  			</div>
		  		</div>
			</form>
		  		@if(Session::get('Joker'))
					<div class="row justify-content-center">
						@foreach(Session::get('Joker') as $answer)
						<div class="col-md-6 col-12 mt-2">
							<button type="button" class="btn w-100 btn_answers" quiz="{{base64_encode($answer['id'])}}">{{$answer['answer']}}</button>
						</div>
						@endforeach
					</div>
				<?php Session::forget('Joker'); ?>
				@else
					<div class="row justify-content-center">
						@foreach($game->questions[$starts->question_number-1]->answers as $key => $answer)
						<div class="col-md-6 col-12  mt-2">
							<button type="button" class="btn w-100 btn_answers" quiz="{{base64_encode($key)}}">{{$answer->answer}}</button>
						</div>
						@endforeach
					</div>
				@endif
				@if($starts->joker == 0)
					<div class="row justify-content-center mt-4">
					    <button data-toggle="modal"  class="btn joker" data-target="#myJoker">
					    	<i class="far fa-lightbulb"></i> 50-50 Joker</button> 
					</div>
				@endif
				<div class="mt-4 interesting">
        			<h4>Interesting fact: </h4>
			        <div>{{$game->questions[$starts->question_number-1]->description}}</div>
			    </div>
				<div class="mt-4">
		  			<img class='w-100' style='object-fit: cover;' src='{{ asset("images/tabola_bottom.PNG") }}'>
			    </div>
		</div>
		<div class='col-md-3 col-12'>
		  	<img src='{{ asset("images/300x600_ad.jpg") }}'>
		  	<img class='mt-3' src='{{ asset("images/300x250_ad.jpg") }}'>
		</div>
	</div>	
</div>

@endsection