<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class); // landing de AutoMundo

// index, create, store, show, edit, update, destroy
Route::resource('cars', CarController::class);

// todas las vistas apuntan al mismo css ubicado en public/styles.css
