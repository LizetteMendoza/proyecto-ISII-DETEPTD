<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado General</title>
</head>
<body>
    <h1>Control de solicitantes</h1>

    <table>
        <tr>
            <th>NOMBRE</th>
            <th>CURP</th>
            <th>DIRECCION</th>
            <th>IMF</th>
            <th>EDAD</th>
            <th>TELEFONO</th>
            <th>SEXO</th>
            <th>LIMITACION</th>
            <th>ESCOLARIDAD</th>
            <th>PLANTEL</th>
            <th>ETNIAL</th>
            <th>OPCIONES</th>
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
                <a href="/application/{{$application->id}}">Ver detalles</a>
            </th>
            
        </tr>
        @endforeach
    </table>
</body>
</html>