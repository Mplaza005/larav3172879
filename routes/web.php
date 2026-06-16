<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludosController;
use App\Http\Controllers\OperacionesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return view('saludoht');
});


Route::get('/saludarc',[SaludosController::class,'Saludo']);


Route::get('/frm_sumar',[OperacionesController::class,'frm_sumar']);
Route::post('/sumar',[OperacionesController::class,'sumar'])->name('sumar.store');


Route::get('/restar/{num1}/{num2}',[OperacionesController::class,'restar']);
