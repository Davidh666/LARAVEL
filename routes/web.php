<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PersonaController;
use App\Http\Controllers\AulaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/persona',[PersonaController::class,'index' ]);
Route ::get('/persona/crear',[PersonaController::class,'crear'])->name('personas.crear');
Route::post('/personas/guardar', [PersonaController::class, 'guardar'])->name('personas.guardar');

Route::get('/aula', [AulaController::class, 'index'])->name('aulas.index');
Route::get('/aula/crear', [AulaController::class, 'crear'])->name('aulas.crear');
Route::post('/aula/guardar', [AulaController::class, 'guardar'])->name('aulas.guardar');