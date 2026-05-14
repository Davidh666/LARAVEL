<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Aula</title>
</head>
<body>
    <h1>Vista Crear Aula</h1>

    <form method="post" action="{{ route('aulas.guardar') }}">
        @csrf
        
        <label>Nombre del Aula:</label><br>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Capacidad:</label><br>
        <input type="text" name="capacidad" required>
        <br><br>

        <button type="submit">Guardar Aula</button>
    </form>

    <p><a href="{{ url('/aula') }}">Volver a la lista</a></p>
</body>
</html>