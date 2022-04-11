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
    
        <tr>
            <td>{{$application->nombre}}</td>
            <td>{{$application->curp}}</td>
            <td>{{$application->direccion}}</td>
            <td>{{$application->imf}}</td>
            <td>{{$application->edad}}</td>
            <td>{{$application->telefono}}</td>
            <td>{{$application->sexo}}</td>
            <td>{{$application->limitacion}}</td>
            <td>{{$application->escolaridad}}</td>
            <td>{{$application->plantel}}</td>
            <td>{{$application->etnia}}</td>
            <td>
                <a href="application/{{$application->id}}/edit">Editar</a>

               <form action="/application/{{$application->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                   <input type="submit" value="Borrar">
               </form>
            </td>
            
        </tr>
   
        
    </table>
</body>
</html>