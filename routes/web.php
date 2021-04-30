<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.colaboradores.index');
});



Route::get('/colaboradores/listado-colaboradores', [App\Http\Controllers\TrabajadorController::class, 'index']);
Route::get('/colaboradores/axios/listado-colaboradores', [App\Http\Controllers\TrabajadorController::class, 'lista_trabajadores']);