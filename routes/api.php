<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\HistorialController;
use App\Models\Citas;
use App\Models\historial;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


route::POST('/Citas/registrar', [CitasController::class, 'registrar']) ->name('cita.registro');
route::GET('/Citas/listar', [CitasController::class, 'listado']) ->name('cita.agenda');
route::PUT('/Citas/actualizar/{id}', [CitasController::class, 'actualizar']);
route::GET('/Citas/eliminar/{id}', [CitasController::class, 'eliminar']);


Route::get('index', function(){
    return view('index');
});

Route::post('/agenda', [HistorialController::class,'guardarHistorial'])->name('guardar.historial'); 
