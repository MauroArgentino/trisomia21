@extends('admin.layouts.app')

@section('main-content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Nueva Publicación</h1>
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
                   @include('admin.post.partials.form')
                  {{-- </div> --}}
                  <!-- /.card -->
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </div>
    </section>
    <!-- /.content -->
@endsection

@section('scripts')
<!-- Summernote -->
<script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/summernote/lang/summernote-es-ES.js') }}"></script>

<script src="{{ asset('dashboard/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<!-- Bootstrap FileInput -->
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/locales/es.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/themes/fas/theme.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/plugins/piexif.js') }}"></script>
<script>
$(document).ready(function () {

    var textoAyuda;

    if ( document.getElementById( "inputTituloPublicacion" )) {
      textoAyuda =  "Ingrese la descripción de la publicación";
    } else {
      textoAyuda =  "Ingrese la descripción del evento";
    }

  $("#imagen").fileinput({
              language: "es",
              allowedFileExtensions: ['jpg', 'jpeg', 'png'],
              maxFileSize: 1000,
              maxFileCount: 1,
              showUpload: false,
              showClose: false,
              initialPreviewAsData: true,
              dropZoneEnabled: true,
              theme: 'fas',        
    });

     $('#textareaContenido').summernote({
      placeholder: textoAyuda,
      tabsize: 2,
      height: 200,
      lang: 'es-ES',
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
        ]
    });

});
</script>
@endsection