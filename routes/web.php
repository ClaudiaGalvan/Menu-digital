<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\OrderController; // 👈 Nuevo import para pedidos

// Página de bienvenida (pública)
Route::get('/', function () {
    return view('welcome');
});

// Auth Manual
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Menú y demás (privado, solo si está autenticado)
Route::middleware('auth')->group(function () {

    // Vista de Menú (para clientes)
    Route::get('/menu', function () {
        return view('menu');
    })->name('menu');

    // Ingredientes (privado para dueños)
    Route::resource('ingredients', IngredientController::class);

    // Cocineros: Pedidos Activos
    Route::get('/cocinero', [OrderController::class, 'index'])->name('cocinero');
    Route::put('/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
});
