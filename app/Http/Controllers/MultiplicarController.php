<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Operaciones;

class MultiplicarController extends Controller
{
    public function multiplicar(Request $request)
    {
        $a = $request->input('num1');
        $b = $request->input('num2');

        $oper = new Operaciones($a, $b);
        $resultado = $oper->multiplicar();

        $datos = [
            'a' => $a,
            'b' => $b,
            'resultado' => $resultado,
        ];

        return view('oper.resultado', $datos);
    }
}
