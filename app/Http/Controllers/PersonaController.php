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


        public function editar($id){
            $persona = Persona::findOrFail($id); // Busca a la persona, si no existe lanza error 404
            $data = ['persona' => $persona];     // Mete los datos en un array
            return view('persona.editar', $data); // Redirige a la vista pasando los datos
        }


        public function actualizar(Request $request, $id){
                $persona = Persona::findOrFail($id); // Vuelve a buscar al usuario por si acaso
                
                // Valida que los datos cumplan con lo requerido antes de tocar la base de datos
                $request->validate([
                    'paterno' => 'required|string|max:255',
                    'materno' => 'required|string|max:255',
                    'nombre' => 'required|string',
                ]);
                
                // Toma todos los datos del formulario y actualiza el registro
                $persona->update($request->all());

                return '¡Registro actualizado con éxito!';
            }
}
