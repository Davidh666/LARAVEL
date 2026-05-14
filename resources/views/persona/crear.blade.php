<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Persona</title>
</head>
<body>
    <h1>Vista Crear</h1>
    <form method="post" action="{{ route('personas.guardar') }}">
        @csrf
        
        
        <label for="ci">CI:</label>
        <input type="text" name="ci" id="ci">
        <br>

        <label for="paterno">Paterno:</label>
        <input type="text" name="paterno" id="paterno">
        <br>

        <label for="materno">Materno:</label>
        <input type="text" name="materno" id="materno">
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br>

        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion">
        <br>

        &nbsp;
        <button type="submit">Guardar Persona</button>
    </form>
</body>
</html>