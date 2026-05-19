<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\factorial;

class ControladorFactorial extends Controller
{
    public function calcular()
    {
        $numero = 5; 
        $factService = new factorial($numero);

        $datos = [
            'titulo' => 'Cálculo de Factorial',
            'numero' => $numero,
            'resultado' => $factService->calcular()
        ];

        return view('operaciones.factorial', $datos);
    }
}