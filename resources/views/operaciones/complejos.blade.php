<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe - Complejos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap');
        body { font-family: 'JetBrains+Mono', monospace; }
    </style>
</head>
<body class="bg-[#f4f4f2] p-6 text-gray-800">
    <div class="max-w-2xl mx-auto border-2 border-gray-300 p-8 bg-white shadow-[8px_8px_0px_0px_rgba(0,0,0,0.1)]">
        <header class="border-b-2 border-black pb-4 mb-6">
            <h1 class="text-xl font-bold uppercase tracking-tighter">{{ $titulo }}</h1>
            
        </header>

        <section class="mb-8">
            <h3 class="text-sm font-bold mb-2">ENTRADA DE DATOS:</h3>
            <div class="grid grid-cols-4 gap-2 text-center border p-4 bg-gray-50">
                <div><small>a</small><p class="font-bold">{{ $valores['a'] }}</p></div>
                <div><small>b</small><p class="font-bold">{{ $valores['b'] }}</p></div>
                <div><small>c</small><p class="font-bold">{{ $valores['c'] }}</p></div>
                <div><small>d</small><p class="font-bold">{{ $valores['d'] }}</p></div>
            </div>
        </section>

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-800 text-white text-sm">
                    <th class="p-2">OPERACIÓN</th>
                    <th class="p-2">RESULTADO</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr><td class="p-3 font-medium">Suma</td><td class="p-3 text-blue-700">{{ $suma }}</td></tr>
                <tr><td class="p-3 font-medium">Resta</td><td class="p-3 text-blue-700">{{ $resta }}</td></tr>
                <tr><td class="p-3 font-medium">Multiplicación</td><td class="p-3 text-blue-700">{{ $multiplicacion }}</td></tr>
                <tr><td class="p-3 font-medium">División</td><td class="p-3 text-blue-700">{{ $division }}</td></tr>
            </tbody>
        </table>

        <footer class="mt-10 pt-4 border-t border-dashed border-gray-400 text-[10px] uppercase text-gray-400">
            Sistema de Cálculo Complejos v1.0
        </footer>
    </div>
</body>
</html>