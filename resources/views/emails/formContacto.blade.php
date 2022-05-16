<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de soporte</title>
    <x-header></x-header>
</head>
<body>
    
    <x-navbar></x-navbar>
    <main class="main" id="main">
    <h1 class="mt-4 text-info text-center p-4"><img src="{{asset('img/email.png')}}" alt="" > Contactanos</h1>
    
    <div  class="container p-5 border border-3   border-primary rounded w-75">
        <h1 class=" rounded mt-4 text-white text-center p-4 bg-primary">Formulario de contacto</h1>
        <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <div class="form-group p-4">
                <label class="text-primary fw-bold">
                    Nombre
                    <input type="text" class="form-control"  name="name"  value="{{old('name')}}" required pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$" title="Ingrese un nombre correcto (solo letras)">
                </label>
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group p-4">
                <label class="text-primary fw-bold">
                    Correo
                    <input type="email" class="form-control"  name="correo"  value="{{old('correo')}}" required>
                </label>
                @error('correo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="form-group p-4">
                <label class="text-primary fw-bold">
                    Asunto
                    <select name="categoria"  value="{{old('categoria')}}" required id="inputState" class="form-select">
                        <option value="" ></option>
                        <option value="duda">Duda</option>
                        <option value="comentario" >Comentario</option>
                        <option value="reporte" >Reporte</option>
                        @error('sexo')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </select>
                </label>
                @error('categoria')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group p-4">
                <label class="text-primary fw-bold">
                    Mensaje
                    <textarea name="mensaje" class="form-control" rows="7" required>{{old('mensaje')}}</textarea>
                </label>
                @error('mensaje')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary active m-2">Enviar</button>
        </form>
    </div>
    </main>
</body>
<x-footer></x-footer>
</html>

  