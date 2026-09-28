<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarCrudTest extends TestCase
{
    use RefreshDatabase;

    private function datosCarro(Category $category, array $cambios = []): array
    {
        return array_merge([
            'name' => 'Corolla',
            'brand' => 'Toyota',
            'year' => 2024,
            'description' => 'Sedán confiable.',
            'price' => 118900000,
            'category_id' => $category->id,
        ], $cambios);
    }

    public function test_el_catalogo_muestra_los_carros(): void
    {
        $category = Category::factory()->create();
        Car::factory()->create(['name' => 'Mustang', 'category_id' => $category->id]);

        $this->get('/cars')->assertOk()->assertSee('Mustang');
    }

    public function test_el_detalle_muestra_el_carro(): void
    {
        $category = Category::factory()->create();
        $car = Car::factory()->create(['brand' => 'Porsche', 'category_id' => $category->id]);

        $this->get(route('cars.show', $car))->assertOk()->assertSee('Porsche');
    }

    public function test_se_puede_registrar_un_carro(): void
    {
        $category = Category::factory()->create();

        $this->post(route('cars.store'), $this->datosCarro($category))
            ->assertRedirect(route('cars.manage'));

        $this->assertDatabaseHas('cars', ['name' => 'Corolla', 'brand' => 'Toyota']);
    }

    public function test_la_validacion_rechaza_datos_incompletos(): void
    {
        $this->post(route('cars.store'), [])
            ->assertSessionHasErrors(['name', 'brand', 'year', 'description', 'price', 'category_id']);
    }

    public function test_se_puede_editar_un_carro(): void
    {
        $category = Category::factory()->create();
        $car = Car::factory()->create(['category_id' => $category->id]);

        $this->get(route('cars.edit', $car))->assertOk();

        $this->put(route('cars.update', $car), $this->datosCarro($category, ['name' => 'Hilux']))
            ->assertRedirect(route('cars.manage'));

        $this->assertSame('Hilux', $car->fresh()->name);
    }

    public function test_se_puede_eliminar_un_carro(): void
    {
        $category = Category::factory()->create();
        $car = Car::factory()->create(['category_id' => $category->id]);

        $this->delete(route('cars.destroy', $car))->assertRedirect(route('cars.manage'));

        $this->assertDatabaseMissing('cars', ['id' => $car->id]);
    }
}
