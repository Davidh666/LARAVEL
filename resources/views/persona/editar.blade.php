<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vista Crear</h1>
    <form method="post" action="{{ route('personas.actualizar', $persona->id) }}">
        @csrf
        @method('PUT')
        <label for="paterno">Paterno:</label>
        <input type="text" name="paterno" id="paterno" value="{{ $persona->paterno }}">
        <br>
        <label for="materno">Materno:</label>
        <input type="text" name="materno" id="materno" value="{{ $persona->materno }}">
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $persona->nombre }}">
        <br>
        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion" value="{{ $persona->direccion }}">
        <br>
        <button type="submit">Actualizar Persona</button>
    </form>
</body>
</html>