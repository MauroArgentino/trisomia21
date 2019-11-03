@extends('web.layouts.home')

@section('content')

<section class="main-content-w3layouts-agileits">
	<div class="container">
		
		<div class="row inner-sec">
			<!--left-->
			<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
			<h3 class="tittle">Formas de Contactarnos</h3>	
            <address>
                <p>Congress Yerevan, 1 Italy St, Yerevan, Armenia,No 008921</p>
                <p>Phone: +0(21) 334 5678</p>
                <p>Fax: +0(21) 334 5678</p>
                <p>Mail:
                    <a href="mailto:info@example.com">info@example.com</a>
                </p>
            </address>   
            </div>
			<!--//left-->
			<!--right-->
			@include('web.partials.aside')
			<!--//right-->
			</div>
		</div>
</section>

@endsection