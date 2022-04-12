<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de solicitud</title>


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
<body class="bg-gradient-primary">
    <section class="section">
    <div class="border border-5 m-4 bg-white" style="width:70%">
        <div class="col-lg-6">
            <div class="p-5">
                @isset($application)
                    <h1 class="card-title">Editar formulario de solicitud</h1><br><br>
                    <form action="application/{{$application->id}}" method="POST">
                    @method('PATCH')
                @else            
                    <h1 class="card-title">Formulario de solicitud</h1><br><br>    
                    <form action="/application" method="POST"> <!--ruta que recibe la info y redirecciona, la ruta es la definida en web para el controlador-->
                @endisset
            
                    @csrf
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="{{isset($application)? $application ->nombre:''}}"{{old('nombre')}} required class="form-control" id="inputText"><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="curp" class="col-sm-2 col-form-label">CURP</label>
                        <div class="col-sm-10">
                            <input type="text" name="curp" value="{{isset($application)? $application ->curp :''}}"{{old('curp')}}required class="form-control" id="inputText"><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="direccion" class="col-sm-2 col-form-label">Dirreción</label>
                        <div class="col-sm-10">
                            <input type="text" name="direccion" value="{{isset($application)? $application ->direccion :''}}"{{old('direccion')}} required class="form-control ms-1" id="inputText"><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="imf" class="col-sm-2 col-form-label">Ingreso mensual familiar</label>
                        <div class="col-sm-10">
                            <input type="text" name="imf" value="{{isset($application)? $application ->imf :''}}"{{old('imf')}}required class="form-control" id="inputText"><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                        <div class="col-sm-10">
                            <input type="text" name="edad" value="{{isset($application)? $application ->edad :''}}"{{old('edad')}} required class="form-control" id="inputText"><br>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefono" value="{{isset($application)? $application ->telefono :''}}"{{old('telefono')}} required class="form-control" id="inputText"><br>
                        </div>
                    </div>
                        <label for="sexo">Sexo</label>
                        <select name="sexo" value="{{isset($application)? $application ->sexo :''}}"{{old('sexo')}} required class="form-select" id="floatingSelect">
                            <option value="mujer" {{isset($application)}}>Mujer</option>
                            <option value="hombre" {{isset($application)}}>Hombre</option>
                        </select><br>
                    <label for="limitacion">Limitación</label>
                    <select name="limitacion"  value="{{isset($application)? $application ->limitacion :''}}"{{old('limitacion')}} required id="inputState" class="form-select">
                        <option value="motriz" {{isset($application) && $application->limitacion == 'motriz' ? 'selected' : ''}}>Motriz</option>
                        <option value="auditiva" {{isset($application) && $application->limitacion == 'auditiva' ? 'selected' : ''}}>Auditiva</option>
                        <option value="visual" {{isset($application) && $application->limitacion == 'visual' ? 'selected' : ''}}>Visual</option>
                        <option value="intelectual" {{isset($application) && $application->limitacion == 'intelectual' ? 'selected' : ''}}>Intelectual</option>
                        <option value="No aplica" {{isset($application) && $application->limitacion == 'No aplica' ? 'selected' : ''}}>No aplica</option>
                    </select><br>
                        <label for="escolaridad">Escolaridad</label>
                        <input type="text" name="escolaridad" value="{{isset($application)? $application ->escolaridad :''}}"{{old('escolaridad')}} required  class="form-control" id="inputText"><br>
                    <label for="plantel">Plantel</label>
                    <input type="text" name="plantel" value="{{isset($application)? $application ->plantel :''}}"{{old('plantel')}} required class="form-control" id="inputText"><br>
                    <label for="etnia">Etnia</label>
                    <input type="text" name="etnia" value="{{isset($application)? $application ->etnia :''}}"{{old('etnia')}} required class="form-control" id="inputText"><br>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    </section>
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