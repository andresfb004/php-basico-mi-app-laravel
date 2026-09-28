<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\Category;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('category')
            ->latest()
            ->paginate(9);

        return view('car.index', compact('cars'));
    }

    public function manage()
    {
        $cars = Car::with('category')
            ->latest()
            ->paginate(10);

        return view('car.manage', compact('cars'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('car.create', compact('categories'));
    }

    public function store(CarRequest $request)
    {
        Car::create($request->validated());

        return redirect()
            ->route('cars.manage')
            ->with('success', 'Carro registrado correctamente.');
    }

    public function show(Car $car)
    {
        $car->load('category');

        return view('car.show', compact('car'));
    }

    public function edit(Car $car)
    {
        $categories = Category::all();

        return view('car.edit', compact('car', 'categories'));
    }

    public function update(CarRequest $request, Car $car)
    {
        $car->update($request->validated());

        return redirect()
            ->route('cars.manage')
            ->with('success', 'Carro actualizado correctamente.');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()
            ->route('cars.manage')
            ->with('success', 'Carro eliminado correctamente.');
    }
}
