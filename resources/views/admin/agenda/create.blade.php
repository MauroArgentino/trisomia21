@extends('admin.layouts.app')

@section('main-content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1>Nuevo evento</h1>
      </div>
     </div>
  </div><!-- /.container-fluid -->
</section>
<hr>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 mb-3">
        <!-- general form elements -->
                <!-- form start -->
        <form role="form" action="{{ route('admin.evento.store') }}" method="POST">
          @csrf
           
          <div class="form-group">
            <label for="exampleInputEmail1">Título</label>
            <input type="text" class="form-control" id="inputTitulo" placeholder="Ingrese el título" name="titulo">
          </div>
            
          <div class="form-group">
            <label for="contenido">Contenido</label>
            <textarea type="textarea" class="form-control textarea" id="textareaContenido" name="contenido" rows="10" ></textarea>
          </div>
            
          <div class="row">					  
            <!-- Date dd/mm/yyyy -->
            <div class="form-group col-md-4">
              <label>Fecha de inicio</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fechaInicio">
              </div>
              <!-- /.input group -->
            </div>
                <!-- /.form group -->
                
            <div class="form-group col-md-4">
              <label>Fecha de cierre</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fechaFin" id="datemask">
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="form-group">
                <label>Horario</label>
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="horario">
                  <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                  </div>
                </div>
          <!-- /.input group -->
              </div>
          <!-- /.form group -->
            </div>
            
          </div>
            
          <div class="form-group">
            <label for="exampleInputEmail1">Organizador</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el nombre del ente que organiza" name="enteOrganizador">
          </div>

          <div class="row form-group">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Ubicación</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese la ubicación del evento" name="ubicacion">
            </div>

            <div class="form-group col-md-6" hidden>
              <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=Les%20Rambles%2C%201%20Barcelona%2C%20Spain+(Mi%20nombre%20de%20egocios)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/calcular-ruta.html">Calcular Ruta</a></iframe></div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputFile">Imagen</label>
            <input type="file" class="file" id="imagen" name="ruta_imagen">                 
          </div>
        
          <hr>
          <button type="submit" class="btn btn-primary float-right">Crear evento</button>
        </form>
        
      </div>
    </div>
  </div>
</section>
@endsection