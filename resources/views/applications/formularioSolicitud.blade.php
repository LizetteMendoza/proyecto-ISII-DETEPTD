<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de solicitud</title>
  <x-header>
  </x-header>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>

<body class="bg-gradient-primary">
    <x-navbar></x-navbar>
    <main class="main" id="main">
    <div class="border border-5 rounded-3  m-4 bg-white" style="width:70%">
        <div class="col-lg-10 me-5">
            <div class="p-5">
                         
                    <h1 class="mt-3 card-title fs-1 fw-bold text-center"><img src="{{asset('assets/img/form.png')}}">Formulario de solicitud</h1><br><br>    
                    <form id="actualizar"action="/application" method="POST"> <!--ruta que recibe la info y redirecciona, la ruta es la definida en web para el controlador-->
            
                    @csrf
                    <div class="row mb-3">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="{{old('nombre')}}" required pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{6,100}$" title="Ingrese un nombre correcto (solo letras) y con la extensión requerida (mínimo 6 caracteres, máximo 100)" class="form-control ms-5" id="inputText"><br>
                            @error('nombre')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="curp" class="col-sm-2 col-form-label">CURP</label>
                        <div class="col-sm-10">
                            <input type="text" name="curp" value="{{old('curp')}}" required pattern="^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$" title="Ingrese un formato de curp correcto" class="form-control ms-5" id="inputText"><br>
                            @error('curp')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                        <div class="col-sm-10">
                            <input type="text" name="direccion" value="{{old('direccion')}}" required class="form-control ms-5" id="inputText"><br>
                            @error('direccion')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="colonia" class="col-sm-2 col-form-label">Colonia</label>
                        <div class="col-sm-10">
                            <input type="text" name="colonia" value="{{old('colonia')}}" required class="form-control ms-5" id="inputText"><br>
                            @error('colonia')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="localidad" class="col-sm-2 col-form-label">Localidad</label>
                        <div class="col-sm-10">
                            <input type="text" name="localidad" value="{{old('localidad')}}" required pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{5,100}$" title="Ingrese una localidad correcta (solo letras) y con la extensión requerida (mínimo 5 caracteres, máximo 100)" class="form-control ms-5" id="inputText"><br>
                            @error('localidad')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="imf" class="col-sm-2 col-form-label">Ingreso mensual familiar</label>
                        <div class="col-sm-10">
                            <input type="text" name="imf" value="{{old('imf')}}"required pattern="[0-9]{3,6}" title="Ingrese el monto en numero y correcto" class="form-control ms-5" id="inputText"><br><br>
                            @error('imf')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                        <div class="col-sm-10">
                            <input type="text" name="edad" value="{{old('edad')}}" required required pattern="[0-9]{2,3}" title="Ingrese la edad en numero y correctamente" class="form-control ms-5" id="inputText"><br>
                            @error('edad')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefono" value="{{old('telefono')}}" required pattern="[0-9]{10}" title="Ingrese un número telefonico valido" class="form-control ms-5" id="inputText"><br>
                            @error('telefono')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                        <div class="col-sm-10">
                            <select name="sexo"  value="{{old('sexo')}}" required id="inputState" class=" form-control border rounded-3 ms-5">
                                <option value="" ></option>
                                <option value="mujer">Mujer</option>
                                <option value="hombre">Hombre</option>
                            </select><br>
                            @error('sexo')
                                    <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="limitation_id" class="col-sm-2 col-form-label">Limitación</label>
                        <div class="col-sm-10">
                            <select name="limitation_id[]" multiple required id="inputState" class="form-control selectpicker border rounded-3 ms-5">
                                @foreach ($limitations as $limitation)
                                    <option value="{{$limitation->id}}">{{$limitation->limitacion}}</option>
                                @endforeach
                            </select><br>
                            @error('limitation_id')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="escolaridad" class="col-sm-2 col-form-label">Escolaridad</label>
                        <div class="col-sm-10">
                            <select name="escolaridad"  value="{{old('escolaridad')}}"  required id="inputState" class="form-control border rounded-3 ms-5">
                                <option value="" ></option>
                                <option value="licenciatura">Licenciatura</option>
                                <option value="maestria">Maestria</option>
                                <option value="doctorado">Doctorado</option>
                            </select><br>
                            @error('escolaridad')
                                    <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="plantel" class="col-sm-2 col-form-label">Plantel</label>
                        <div class="col-sm-10">
                            <select name="plantel"  value="{{old('plantel')}}"  required id="inputState" class="form-control border rounded-3 ms-5">
                                <option value="" ></option>
                                <option value="CUCEI">CUCEI</option>
                            </select><br>
                            @error('plantel')
                                    <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="etnia">¿Pertenece a algún grupo indigena?</label>
                        <select name="etnia"  value="{{old('etnia')}}" required id="inputState" class="form-control">
                            <option value="" ></option>
                            <option value="Si">Sí</option>
                            <option value="No">No</option>
                        </select><br><br>
                        @error('etnia')
                                <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    @if (isset($application))
                        <input type="submit" value="Guardar" class="btn btn-primary">
                    @else
                        <input type="submit" value="Guardar" id="formSubmit" class="btn btn-primary"> 
                    @endif 
                </form>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('select').selectpicker();
                });
              </script>
        </div>
    </div>
    </section>
    </main>
</body>
<x-footer>
</x-footer>
</html>