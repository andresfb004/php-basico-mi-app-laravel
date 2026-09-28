<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class); // landing de AutoMundo

// panel de gestión (va antes del resource para que "manage" no se tome como {car})
Route::get('/cars/manage', [CarController::class, 'manage'])->name('cars.manage');

// index, create, store, show, edit, update, destroy
Route::resource('cars', CarController::class);

// todas las vistas apuntan al mismo css ubicado en public/styles.css
