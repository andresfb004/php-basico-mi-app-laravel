<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $listaDeCarros = Car::all();

        return view('car.index', compact('listaDeCarros'));
    }

    public function create()
    {
        // id // nombre // marca // año // precio // descripción // tipo de carrocería
        return view('car.create');
    }

    public function show($idCar)
    {
        // id // nombre // marca // año // precio // descripción // tipo de carrocería
        return view('car.show');
    }
}
