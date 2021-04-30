<?php

use App\Http\Controllers\TrabajadorController;
use Illuminate\Support\Facades\Route;

//TRABAJADORES ROUTING
Route::get('/trabajador', [TrabajadorController::class, 'index'])->name('trabajador.index');
Route::get('/trabajador/create', [TrabajadorController::class, 'create'])->name('trabajador.create');
Route::post('/trabajador',       [TrabajadorController::class, 'store'])->name('trabajador.store');

//UBICACION ROUTING
Route::post('/trabajador/comunas',     [TrabajadorController::class, 'comunas']);
Route::post('/trabajador/provincias',  [TrabajadorController::class,'provincias']);
