<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/mi-path', function () {
    return ('Hola Mundo');
});

Route::get('/cars', [CarController::class, 'index']);

Route::get('/cars/create', [CarController::class, 'create']);

Route::get('/cars/{idCar}', [CarController::class, 'show']);
