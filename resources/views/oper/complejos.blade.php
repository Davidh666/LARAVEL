<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejos</title>
</head>
<body>
    <h1>Complejos</h1>
    <form action="{{ route('procesar.complejos') }}" method="POST">
        @csrf
        <label for="a">a</label>
        <input type="number" id="a" name="a"><br>

        <label for="b">b</label>
        <input type="number" id="b" name="b"><br>

        <label for="c">c</label>
        <input type="number" id="c" name="c"><br>

        <label for="d">d</label>
        <input type="number" id="d" name="d"><br>
      
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
