<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Complejos;

class complejosController extends Controller
{
    public function index()
    {
        return view('oper.complejos');
    }

    public function procesar(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
        $d = $request->input('d');
        $operacion = $request->input('operacion');
        $complejos = new complejos($a, $b, $c, $d);
       switch ($operacion) {
        case 'suma':
            $resultado = $complejos->suma();
            break;
        case 'resta':
            $resultado = $complejos->resta();
            break;
        case 'multiplicacion':
            $resultado = $complejos->multiplicacion();
            break;
        case 'division':
            $resultado = $complejos->division();
            break;
        default:
            $resultado = "Operación no válida";
    }

        $datos = [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'operacion' => $operacion,
            'complejo1' => "$a + {$b}i",
            'complejo2' => "$c + {$d}i",
            'resultado' => $resultado 
        ];

        return view('oper.resultadoComplejos', $datos);
    }
}


