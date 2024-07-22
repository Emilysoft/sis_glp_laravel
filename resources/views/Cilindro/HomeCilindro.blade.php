<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cilndros</title>
</head>
<body>
    <h1>Este es la pantalla home de cilindros</h1>

<a href="/cilindros/create">Crear Cilindro</a>
<a href="#">Eliminar Cilindro</a>
<a href="#">Editar Cilindro</a>


<h1>Aqui se mostraran todos los Cilindros</h1>
        
        <ul>
        @foreach($cilindros as $cilindro)
           <li>
               <a href="/cilindros/{{$cilindro->id}}">
                {{$cilindro->formato}}
               </a>
           </li>
        @endforeach
        </ul>





</body>
</html>