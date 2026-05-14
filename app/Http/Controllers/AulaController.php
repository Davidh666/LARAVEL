<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function index() {
        $aulas = Aula::all();
        return view('aula.index', ['aula' => $aulas]);
    }

    public function crear() {
        return view('aula.crear');
    }

    public function guardar(Request $request) {
        $request->validate([
            'nombre'    => 'required',
            'capacidad' => 'required|integer',
        ]);

        Aula::create($request->all());
        return 'Registro creado con éxito!';
    }
}
