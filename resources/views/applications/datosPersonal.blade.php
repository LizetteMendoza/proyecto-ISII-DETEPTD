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
    <h1 class="card-title mb-3 fs-1 fw-bold text-center"> <img src="{{asset('assets/img/perfil.png')}}" alt=""> Perfil del Solicitante</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto mt-5">
                <table class="table table-bordered mx-auto d-block">
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">NOMBRE</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->nombre}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">CORREO</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->user->email}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">CURP</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->curp}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">DIRECCIÓN</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->direccion}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">LOCALIDAD</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->localidad}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">IMF</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->imf}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">EDAD</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->edad}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">TELÉFONO</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->telefono}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">SEXO</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->sexo}}</td>
                    </tr>    
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">LIMITACIÓN</th>
                    <td class="p-3 mb-2 bg-white rounded-end border-bottom">@foreach ($application->limitations as $limitation)
                            {{$limitation->limitacion}}
                        @endforeach</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold ">ESCOLARIDAD</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->escolaridad}}</td>
                    </tr>
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">PLANTEL</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->plantel}}</td>
                    </tr>   
                    <tr>
                        <th class="p-3 mb-2 bg-light card-title fw-bold">GRUPO INDÍGENA</th>
                        <td class="p-3 mb-2 bg-white rounded-end border-bottom">{{$application->etnia}}</td>
                </table>
            </div>
        
        <div class="card text-center mt-5  justify-content-center w-25 h-25">

                <div class="card-header card-title bg-warning ustify-content-center mt-2 fw-bold">
                    Opciones
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills card-header-pills justify-content-center">
                        <li class="nav-item justify-content-center">
                            <a href="/application/{{$application->id}}/edit" id ="editar" class="nav-link active bg-success mt-2 me-1">Editar</a>
                        </li>
                        <li class="nav-item justify-content-center">
                            <form id="Borrar" action="/application/{{$application->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                            <input type="submit"  id="formSubmit" value="Borrar" onclick="detener(event);" class="nav-link active bg-danger mt-2">
                        </form>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
    </div>
    </main>
</body>
<x-footer>
</x-footer>
</html>