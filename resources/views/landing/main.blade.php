@extends('landing_inc.template')
@section('contents')
<div class="container mt-3">
	<div class="row">
		<div class="col-md-9 col-12">
			<div class='row pt-2'>
				<div class='col-md-12'>
					<div class='col-md-12'>
						<h2>
							Quizzes
						</h2>
					</div>
					<div class="row">
						@foreach( $games as $game )
							<div class='col-md-4 col-11 class_for_custom_bootstrap'>
								<a class='a_for_game_page' href='{{ URL("quiz/".base64_encode($game->id." ".$game->title ))}}'>
									<div class='full_width_div'>
										<div class='div_for_image'>
											<img style='height:170px' class='img-fluid img_class_games' src='{{ asset("images/$game->img") }}'>
										</div>
										<div class='div_for_title'>
											{{$game->title}}
										</div>
									</div>
								</a>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div> <!-- End col-md-9 col-12 -->
	</div> <!-- End row -->
</div>

@endsection