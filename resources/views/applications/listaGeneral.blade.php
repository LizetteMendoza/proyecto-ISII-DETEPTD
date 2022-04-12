<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado General</title>

    <!-- Favicons -->
    <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="public/assets/img/favicon.png" rel="icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
    <h1 class="mt-3">Control de solicitantes</h1>

    <table class="table mt-3">
        <tr class="bg-info text-white">
            <th scope="col">NOMBRE</th>
            <th scope="col">CURP</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">IMF</th>
            <th scope="col">EDAD</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">SEXO</th>
            <th scope="col">LIMITACION</th>
            <th scope="col">ESCOLARIDAD</th>
            <th scope="col">PLANTEL</th>
            <th scope="col">ETNIAL</th>
            <th scope="col">OPCIONES</th>
        </tr>
        @foreach ($applications as $application)
    
        <tr>
            <th>{{$application->nombre}}</th>
            <th>{{$application->curp}}</th>
            <th>{{$application->direccion}}</th>
            <th>{{$application->imf}}</th>
            <th>{{$application->edad}}</th>
            <th>{{$application->telefono}}</th>
            <th>{{$application->sexo}}</th>
            <th>{{$application->limitacion}}</th>
            <th>{{$application->escolaridad}}</th>
            <th>{{$application->plantel}}</th>
            <th>{{$application->etnia}}</th>
            <th>
                <a href="/application/{{$application->id}}" class="btn btn-primary">Ver detalles</a>
            </th>
            
        </tr>
        @endforeach
    </table>
</body>

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

</html>