<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index() {

        $personas = Persona::all();
        $data = [
            'persona' => $personas
        ];
        return view('persona.index', $data);
    }


    public function crear(){
        return view('persona.crear');
    }

    public function guardar(Request $request){

            $request->validate([
                'paterno' => 'required',
                'materno' => 'required',
                'nombre'  => 'required',
            ]);
            Persona::create($request->all());
            return 'Registro creado con éxito!';
        }
}
