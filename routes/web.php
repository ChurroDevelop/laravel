<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', function(){
    return view('usuario');
});

Route::post('/usuario', [UserController::class, 'store'])->name('usuario'); // Vincular ruta de tipo POST con un controlodar y a su vez 

Route::get('/editar/{id}', [UserController::class, 'edit'])->name('editar.usuario'); // Ruta con parametro para obtener el usaurio

Route::post('/update/{id}', [UserController::class, 'update'])->name('actualizar.usuario');