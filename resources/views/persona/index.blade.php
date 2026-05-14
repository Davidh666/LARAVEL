<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Personas</title>
</head>
<body>
    <h1>Lista de Personas</h1>

    <ul>
       
        @foreach($persona as $p)
            <li>{{ $p->nombre}} - {{ $p->capacidad }}</li>
        @endforeach
    </ul>

    <a href="{{ route('personas.crear') }}">Registrar nueva persona</a>
</body>
</html>