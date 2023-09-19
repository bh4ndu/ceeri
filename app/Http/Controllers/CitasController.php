<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use DB;

class CitasController extends Controller
{
    function listado() {
        $citas = Citas::all();
        return view('agenda', compact('citas')); 
    }

    function registrar(Request $request) {
        $datos = $request->all();
        Citas::create($datos);
        return view('gracias');
    }

    function actualizar($id,Request $request) {
        $datos = $request->all();
        $cita = Citas::find($id);
        $cita->update($datos);
        return 1;
    }

    function eliminar($id) {
        $cita = Citas::find($id);
        $cita->delete();
        return 1;
    }

   

}
