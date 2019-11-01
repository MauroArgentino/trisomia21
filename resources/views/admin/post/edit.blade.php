@extends('admin.layouts.app')

@section('main-content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Modificar Publicación</h1>
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