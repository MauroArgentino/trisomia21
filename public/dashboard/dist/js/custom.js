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

 $('#textareaContenido').summernote({
  placeholder: 'Ingrese la descripción del evento',
  tabsize: 2,
  height: 150,
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