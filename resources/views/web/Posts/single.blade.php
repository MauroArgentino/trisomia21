@extends('web.layouts.home')

@section('content')

<section class="main-content-w3layouts-agileits">
	<div class="container">
		
		<div class="row inner-sec">
			<!--left-->
			<div class="col-md-8 card">
				<h3 class="tittle">Blog Post</h3>
				<a href="#">
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
						<a href="#">Titulo de la Noticia o Actividad</a>
					</h5>
					<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
					
				</div>
			</div>
				<!--//left-->
				<!--right-->
				@include('web.partials.aside')
				<!--//right-->
			</div>
	</div>
</section>

@endsection