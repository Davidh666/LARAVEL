
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Operaciones </h1>

    

    <form action="{{ route('procesar.inicio') }}" method="POST">
        @csrf
        <label for="a">a</label>
        <input type="text" name="a" id="a" value="{{ old('a') }}">
        <label for="b">b</label>
        <input type="text" name="b" id="b" value="{{ old('b') }}">
        <label for="c">c</label>
        <input type="text" name="c" id="c" value="{{ old('c') }}">
        <br>

        <button type="submit">Resolver</button>
    </form>
</body>
</html>