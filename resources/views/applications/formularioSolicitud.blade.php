<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de solicitud</title>
</head>
<body class="bg-gradient-primary">
    <div class="p-5">
    @isset($application)
        <h1>Editar formulario de solicitud</h1><br><br>
        <form action="application/{{$application->id}}" method="POST">
        @method('PATCH')
    @else            
        <h1>Formulario de solicitud</h1><br><br>    
        <form action="/application" method="POST"> <!--ruta que recibe la info y redirecciona, la ruta es la definida en web para el controlador-->
    @endisset
   
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{isset($application)? $application ->nombre:''}}"{{old('nombre')}} required><br>
        <label for="curp">CURP</label>
        <input type="text" name="curp" value="{{isset($application)? $application ->curp :''}}"{{old('curp')}}required><br>
        <label for="direccion">Dirreción</label>
        <input type="text" name="direccion" value="{{isset($application)? $application ->direccion :''}}"{{old('direccion')}} required><br>
        <label for="imf">Ingreso mensual familiar</label>
        <input type="text" name="imf" value="{{isset($application)? $application ->imf :''}}"{{old('imf')}}required><br>
        <label for="edad">Edad</label>
        <input type="text" name="edad" value="{{isset($application)? $application ->edad :''}}"{{old('edad')}} required><br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" value="{{isset($application)? $application ->telefono :''}}"{{old('telefono')}} required><br>
        <label for="sexo">Sexo</label>
        <select name="sexo" value="{{isset($application)? $application ->sexo :''}}"{{old('sexo')}} required>
            <option value="mujer" {{isset($application)}}>Mujer</option>
            <option value="hombre" {{isset($application)}}>Hombre</option>
        </select><br>
        <label for="limitacion">Limitación</label>
        <select name="limitacion"  value="{{isset($application)? $application ->limitacion :''}}"{{old('limitacion')}} required>
            <option value="motriz" {{isset($application) && $application->limitacion == 'motriz' ? 'selected' : ''}}>Motriz</option>
            <option value="auditiva" {{isset($application) && $application->limitacion == 'auditiva' ? 'selected' : ''}}>Auditiva</option>
            <option value="visual" {{isset($application) && $application->limitacion == 'visual' ? 'selected' : ''}}>Visual</option>
            <option value="intelectual" {{isset($application) && $application->limitacion == 'intelectual' ? 'selected' : ''}}>Intelectual</option>
            <option value="No aplica" {{isset($application) && $application->limitacion == 'No aplica' ? 'selected' : ''}}>No aplica</option>
        </select><br>
        <label for="escolaridad">Escolaridad</label>
        <input type="text" name="escolaridad" value="{{isset($application)? $application ->escolaridad :''}}"{{old('escolaridad')}} required><br>
        <label for="plantel">Plantel</label>
        <input type="text" name="plantel" value="{{isset($application)? $application ->plantel :''}}"{{old('plantel')}} required><br>
        <label for="etnia">Etnia</label>
        <input type="text" name="etnia" value="{{isset($application)? $application ->etnia :''}}"{{old('etnia')}} required><br>
        <input type="submit" value="Guardar">
    </form>
    </div>
</body>

</html>