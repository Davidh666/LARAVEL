<?php

namespace App\Http\Controllers;

use App\Services\ecuacion as EcuacionService;
use Illuminate\Http\Request;

class ecuacion extends Controller
{
    public function index()
    {
        return view('oper.inicio');
    }

    public function resolver(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

        $ecuacion = new EcuacionService($a, $b, $c);
        $resultado = $ecuacion->raices();

        if ($resultado['tipo'] === 'complejas') {
            $x1 = $resultado['mensaje'];
            $x2 = '';
        } else {
            $x1 = $resultado['x1'];
            $x2 = $resultado['x2'];
        }

        $datos = [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'x1' => $x1,
            'x2' => $x2,
        ];

        return view('oper.resultado2', $datos);
    }
}
