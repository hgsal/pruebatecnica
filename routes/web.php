<?php

use App\Models\grd_grado;
use App\Models\alm_alumno;
use App\Models\mat_materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\GrdGradoController;
use App\Http\Controllers\AlmAlumnoController;
use App\Http\Controllers\MatMateriaController;

use function GuzzleHttp\Promise\each;

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



Route::view('/', 'home')->name('home');


Route::resource('materias', MatMateriaController::class)
        ->missing(function (Request $request) {
            return Redirect::route('materias.index');
        });
Route::resource('grados', GrdGradoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('grados.index');
        });
Route::resource('alumnos', AlmAlumnoController::class)
        ->missing(function (Request $request) {
            return Redirect::route('alumnos.index');
        });