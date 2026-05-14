<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Aulas</title>
</head>
<body>
    <h1>Lista de Aula</h1>

    <ul>
       
        @foreach($aula as $a)
            <li>{{ $a->id }} - {{ $a->nombre }} - {{ $a->capacidad }}</li>
        @endforeach
    </ul>
    
    <p><a href="{{ route('aulas.crear') }}">Registrar Nueva Aula</a></p>

    
</body>
</html>