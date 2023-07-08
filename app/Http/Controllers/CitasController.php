<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;

class CitasController extends Controller
{
    function listado() {
        $registros = Citas::all();
        return json_encode($registros);
    }

    function registrar(Request $request) {
        $datos = $request->all();
        Citas::create($datos);
        echo 'se registro la cita correctamente';
    }

    function actualizar($id,Request $request) {
        $datos = $request->all();
        $cita = Citas::find($id);
        $cita->update($datos);
        echo 'se actualizo la cita correctamente';
    }

    function eliminar($id) {
        $cita = Citas::find($id);
        $cita->delete();
        echo 'se ha eliminado la cita';
    } 
}
