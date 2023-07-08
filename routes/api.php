<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use App\Models\Citas;

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


route::post('/Citas/registrar', [CitasController::class, 'registrar']);
route::get('/Citas/listar', [CitasController::class, 'listado']);
route::put('/Citas/actualizar/{id}', [CitasController::class, 'actualizar']);
route::get('/Citas/eliminar/{id}', [CitasController::class, 'eliminar']);

Route::get('index', function(){
    return view('index');
});


