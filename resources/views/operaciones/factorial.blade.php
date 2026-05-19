<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Factorial</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Courier New', Courier, monospace; }
    </style>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white border-l-4 border-black p-8 max-w-sm w-full shadow-md">
        <span class="text-[10px] font-bold text-gray-400 block mb-1">MÓDULO MATEMÁTICO</span>
        <h1 class="text-lg font-bold mb-4 border-b pb-2">{{ $titulo }}</h1>
        
        <div class="space-y-4">
            <div class="flex justify-between">
                <span class="text-gray-600 italic">Argumento (n):</span>
                <span class="font-bold underline">{{ $numero }}</span>
            </div>
            
            <div class="bg-black text-white p-4 text-center mt-4">
                <p class="text-[10px] opacity-70 mb-1">RESULTADO_CALCULADO</p>
                <p class="text-3xl font-bold">{{ $resultado }}</p>
            </div>
        </div>

       
    </div>
</body>
</html>