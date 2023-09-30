<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historial;
use DB;


class HistorialController extends Controller
{
    function listado() {
        $citas = historial::all();
        return view('historial', compact('citas')); 
    }

    public function guardarHistorial(Request $request) {

        $data = $request->all();
        Historial::create([
            'cita_id' => $data['cita_id'],
            'tipo_documento' => $data['tipo_documento'],
            'numero_documento' => $data['numero_documento'],
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'telefono' => $data['telefono'],
            'especialidad' => $data['especialidad'],
            'genero' => $data['genero'],
            'fecha_hora' => $data['fecha_hora'],
            'estado' => $data['estado'],  
        ]);
        
    }

}
