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
| AUTOMUNDO - CARROS
|--------------------------------------------------------------------------
| Por ahora siguen sin middleware.
| La protección con auth se agrega en el siguiente paso.
|--------------------------------------------------------------------------
*/

// panel de gestión (va antes del resource para que "manage" no se tome como {car})
Route::get('/cars/manage', [CarController::class, 'manage'])->name('cars.manage');

// index, create, store, show, edit, update, destroy
Route::resource('cars', CarController::class);

/*
|--------------------------------------------------------------------------
| BREEZE - DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
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
