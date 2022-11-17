<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajesController;
use App\Http\Controllers\CreadoresController;
use App\Http\Controllers\ContenidosController;
use App\Http\Controllers\SagasController;


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
Route::get('/', [ContenidosController::class,'index']);
Route::get('/personajes',[PersonajesController::class,'personajes']);
Route::get('/creador',[CreadoresController::class,'creador']);
Route::get('/sagas',[SagasController::class,'saga']);

