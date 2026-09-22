<?php

namespace App\Http\Controllers;

class CarController extends Controller
{
    public function index()
    {
        return view('car.index');
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
