<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTOMUNDO - INICIO
|--------------------------------------------------------------------------
*/

Route::get('/', HomeController::class); // landing de AutoMundo

/*
|--------------------------------------------------------------------------
| AUTOMUNDO - CONSULTA PÚBLICA
|--------------------------------------------------------------------------
*/

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

/*
|--------------------------------------------------------------------------
| AUTOMUNDO - GESTIÓN INTERNA
|--------------------------------------------------------------------------
| Todas estas rutas requieren iniciar sesión.
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/cars/manage', [CarController::class, 'manage'])->name('cars.manage');
    Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
    Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
});

/*
|--------------------------------------------------------------------------
| AUTOMUNDO - DETALLE PÚBLICO
|--------------------------------------------------------------------------
| Va al final para que /cars/manage y /cars/create no se tomen como {car}.
|--------------------------------------------------------------------------
*/

Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');

/*
|--------------------------------------------------------------------------
| BREEZE - DASHBOARD
|--------------------------------------------------------------------------
| Después de iniciar sesión se envía al usuario al panel de gestión.
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect()->route('cars.manage');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| BREEZE - PERFIL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| BREEZE - AUTENTICACIÓN
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
