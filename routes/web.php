<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class); // landing de AutoMundo

Route::prefix('cars')->controller(CarController::class)->group(function () {
    Route::get('/', 'index'); // listado de carros
    Route::get('/create', 'create'); // formulario para registrar un carro
    Route::get('/{idCar}', 'show'); // detalle de un carro
});

// todas las vistas apuntan al mismo css ubicado en public/styles.css
