@extends('landing_inc.template')
@section('contents')
<div class="container">
	<div class='row '>
		<div class='col-md-8 '>
			<div class="row justify-content-center">
				<img src='{{ asset("images/loader.gif") }}'>
			</div>
			<p class="text-center" style="font-size: 12px;">Calculating result...</p>
					
			<div class="mt-4">
    			<h4>Interesting fact: </h4>
		        <div>{{$game->description}}</div>
		    </div>
		</div>
	</div>	
</div>
<script>

  myVar = setTimeout(result, 3000);

function result() {
	window.location.href = "{{ URL('/quiz/result')}}";
}
</script>
@endsection