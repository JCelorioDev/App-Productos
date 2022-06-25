<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;
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
    return view('welcome');
});

Route::get('Productos',[VentasController::class,'Index']);
Route::post('Productos/Guardar',[VentasController::class,'Save']);
Route::get('Productos{Id}',[VentasController::class,'Edit']);
Route::post('Productos/Edicion{Id}',[VentasController::class,'Actualizar']);