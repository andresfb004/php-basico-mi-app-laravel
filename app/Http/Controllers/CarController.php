<?php

namespace App\Http\Controllers;

class CarController extends Controller
{
    public function index()
    {
        return "Listado de carros";
    }

    public function create()
    {
        return "Formulario para registrar un carro";
    }

    public function show($idCar)
    {
        return "Detalle del carro: $idCar";
    }
}
