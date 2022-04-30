<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estatus de solicitud</title>

    <x-header>
    </x-header>

</head>
<body>
    <x-navbar></x-navbar>
    <main class="main" id="main">
        <h1 class="mt-3">Estatus de trámite</h1>
    
        <table class="table mt-3">
            <tr class="bg-info text-white">
                <th scope="col">NOMBRE</th>
                <th scope="col">CURP</th>
                <!--<th scope="col">DIRECCION</th>
                <th scope="col">IMF</th>
                <th scope="col">EDAD</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">SEXO</th>
                <th scope="col">LIMITACION</th>
                <th scope="col">ESCOLARIDAD</th>
                <th scope="col">PLANTEL</th>
                <th scope="col">ETNIAL</th>-->
                <th scope="col">ESTATUS</th>
                <th scope="col">OPCIONES</th>
            </tr>
            <tr>
                <th>{{$application->nombre}}</th>
                <th>{{$application->curp}}</th>
                <!--<th>{{$application->direccion}}</th>
                <th>{{$application->imf}}</th>
                <th>{{$application->edad}}</th>
                <th>{{$application->telefono}}</th>
                <th>{{$application->sexo}}</th>
                <th>{{$application->limitacion}}</th>
                <th>{{$application->escolaridad}}</th>
                <th>{{$application->plantel}}</th>
                <th>{{$application->etnia}}</th>-->
                <th>PENDIENTE</th>
                <th>
                    <a href="/application/{{$application->id}}" class="btn btn-primary">Ver perfil</a>
                </th>
            </tr>
        </table>
    </main>
</body>

<x-footer>
</x-footer>

</html>