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
    <h1 class="text-primary mb-3 fs-1 fw-bold"> <img src="{{asset('assets/img/perfil.png')}}" alt=""> Perfil del Solicitante</h1>
    <div class="container-fluid px-4 justify-content-center">
        <table class="table border border-5 border-info rounded-3 w-75">
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">NOMBRE</th>
                <td class="p-3 mb-2">{{$application->nombre}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">CURP</th>
                <td class="p-3 mb-2">{{$application->curp}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">DIRECCIÓN</th>
                <td class="p-3 mb-2">{{$application->direccion}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">LOCALIDAD</th>
                <td class="p-3 mb-2">{{$application->localidad}}</td>
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
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">TELÉFONO</th>
                <td class="p-3 mb-2">{{$application->telefono}}</td>
            </tr>
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">SEXO</th>
                <td>{{$application->sexo}}</td>
            </tr>    
            <tr>
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">LIMITACIÓN</th>
               <td>@foreach ($application->limitations as $limitation)
                    {{$limitation->limitacion}}
                @endforeach</td>
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
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">GRUPO INDÍGENA</th>
                <td>{{$application->etnia}}</td>
        </table>
        <table class=" bg-primary border rounded-3">
            <tr >
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">OPCIONES</th>
                <td>
                    <a href="/application/{{$application->id}}/edit" id ="editar"class="btn btn-primary mb-1">Editar</a>
        
                   <form id="Borrar" action="/application/{{$application->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                       <input type="submit"  id="formSubmit" value="Borrar" onclick="detener(event);" class="btn btn-primary">
                   </form>
                </td>        
        </table> 
    </div>
    </main>
</body>
<x-footer>
</x-footer>
</html>