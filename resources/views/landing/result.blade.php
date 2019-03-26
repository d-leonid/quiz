<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Quiz-Bees</title>
<link rel="stylesheet" href="{{ asset('css/landing/style.css') }}">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<meta property="og:title" 		content="Great, you scored {{$result}}%!" />
<meta property="og:type" 		content="article" />
<meta property="og:url" 		content="{{ URL('/result/token='.base64_encode($start->id.' '.$game->title)) }}" />
<meta property="og:image" 		content='{{ asset("images/$game->img") }}' />
<meta property="og:description" content="As a last step, share your result on Facebook and challenge your friends!" />
<meta property="og:site_name" 	content="quiz-bees.com" />
<meta property="fb:app_id"      content="533607790475154" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand  li_for_logo_img" href="{{URL('/')}}"><img src="{{ asset('images/logo.png') }}"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item li_for_header_item">
	        <a class="nav-link a_class_for_item_menu" href="#"><span class='class_for_hover_effect_menu'>EDITORS' CHOICE</span></a>
	      </li>
	      <li class="nav-item li_for_header_item">
	        <a class="nav-link a_class_for_item_menu" href="#"><span class='class_for_hover_effect_menu'>MORE QUIZZES</span></a>
	      </li>
	    </ul>
	  </div>
	</div>
</nav>
<div class="container">
	<div class="game-custom">
		<div class='row '>
			<div class='col-md-8'>
				<div class="container">
					<h3 class="text-center">Great, you scored {{number_format($result)}}%!</h3>
					<div class="row justify-content-center ">
						<h4 style="font-size: 14px;" class="m-1 w-100 text-center">{{ $game->summary_text }}</h4>
						<div class="row justify-content-center w-75 mt-2">
						<h4 style="font-size: 12px;" class="text-center">As a last step, share your result on Facebook and challenge your friends!</h4>
							<img class="result_img" src='{{ asset("images/$game->img") }}' alt="">
							<div class="fb-share-button mt-2" data-href="{{ URL('/result/token='.base64_encode($start->id.' '.$game->title)) }}" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="{{ URL('/result/token='.base64_encode($start->id.' '.$game->title)) }}" class="fb-xfbml-parse-ignore " id="fb_share">Поделиться</a></div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<div class='container'>
	<div class='row pt-5 pr-3'>
		<div class='col-md-12 footer_part'>
			<ul class='footer_ul pt-3'>
				<li class='footer_ul_li' ><a href='#' class='a_footer_menu'>Home</a></li>
				<li class='footer_ul_li' ><a href='#' class='a_footer_menu'>Imprint</a></li>
				<li class='footer_ul_li' ><a href='#' class='a_footer_menu'>Terms</a></li>
				<li class='footer_ul_li' ><a href='#' class='a_footer_menu'>Data protection</a></li>
			</ul>
		</div>
		<div class='col-md-12'>
			<div class='bottom_desc'>
				Disclaimer: our content is created for the purpose of fun and entertainment only. Please don't use Quiz-Bees to make important life decisions and remember that it is intended purely for fun.
			</div>
			<div class='bottom_desc'>
				© 2019 Quiz-Bees
			</div>
		</div>
	</div>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2&appId=533607790475154&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/landing/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>