<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\BusquedaController;

use App\Models\Citas;
use App\Models\historial;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('/reserva', function () {
    return view('reserva');
});

Route::get('/agenda', [CitasController::class, 'listado']);

Route::get('/gracias', function () {
    return view('gracias');
});

Route::get('/historial', [HistorialController::class, 'listado']);


