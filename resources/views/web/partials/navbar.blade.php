
<!-- Imagen y texto -->
<nav class="navbar-nav navbar-dark bg-primary mr-auto">
	<ul class="navbar-nav mr-auto">
		<a class="navbar-brand" href="{{ route('web.home.index') }}">
			<img src="{{ asset('web/img/ico.svg') }}" width="250" height="250" class="navbar-center">
			Trisomia 21 V.A.				
		</a>
		<!-- <a class="float-right">
			<img src="./img/vos.png" width="180" height="120" class="navbar-center">
		</a> -->
	</ul>
</nav>

<nav class="navbar navbar-expand-md navbar-nav mr-auto navbar-dark bg-primary shift" aria-label="breadcrumb">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{ route('web.home.index') }}"> Inicio <span class="sr-only">(current)</span></a>
			</li>			
			<li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					Quienes Somos
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('web.informacion.history') }}">Historia</a>
					
					<a class="dropdown-item" href="{{ route('web.informacion.miembros') }}">Nomina de integrantes</a>
					

				</div>
			</li>
			<li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="true">
					Actividades y Noticias
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					{{-- <a class="dropdown-item" href="#"></a> --}}

					<a class="dropdown-item" href="{{ route('web.actividades.index') }}">Actividades</a>
					<a class="dropdown-item" href="{{ route('web.publicaciones.index') }}">Noticias</a>
					

				</div>
			</li>
			<li class="nav-item dropdown active">
				<a class="nav-link" href="{{ route('web.sindrome.index') }}">Sobre el Sindrome</a>
			</li>
			<li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Forma Parte
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('web.home.registrarse') }}">Registro</a>
					<a class="dropdown-item" href="{{ route('web.home.voluntario') }}">Ser Voluntario</a>
					<a class="dropdown-item" href="{{ route('web.home.donar') }}">Donar</a>

				</div>
			</li>
			<li class="nav-item dropdown active">
				<a class="nav-link" href="{{ route('web.home.contacto') }}">Contactos</a>
			</li>		
		</ul>
		<form action="#" method="post" class="form-inline my-2 ml-md-0 header-search navbar-nav mr-auto">
			<div class="form-group">
			<input class="form-control mr-sm-2" {{-- style="border-radius: 5rem;" --}} type="search" placeholder="Buscar" name="sugerirPublicacion" required="" id="sugerirPublicacion">
			<button class="btn btn1 ml-3 ml-sm-0" type="submit">
				<i class="fas fa-search"></i>
			</button>

			</div>
<div id="listadoPublicaciones"></div>
			{{ csrf_field() }}
		</form>
	</div>
</nav>
<!-- 
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index">Inicio</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav> -->
