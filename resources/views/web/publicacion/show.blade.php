@extends('web.layouts.home')

@section('content')

<section class="main-content-w3layouts-agileits">
	<div class="container">
		
		<div class="row inner-sec">
			<!--left-->
			<div class="col-md-8 card">
				<h3 class="tittle">Blog Post</h3>
				<a href="#">
					<img src="{{ $publicacion->ruta_imagen }}" class="card-img-top img-fluid" alt="">
				</a>
				<div class="card-body">
					<ul class="blog-icons my-4">
						<li>
							<a href="#">
								<i class="far fa-calendar-alt"></i> {{ $publicacion->updated_at->toFormattedDateString() }}</a>
						</li>	
						<li class="mx-2">
							<a href="#">
								<i class="far fa-user"></i> Editor {{ $publicacion->user_modified->name }} </a>
						</li>								
					</ul>
					<h5 class="card-title ">
						<a href="#">{{ $publicacion->titulo }}</a>
					</h5>
					<p class="card-text mb-3"> {!! $publicacion->contenido !!} </p>
					
				</div>
				<div id="share"></div>
			</div>
				<!--//left-->
				<!--right-->
				@include('web.partials.aside')
				<!--//right-->
			</div>
	</div>
</section>

@endsection