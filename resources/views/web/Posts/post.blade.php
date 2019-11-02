@extends('web.layouts.home')

@section('content')
<!-- <div class="container"> -->
	<div class="col-md-8 col-md-offset-2">
		<h1>Lista de Artículos</h1>
		@foreach($posts as $post)
			<div class="card mb-3">
				@if($post->file)
					<img src="{{$post->file}}" class="img-responsive card-img-top" alt="{{ $post->name }}">
				@endif
				<div class="card-body">
					<h4 class="card-title">{{ $post->name }}</h4>
					<p class="card-text">
						{{ $post->excerpt }}
					</p>
					<a href="#" class="d-flex justify-content-end">Leer más</a>
				</div>
			</div>
		@endforeach
		{{ $posts->render() }}
	</div>
</div>

< <section class="main-content-w3layouts-agileits">
	<div class="container">
		
		<div class="row inner-sec">
			<!--left-->
			<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
				<h3 class="tittle">Noticias Recientes</h3>
				
				<div class="col-md card">
					<a href="single">
						<img src="img/7.jpg" class="card-img-top img-fluid" alt="">
					</a>
					<div class="card-body">
						<ul class="blog-icons my-4">
							<li>
								<a href="#">
									<i class="far fa-calendar-alt"></i> Feb 20 .2020</a>
							</li>	
							<li class="mx-2">
								<a href="#">
									<i class="far fa-user"></i> Editor </a>
							</li>								
						</ul>
						<h5 class="card-title ">
							<a href="single">Titulo de la Noticia o Actividad</a>
						</h5>
						<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
						<a href="single" class="btn btn-primary read-m">leer más</a>
					</div>
				</div>
																						
				
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-left mt-4">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
			<!--//left-->
			<!--right-->
			@include('web.partials.aside')
			<!--//right-->
			</div>
		</div>
</section> -->

@endsection