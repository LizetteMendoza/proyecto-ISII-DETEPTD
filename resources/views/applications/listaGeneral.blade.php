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
                <th scope="col">ESTATUS</th>
                <th scope="col">OPCIONES</th>
            </tr>
            <tr>
                <th>{{isset($application)?$application->nombre: ''}}</th>
                <th>{{isset($application)? $application ->curp :''}}</th>
                <th>{{isset($application)? $application->estatus :''}}</th>
                
                <th>
                    @isset($application)
                        <a href="/application/{{$application->id}}" class="btn btn-primary">Ver perfil</a>
                    @endisset
                </th>
            </tr>
        </table>
    </main>
</body>

<x-footer>
</x-footer>

</html>