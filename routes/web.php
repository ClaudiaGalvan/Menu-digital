<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/menu', function () {
    return Inertia::render('Menu');
});

Route::get('/ingredientes', function () {
    return Inertia::render('Ingredientes');
});

Route::get('/userlist', function () {
    return Inertia::render('UserList');
});

Route::get('/personalizar', function () {
    return Inertia::render('Personalizar');
});

Route::get('/historial', function () {
    return Inertia::render('Historial');
});

Route::get('/recepcioncocina', function () {
    return Inertia::render('RecepcionCocina');
});

require __DIR__.'/auth.php';
