@extends('web.layouts.home')

@section('content')

<section class="main-content-w3layouts-agileits">
	<div class="container">		
		<div class="row inner-sec">
			<!--left-->
			<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
			<h3 class="tittle">¿Quienes Somos?</h3>
                <article class="blog-grid-top">
                    <p>
                    Somos una asociación sin fines de lucro y formada por 
                    familias plenamente comprometidas con el bienestar de nuestros hijos,
                    que lucha por una sociedad unida e íntegra,
                    donde la discapacidad sea una cualidad personal y no un defecto excluyente.
                    </p>
                </article>    
            </div>
			<!--//left-->
			<!--right-->
			@include('web.partials.aside')
			<!--//right-->
			</div>
		</div>
</section>

@endsection