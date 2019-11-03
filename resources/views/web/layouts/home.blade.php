<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<title>Trisomia 21 V. A.@isset($publicacion) {{ " | ".$publicacion->titulo }} @endisset</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


		{{-- <script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script> --}}

		<link href="{{ asset('web/css/bootstrap.css') }}" rel='stylesheet'>
		{{-- <link href="{{ asset('web/css/single.css') }}" rel="stylesheet"> --}}
		<link href="{{ asset('web/css/style.css') }}" rel='stylesheet'>
		<link href="{{ asset('web/css/fontawesome-all.css') }}" rel="stylesheet">
		<link href="{{ asset('web/plugins/jssocials/jssocials.css') }}" rel="stylesheet">
		<link href="{{ asset('web/plugins/jssocials/jssocials-theme-classic.css') }}" rel="stylesheet">

		{{--  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
		{{-- <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
			rel="stylesheet"> --}}
		{{-- <link href="//fonts.googleapis.com/css?family=Signika:400,600,700&display=swap" rel="stylesheet"> --}}
		<link href="//fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
<body>
		<header>
			<section class="">
				@include('web.partials.navbar')
			</section>
		</header>

			<section class="main-content-agileits">
				@yield('content')	
			</section>

			@include('web.partials.footer')
		
		<!-- js -->
		<script src="{{ asset('web/js/jquery-2.2.3.min.js') }}"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<!-- //js -->
		<!--/ start-smoth-scrolling -->
		<script src="{{ asset('web/js/move-top.js') }}"></script>
		<script src="{{ asset('web/js/easing.js') }}"></script>
		<script>
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 900);
				});
			});
		</script>
		<!--// end-smoth-scrolling -->
		{{-- <script>
			$(document).ready(function () {
				/*
										var defaults = {
											containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
										};
										*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script> --}}
		<!-- //Custom-JavaScript-File-Links -->
		<script src="{{ asset('web/js/bootstrap.js') }}"></script>
		<script src="{{ asset('web/js/custom.js') }}"></script>
		<script src="{{ asset('web/plugins/jssocials/jssocials.js') }}"></script>
	</body>

</html>