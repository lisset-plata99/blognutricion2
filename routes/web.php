<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NutricionController;

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

Route::get('/', [NutricionController::class,'Inicio'])-> name ('index');
Route::get('/Dietas', [NutricionController::class,'ViewDietas'])-> name ('dietas2');
Route::get('/ComposicionAlimentos', [NutricionController::class,'ViewComposiciondeAlimentos'])-> name ('Alimentos');
Route::get('/ProcesodeNutricion', [NutricionController::class,'ViewProcesoNutricion'])-> name ('Procesos');
Route::get('/Tests', [NutricionController::class,'ViewTest'])-> name ('Test');
