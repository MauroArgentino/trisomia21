@extends('admin.layouts.app')

@section('main-content')
<div class="content">

    <div class="card-header">

        <div class="title">
            <h1>Listado de Publicaciones</h1>
        </div>
            <hr>
            <div class="row">
               <div class="form-group col-md-4">
                <div class="input-group">

                    <span class="input-group-prepend"><div class="input-group-text bg-white border-right-0"><i class="fa fa-search text-secondary"></i>
                    </div></span>
                    <input class="form-control border-left-0"
                    placeholder="">
                    <div class="input-group-append" ><button class="input-group-prepend btn btn-outline-secondary border-left-0 border" type="button">
                       Buscar
                   </button></div>
               </div>
           </div>
           <div class="col-md-8">
            <div class="float-right">
               {!! $publicaciones->links() !!}
           </div>
       </div>
   </div>
   <div class="tabla-datos">
        @include('admin.post.partials.tabla')
    </div>
    <div class="col-md-12">
        <div class="float-right">
         {!! $publicaciones->links() !!}
     </div>
</div>

</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
  $('.submitEliminar').on('click',function(e){
    e.preventDefault();

    // var form = $(this).parents('form');

    Swal.fire({
            title: '¿Estás seguro?',
            text: "Si lo haces, no hay manera de revertirlo.",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                  var registro = $(this).parents('tr');
                  var id = registro.data('id');
                  var form = $("#form-delete");
                  var url = form.attr("action").replace(':POST_ID', id);

                  var data = form.serialize();
              
                  $.post(
                          url,
                          data, function (resultado) {
                            toastr.success(resultado.mensaje);
                              registro.fadeOut();
                          }
                          ).fail(function() {
                              toastr.error("La publicación no ha podido ser eliminada. Consulte al administrador.", "Error");
                              registro.show();
                            });
                 
              };
            })
         });


$(document).on('click', '.deletebtn', function(ev){
        

        
    });

});
</script>
@endsection
