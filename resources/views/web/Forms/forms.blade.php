@extends('web.layouts.home')

@section('content')

	<!--//header-->
	<!-- <div class="banner-inner">
	</div>-->	
	<!--/blog-->
	<h1>
		<a href="#"> Registro </a>
	</h1>
		<form>
			<div class="form-group">
				<label for="exampleFormControlInput1">Nombre</label>
				<input type="text" class="orm-text text-muted" id="" placeholder="">
			</div>	
			<div class="form-group">
				<label for="exampleFormControlInput1">Apellido</label>
				<input type="text" class="orm-text text-muted" id="" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">D.N.I</label>
				<input type="text" class="orm-text text-muted" id="" placeholder="">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1">Fecha de Nacimiento</label>
				<input type="text" class="orm-text text-muted" id="" placeholder="">
			</div>
								
			<div class="form-group">
				<label for="">Provincia</label>
				<select class="orm-text text-muted" id="">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Ciudad</label>
				<select class="orm-text text-muted" id="">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary mb-2">Registrarse</button>
			
		</form>
	<!--//main-->



@endsection

