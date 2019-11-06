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
            

           
    @if (session()->has('success'))
      <div class="alert alert-success">
        {!! session()->get('success') !!}
      </div>
    @endif
    @include('web.partials.mensajeserrores')
    <form action="{{ route('web.mensaje.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="apellido_y_nombres">Apellido y Nombres</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellido_y_nombres" placeholder="Ingrese su nombre completo">
        <small id="emailHelp" class="form-text text-muted" hidden>We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Correo electrónico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Ingrese su correo electrónico">
        <small id="emailHelp" class="form-text text-muted" hidden>We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Asunto</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="asunto" placeholder="Ingrese el asunto">
        <small id="emailHelp" class="form-text text-muted" hidden>We'll never share your email with anyone else.</small>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">Mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="mensaje"></textarea>
      </div>
      @include('web.partials.captcha')
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

 </div>

			<!--//left-->
			<!--right-->
			@include('web.partials.aside')
			<!--//right-->
			
		

	</div>
</section>

@endsection