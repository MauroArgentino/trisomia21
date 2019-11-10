<script>
$(document).ready(function () {
    

    $('#datetimepicker1').datetimepicker({
            format: 'LT'
          });

    $('#imagen').on('change', function(event) {
        console.log("Hola Mau");
    });

    var textoAyuda;

    if ( document.getElementById( "inputTituloPublicacion" )) {
      textoAyuda =  "Ingrese la descripción de la publicación";
    } else {
      textoAyuda =  "Ingrese la descripción del evento";
    }

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

    $('#example1').DataTable();
    $('.js-example-basic-multiple').select2();

    

      //Datemask dd/mm/yyyy
      $('#datemask').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY'
      }
      });
     
});


  // Swal.fire({
  //   title: 'Are you sure?',
  //   text: "You won't be able to revert this!",
  //   icon: 'warning',
  //   showCancelButton: true,
  //   confirmButtonColor: '#3085d6',
  //   cancelButtonColor: '#d33',
  //   confirmButtonText: 'Yes, delete it!'
  // }).then((result) => {
  //   if (result.value) {
  //     Swal.fire(
  //       'Deleted!',
  //       'Your file has been deleted.',
  //       'success'
  //       )
  //   }
  // })


 

 // $(document).on('click', '.pagination a', function(event) {
 //      event.preventDefault();

 //      var pagina = $(this).attr('href').split('page');
 //      fetch_data(pagina);
 //      alert("Algo anduvo mal!");
 //      function fetch_data(pagina)
 //      {
 //        $.ajax({
 //          url: "/admin/home/post/listado/paginacion?page="+pagina;
 //          success:function() {
 //            $('#tabla-datos').html(data);
 //          }
 //        });
 //      }

 // });

   $( "#notificacionMensajeSolicitud" ).ready(function() {

      var url = "{{ route('admin.mensaje.notificaciones')}}";
      console.log(url);
       $.get(url, function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
      // $.get(url, data: {_token:"{{ csrf_token() }}"}, success:function(data) {
      //   alert(data);

      // });   
       // $.ajax({
       //      method: 'GET',
            // url: {{ route('admin.mensaje.notificaciones')}} ,
       //      dataType: 'json',
       //      data: {_token: "{{ csrf_token() }}"},

       //      success: function (data) {
       //          console.log(data);
       //      },

       //      error:function(x,xs,xt){
              
       //            window.open(JSON.stringify(x));
       //            alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
       //         }
       //  });
});

</script>