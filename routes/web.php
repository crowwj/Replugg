<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Models\Producto;

Route::get('/', [ProductoController::class, 'index']);


//Vistas Publicas
Route::get('/', function () {
    return view('main');
});


Route::get('/ayuda', function () {
    return view('components.ayuda');
});



Route::get('/productos/categoria/{id}', function ($id) {
    // Busca en la tabla 'productos' usando la columna 'id_categoria'
    return Producto::where('id_categoria', $id)->get();
});


// LOGIN
Route::get('/usuario', function () {
    return view('components.login.usuario');
});

Route::post('/login-check', [LoginController::class, 'login'])->name('usuarios.login');


//REGISTRO

Route::get('/registro', function () {
    return view('components.login.registro');
});

Route::post('/registro', [RegistroController::class, 'registro'])->name('usuarios.registro');

//Productos

Route::get('/', [ProductoController::class, 'index']);

//FinProductos

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
