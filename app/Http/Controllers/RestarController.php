<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Operaciones;

class RestarController extends Controller
{
    public function restar(Request $request)
    {
        $a = $request->input('num1');
        $b = $request->input('num2');

        $oper = new Operaciones($a, $b);
        $resultado = $oper->restar();

        $datos = [
            'a' => $a,
            'b' => $b,
            'resultado' => $resultado,
        ];

        return view('oper.resultado', $datos);
    }
}
