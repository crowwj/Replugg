<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', [ProductoController::class, 'index']);


//Vistas Publicas
Route::get('/', function () {
    return view('main');
});


Route::get('/usuario', function () {
    return view('components.login.usuario');
});




Route::get('/registro', function () {
    return view('components.login.registro');
});
// Fin de Vistas Publicas

Route::get('/', [ProductoController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
