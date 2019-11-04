@if (isset($publicacion))
    <form class="form-group" role="form" action="{{ route('admin.post.update') }}" method="POST" enctype="multipart/form-data">
@else
    <form class="form-group" role="form" action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
@endif
  @csrf
    <!-- card-body -->
    {{-- <div class="card-body"> --}}
      <div class="form-group">
        <label for="labelTitulo">Título</label>
        <input type="text" class="form-control" id="inputTituloPublicacion" name="titulo" placeholder="Ingrese el título de la publicación">
      </div>
      
      <div class="form-group">
          <label for="labelContenido">Contenido</label>
          <div class="mb-3">
            <textarea class="textarea" id="textareaContenido" placeholder="" name="contenido"></textarea>
          </div>
        </div>

        <div class="form-group">
            <label for="labelEtiquetas">Etiquetas</label>
            <input type="text" class="form-control" id="tags" name="tags" data-role="tagsinput" placeholder="Ej.: Evento, Inclusion, Torneo">
          </div>
        
        <div class="form-group">
            <label for="labelImagen">Imagen</label>
            <input type="file" class="file" id="imagen" name="ruta_imagen">
        </div>

          <div class="form-group">
            <label for="extracto">Extracto</label>
            <textarea type="" class="form-control" id="textareaExtracto" name="extracto" placeholder="Ingrese un extracto breve para la imagen" rows="5"></textarea>
          </div>

          <div class="icheck-primary">
              <input type="checkbox" class="form-check-input" id="checkboxEstado" name="estado">
              <label class="form-check-label" for="checkboxEstado">Publicar</label>
            </div>

          {{-- </div> --}}
    <!-- /.card-body -->
<hr>
    {{-- <div class="card-footer"> --}}
      <button type="submit" class="btn btn-primary float-right">Crear Publicación</button>
    {{-- </div> --}}
  </form>