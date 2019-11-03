<!-- jQuery -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- jQuery InputMask -->
<script src="{{ asset('dashboard/plugins/inputmask/jquery.inputmask.bundle.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('dashboard/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/summernote/lang/summernote-es-ES.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.js') }}"></script>
{{-- AdminLTE dashboard demo (This is only for demo purposes)
<script src="{{ asset('dashboard/dist/js/pages/dashboard.js') }}"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('dashboard/plugins/inputmask/jquery.inputmask.bundle.js') }}"></script>
<!-- Bootstrap FileInput -->
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/locales/es.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/themes/fas/theme.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap-fileinput/js/plugins/piexif.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('dashboard/plugins/toastr/toastr.min.js') }}"></script>

<!-- Select2 js -->
<script src="{{ asset('dashboard/plugins/select2/js/select2.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('dashboard/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- Scripts personalizados -->
<script src="{{ asset('dashboard/dist/js/custom.js') }}"></script>
@if (Session::has('notificacion'))
    <script>
        $(document).ready(function() {

        toastr.{{ Session::get('notificacion.tipo') }}
        ('{{ Session::get('notificacion.mensaje') }}', '{{ Session::get('notificacion.titulo') }}' );

        });
    </script>

@endif