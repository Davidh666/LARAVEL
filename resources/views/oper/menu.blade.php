<!DOCTYPE html>
<html >

<body>
    <h1>Menú de Operaciones</h1>
    <nav>
        <ul>
            <li><a href="{{ route('oper.sumar') }}">Sumar</a></li>
            <li><a href="{{ route('oper.restar') }}">Restar</a></li>
            <li><a href="{{ route('oper.multiplicar') }}">Multiplicar</a></li>
            <li><a href="{{ route('oper.dividir') }}">Dividir</a></li>
        </ul>
    </nav>
</body>
</html>