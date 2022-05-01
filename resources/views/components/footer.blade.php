<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('eliminar')=='ok')
    <script>
        Swal.fire(
        'Eliminado!',
        'Tu solicitud se eliminó con éxito',
        'success')
    </script>
    @endif
    
    @if(session('editar')=='ok')
    <script>
        Swal.fire(
        'Editado!',
        'Tu solicitud se actualizó con éxito',
        'success')
    </script>
    @endif

    
    @if(session('crear')=='ok')
    <script>
        Swal.fire(
        'Registro completo!',
        'Tu solicitud se creó con éxito',
        'success')
    </script>
    @endif

    <script type="text/javascript">
        function detener(evt){
            evt.preventDefault();
            Swal.fire({
            title: '¿Está seguro?',
            text: "Tu solicitud se eliminará definitivamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText: 'Cancelar',
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("Borrar").submit();
            }
            })
        };
    </script>