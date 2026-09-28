<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Tipos de carrocería (los mismos de la landing)
        $tipos = [
            'Sedán' => 'Cuatro puertas y maletero independiente. Equilibrio entre confort, espacio y eficiencia.',
            'SUV' => 'Más alto que un sedán, con opción de tracción 4x4 y mayor capacidad de carga.',
            'Hatchback' => 'Compacto y ágil, con puerta trasera integrada al maletero. Ideal para ciudad.',
            'Pickup' => 'Caja de carga abierta. Pensada para trabajo pesado, remolque y todo terreno.',
            'Deportivo' => 'Diseño aerodinámico, motores potentes y manejo enfocado en el rendimiento.',
            'Eléctrico' => 'Propulsado 100% por motores eléctricos, sin emisiones directas.',
            'Convertible' => 'Techo retráctil o desmontable. Prioriza el estilo y la conducción al aire libre.',
            'Minivan' => 'Espacio amplio y asientos flexibles, pensado para familias y viajes largos.',
        ];

        $categorias = [];
        foreach ($tipos as $nombre => $descripcion) {
            $categorias[$nombre] = Category::create([
                'name' => $nombre,
                'description' => $descripcion,
            ]);
        }

        // Carros reales del catálogo
        $carros = [
            ['Corolla', 'Toyota', 2024, 'Sedán', 118900000, 'El auto más vendido de la historia, símbolo de confiabilidad y bajo consumo.'],
            ['Mustang GT', 'Ford', 2023, 'Deportivo', 310000000, 'Ícono estadounidense desde 1964 con motor V8, referente de los "pony cars".'],
            ['Model 3', 'Tesla', 2024, 'Eléctrico', 239000000, 'Referente en autonomía, tecnología a bordo y conducción asistida.'],
            ['Serie 3', 'BMW', 2024, 'Sedán', 265000000, 'Equilibrio entre lujo, tecnología y placer de manejo desde 1975.'],
            ['Hilux', 'Toyota', 2025, 'Pickup', 205000000, 'Legendaria por su resistencia extrema en cualquier terreno.'],
            ['911 Carrera', 'Porsche', 2024, 'Deportivo', 890000000, 'Mantiene su diseño esencial desde 1963, evolucionando en cada generación.'],
            ['Wrangler', 'Jeep', 2023, 'SUV', 289000000, 'Capacidad todo terreno pura con un diseño reconocible en cualquier parte.'],
            ['Golf GTI', 'Volkswagen', 2023, 'Hatchback', 185000000, 'El "hot hatch" original, referencia obligada desde 1976.'],
            ['MX-5', 'Mazda', 2024, 'Convertible', 199000000, 'Roadster ligero y divertido, el convertible más vendido de la historia.'],
            ['Carnival', 'Kia', 2025, 'Minivan', 245000000, 'Minivan amplia y tecnológica, ideal para familias numerosas.'],
        ];

        foreach ($carros as [$nombre, $marca, $anio, $tipo, $precio, $descripcion]) {
            Car::create([
                'name' => $nombre,
                'brand' => $marca,
                'year' => $anio,
                'description' => $descripcion,
                'price' => $precio,
                'category_id' => $categorias[$tipo]->id,
            ]);
        }
    }
}
