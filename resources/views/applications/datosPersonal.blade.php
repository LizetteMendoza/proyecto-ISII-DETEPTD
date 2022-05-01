<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos de solicitante</title>
    <x-header>
    </x-header>
</head>
<body>
    <x-navbar></x-navbar>
    <main class="main" id="main">
    <h1 class="text-primary">Perfil del Solicitante</h1>
    <div class="container-fluid px-4 justify-contecnt-center">
        <table class="table border border-5 borer-primary rounded w-75">
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">NOMBRE</th>
                <td class="p-3 mb-2">{{$application->nombre}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">CURP</th>
                <td class="p-3 mb-2">{{$application->curp}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">DIRECCION</th>
                <td class="p-3 mb-2">{{$application->direccion}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">IMF</th>
                <td class="p-3 mb-2">{{$application->imf}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">EDAD</th>
                <td class="p-3 mb-2">{{$application->edad}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">TELEFONO</th>
                <td class="p-3 mb-2">{{$application->telefono}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">SEXO</th>
                <td>{{$application->sexo}}</td>
            </tr>    
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">LIMITACION</th>
                <td>{{$application->limitacion}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">ESCOLARIDAD</th>
                <td>{{$application->escolaridad}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">PLANTEL</th>
                <td>{{$application->plantel}}</td>
            </tr>   
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">ETNIAL</th>
                <td>{{$application->etnia}}</td>
        </table>
        <table>
            <tr>
       
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">OPCIONES</th>
                <td>
                    <a href="/application/{{$application->id}}/edit" class="btn btn-primary mb-1">Editar</a>
        
                   <form action="/application/{{$application->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                       <input type="submit" value="Borrar" class="btn btn-primary">
                   </form>
                </td>        
        </table> 
    </div>
    </main>
</body>
<x-footer>
</x-footer>

</html>