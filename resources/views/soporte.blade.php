<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DTEPTD</title>


  <x-header></x-header>
</head>
<body class="bg-gradient-primary">
    <x-navbar></x-navbar>
    <main class="main" id="main">
    <h1>Contactanos</h1>
    <div class="border border-5 m-4 bg-white" style="width:50%">
        <form action="#" method="POST">
            @csrf
            <div class="form-group p-4">
                <label class="text-primary fw-bold">
                    Nombre
                    <input type="text" class="form-control"  name="name"  value="{{old('name')}}" required>
                </label>
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group p-4">
                <label class="text-primary fw-bold">
                    Correo
                    <input type="text" class="form-control"  name="correo"  value="{{old('correo')}}" required>
                </label>
                @error('correo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="form-group p-4">
                <label class="text-primary fw-bold">
                    Categoria
                    <input type="text" class="form-control"  name="asunto"  value="{{old('asunto')}}" required>
                </label>
                @error('asunto')
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