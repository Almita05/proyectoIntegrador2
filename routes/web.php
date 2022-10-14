<?php

use Illuminate\Support\Facades\Route;

// RUTA DE LA VISTA ARRENDATARIO
// use App\Http\Controllers\ComputadoraController;

Route::get('/', function () {
    return view('welcome');
});


//
Route::get('/home', [App\Http\Controllers\TabletController::class, 'index'])->name('home');