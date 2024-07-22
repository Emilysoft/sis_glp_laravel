<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create|Cilindro</title>
</head>
<body>
    <h1>Pantalla de crear</h1>
    <form action="/cilindros" method="POST">
        @csrf
    
      
        <label for="tipo">Formato</label>
        <input type="text" name="formato" id="formato">
        <br>
 
        <button type="submit">Guardar</button>

</body>
</html>