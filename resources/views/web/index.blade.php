
@extends('web.layouts.home')

@section('content')

<!-- banner slide-->
<section class="main-content-w3layouts-agileits">
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="blog" class="btn btn-primary read-m">leer más</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="blog" class="btn btn-primary read-m">leer más</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="blog" class="btn btn-primary read-m">leer más</a>
						</div>
					</div>
				</div>
				
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
</section>
<!-- banner slide-->

<!--/main-->
<section class="main-content-w3layouts-agileits">
	<div class="container">
		<h3 class="tittle">Noticias Recientes</h3>
		<div class="row inner-sec">
			<!--left-->
			<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
				<div class="row mb-4">
					@foreach ($publicaciones as $publicacion)
					<div class="col-md-6 card">
						<a href="single">
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
										<i class="far fa-user"></i> Editor </a>
								</li>								
							</ul>
							<h5 class="card-title ">
								<a href="{{ route('web.publicacion.show', $publicacion->slug) }}">{{ $publicacion->titulo}}</a>
							</h5>
							<p class="card-text mb-3">{{ $publicacion->contenido }}</p>
							<a href="{{ route('web.publicacion.show', $publicacion->slug ) }}" class="btn btn-primary read-m">Leer más</a>
						</div>
					</div>
					@endforeach
																	
				</div>

				{{ $publicaciones->links() }}

			</div>
			<!--//left-->
			<!--right-->
			@include('web.partials.aside')
			<!--//right-->
			</div>
		</div>
</section>
<!--//main-->

@endsection