<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de solicitud</title>
  <x-header></x-header>
</head>
<body class="bg-gradient-primary">
    <x-navbar></x-navbar>
    <main class="main" id="main">
    <div class="border border-5 m-4 bg-white" style="width:70%">
        <div class="col-lg-6">
            <div class="p-5">
                @isset($application)
                    <h1 class="mt-3 text-primary">Editar formulario de solicitud</h1><br><br>
                    <form id="actualizar" action="/application/{{$application->id}}" method="POST">
                    @method('PATCH')
                @else            
                    <h1 class="card-title">Formulario de solicitud</h1><br><br>    
                    <form id="actualizar"action="/application" method="POST"> <!--ruta que recibe la info y redirecciona, la ruta es la definida en web para el controlador-->
                @endisset
            
                    @csrf
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="{{isset($application)? $application ->nombre:''}}"{{old('nombre')}} required class="form-control ms-5" id="inputText"><br>
                            @error('nombre')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="curp" class="col-sm-2 col-form-label">CURP</label>
                        <div class="col-sm-10">
                            <input type="text" name="curp" value="{{isset($application)? $application ->curp :''}}"{{old('curp')}}required class="form-control ms-5" id="inputText"><br>
                            @error('curp')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="direccion" class="col-sm-2 col-form-label">Dirreción</label>
                        <div class="col-sm-10">
                            <input type="text" name="direccion" value="{{isset($application)? $application ->direccion :''}}"{{old('direccion')}} required class="form-control ms-5" id="inputText"><br>
                            @error('direccion')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="imf" class="col-sm-2 col-form-label">Ingreso mensual familiar</label>
                        <div class="col-sm-10">
                            <input type="text" name="imf" value="{{isset($application)? $application ->imf :''}}"{{old('imf')}}required class="form-control ms-5" id="inputText"><br>
                            @error('imf')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                        <div class="col-sm-10">
                            <input type="text" name="edad" value="{{isset($application)? $application ->edad :''}}"{{old('edad')}} required class="form-control ms-5" id="inputText"><br>
                            @error('edad')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefono" value="{{isset($application)? $application ->telefono :''}}"{{old('telefono')}} required class="form-control ms-5" id="inputText"><br>
                            @error('telefono')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                        <label for="sexo">Sexo</label>
                        <select name="sexo"  value="{{isset($application)? $application ->sexo :''}}"{{old('sexo')}} required id="inputState" class="form-select">
                            <option value="" {{isset($application)&& $application->sexo == '' ? 'selected' : ''}}></option>
                            <option value="mujer" {{isset($application)&& $application->sexo == 'mujer' ? 'selected' : ''}}>Mujer</option>
                            <option value="hombre" {{isset($application)&& $application->sexo == 'hombre' ? 'selected' : ''}}>Hombre</option>
                            @error('sexo')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </select><br>
                    <label for="limitation_id">Limitación</label>
                    <select name="limitation_id[]" multiple required id="inputState" class="form-select">
                        @foreach ($limitations as $limitation)
                            <option value="{{$limitation->id}}"{{isset($limitations)&& array_search($limitation->id, $application->limitations->pluck('id')->toArray())!== false ? 'selected': ''}}{{old('limitation_id')}} >{{$limitation->limitacion}}</option>
                        @endforeach
                        @error('limitation_id')
                                <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </select><br>
                    <div>
                        <label for="escolaridad">Escolaridad</label>
                        <input type="text" name="escolaridad" value="{{isset($application)? $application ->escolaridad :''}}"{{old('escolaridad')}} required  class="form-control" id="inputText"><br>            
                         @error('escolaridad')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="plantel">Plantel</label>
                        <input type="text" name="plantel" value="{{isset($application)? $application ->plantel :''}}"{{old('plantel')}} required class="form-control" id="inputText"><br>
                        @error('plantel')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="etnia">Etnia</label>
                        <select name="etnia"  value="{{isset($application)? $application ->etnia :''}}"{{old('etnia')}} required id="inputState" class="form-select">
                
                            <option value=""{{isset($application)&& $application->etnia == '' ? 'selected' : ''}} ></option>
                            <option value="Si"{{isset($application)&& $application->etnia == 'Si' ? 'selected' : ''}}>Sí</option>
                            <option value="No"{{isset($application)&& $application->etnia == 'No' ? 'selected' : ''}}>No</option>
                            @error('etnia')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </select><br>
                    </div>
                    @if (isset($application))
                        <input type="submit" value="Guardar" class="btn btn-primary">
                    @else
                        <input type="submit" value="Guardar" id="formSubmit" onclick="actualizar(event);" class="btn btn-primary"> 
                    @endif 
                </form>
            </div>
        </div>
    </div>
    </section>
    </main>
</body>
<x-footer></x-footer>
</html>