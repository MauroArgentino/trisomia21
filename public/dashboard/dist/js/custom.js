$(document).ready(function () {
    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function () {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
        $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass('fa-square')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
        $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass('fa-check-square')
      }
      $(this).data('clicks', !clicks)
    });

    $('#datetimepicker1').datetimepicker({
            format: 'LT'
          });

    $('#imagen').fileinput({
              language: 'es',
              allowedFileExtensions: ['jpg', 'jpeg', 'png'],
              maxFileSize: 1000,
              maxFileCount: 1,
              showUpload: false,
              showClose: false,
              initialPreviewAsData: true,
              dropZoneEnabled: true,
              theme: 'fas',        
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

    //Handle starring for glyphicon and font awesome
    $('.mailbox-star').click(function (e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var glyph = $this.hasClass('glyphicon')
      var fa    = $this.hasClass('fa')

      //Switch states
      if (glyph) {
        $this.toggleClass('glyphicon-star')
        $this.toggleClass('glyphicon-star-empty')
      }

      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    });  

      //Datemask dd/mm/yyyy
      $('#datemask').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY'
      }
      });
     
});

$('.submitEliminar').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('form');
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

                form.submit();
            }
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

});