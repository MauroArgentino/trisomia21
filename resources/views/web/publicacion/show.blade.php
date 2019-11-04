@extends('web.layouts.home')

@section('content')

<section class="main-content-w3layouts-agileits">
	<div class="container">
		
		<div class="row inner-sec">
			<!--left-->
			<div class="col-md-8 card">
				<h3 class="tittle">Blog Post</h3>
				<a href="#">
					@if ( Str::contains($publicacion->ruta_imagen, "lorem") )
					<a data-fancybox="images" data-caption="{{ $publicacion->extracto }}" href="{{$publicacion->ruta_imagen}}">
								<img src="{{$publicacion->ruta_imagen}}" class="card-img-top img-fluid" alt="">
							@else
							<a data-fancybox="images" data-caption="{{ $publicacion->extracto }}" href="{{ asset('storage/images/posts/'.$publicacion->ruta_imagen) }}">
								<img src="{{ asset('storage/images/posts/'.$publicacion->ruta_imagen) }}" class="card-img-top img-fluid" alt="">
							@endif
				</a>
				<div class="card-body">
					<ul class="blog-icons my-4">
						<li>
							<a href="#">
								<i class="far fa-calendar-alt"></i> {{ $publicacion->updated_at->toFormattedDateString() }}</a>
						</li>	
						<li class="mx-2">
							<a href="#">
								@if ( !($publicacion->user_modified))
									<i class="far fa-user"></i> Editor {{ $publicacion->user_create->name }} </a>
								@else
									<i class="far fa-user"></i> Editor {{ $publicacion->user_modified->name }} </a>
								@endif
						</li>								
					</ul>
					<h5 class="card-title ">
						<a href="#">{{ $publicacion->titulo }}</a>
					</h5>
					<p class="card-text mb-3"> {!! $publicacion->contenido !!} </p>
					
					<span><i class="fa fa-tag"></i> Etiquetas
						@foreach ($publicacion->tags as $tag)
							<a href="{{ route('web.publicaciones.tag', $tag->slug) }}" class="badge badge-info">{{$tag->name}}</a>
						@endforeach
					</span>
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