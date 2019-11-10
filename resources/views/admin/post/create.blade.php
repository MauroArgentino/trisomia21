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
<!-- Bootstrap FileInput -->
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/locales/es.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/themes/fas/theme.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/plugins/piexif.js') }}"></script>
<script>
$(document).ready(function () {
  $("#imagen").fileinput({
              language: "es",
              // allowedFileExtensions: ['jpg', 'jpeg', 'png'],
              // maxFileSize: 1000,
              // maxFileCount: 1,
              // showUpload: false,
              // showClose: false,
              // initialPreviewAsData: true,
              // dropZoneEnabled: true,
              // theme: 'fas',        
    });
});
</script>
@endsection