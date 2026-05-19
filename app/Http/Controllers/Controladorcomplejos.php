<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Services\Complejos;

class Controladorcomplejos extends Controller
{
    public function complejos()
    {
      
        $comp = new Complejos(2, 3, 4, 5);

        $datos = [
            'titulo' => 'Operaciones con Complejos',
            'valores' => ['a' => 2, 'b' => 3, 'c' => 4, 'd' => 5],
            'suma' => $comp->suma(),
            'resta' => $comp->resta(),
            'multiplicacion' => $comp->multiplicacion(),
            'division' => $comp->division(),
        ];

        return view('operaciones.complejos', $datos);
    }
}