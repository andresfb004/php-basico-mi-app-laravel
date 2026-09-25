<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Corolla',
                'Mustang',
                'Model 3',
                'Serie 3',
                'Hilux',
                '911',
                'Wrangler',
                'Golf GTI',
            ]),
            'brand' => fake()->randomElement([
                'Toyota',
                'Ford',
                'Tesla',
                'BMW',
                'Porsche',
                'Jeep',
                'Volkswagen',
            ]),
            'year' => fake()->numberBetween(2015, 2026),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 60000000, 600000000),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
