<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PersonaController;
use App\Http\Controllers\AulaController;

use App\Http\Controllers\Controladorcomplejos;
use App\Http\Controllers\ControladorFactorial;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SumarController;
use App\Http\Controllers\RestarController;
use App\Http\Controllers\MultiplicarController;
use App\Http\Controllers\DividirController;
use App\Http\Controllers\ecuacion; 

use App\Http\Controllers\complejosController;

Route::get('/complejos', [Controladorcomplejos::class, 'complejos']);
Route::get('/factorial', [ControladorFactorial::class, 'calcular']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/persona',[PersonaController::class,'index' ]);
Route ::get('/persona/crear',[PersonaController::class,'crear'])->name('personas.crear');
Route::post('/personas/guardar', [PersonaController::class, 'guardar'])->name('personas.guardar');

Route::get('/aula', [AulaController::class, 'index'])->name('aulas.index');
Route::get('/aula/crear', [AulaController::class, 'crear'])->name('aulas.crear');
Route::post('/aula/guardar', [AulaController::class, 'guardar'])->name('aulas.guardar');




Route::get('/complejos', [complejosController::class, 'index'])->name('oper.complejos');

Route::post('/complejos', [complejosController::class, 'procesar'])->name('procesar.complejos');

Route::get('/menu', [MenuController::class,'menu'])->name('oper.menu');
Route::get('/sumar', [MenuController::class,'showSumar'])->name('oper.sumar');
Route::get('/restar', [MenuController::class,'showRestar'])->name('oper.restar');
Route::get('/multiplicar', [MenuController::class,'showMultiplicar'])->name('oper.multiplicar');
Route::get('/dividir', [MenuController::class,'showDividir'])->name('oper.dividir');
Route::post('/sumar',[SumarController::class,'sumar'])->name('procesar.sumar');
Route::post('/restar',[RestarController::class,'restar'])->name('procesar.restar');
Route::post('/multiplicar',[MultiplicarController::class,'multiplicar'])->name('procesar.multiplicar');
Route::post('/dividir',[DividirController::class,'dividir'])->name('procesar.dividir');

// Route::get('/inicio', [ecuacion::class, 'index'])->name('oper.inicio');
// Route::post('/inicio', [ecuacion::class, 'resolver'])->name('procesar.inicio');

















