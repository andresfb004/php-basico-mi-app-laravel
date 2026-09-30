<h1 align="center">🚗 AutoMundo</h1>

<p align="center">
  <strong>El mundo de los carros: tipos, marcas y modelos</strong>
</p>

AutoMundo es una aplicación web desarrollada en Laravel para consultar y gestionar un catálogo de carros organizados por tipo de carrocería (Sedán, SUV, Pickup, Deportivo, Eléctrico, etc.).

El proyecto tiene una parte pública (landing y catálogo) y un área de gestión protegida con autenticación para registrar, editar y eliminar carros.

---

## Descripción del proyecto

AutoMundo fue desarrollado como parte de la asignatura **Backend** de la Universidad Autónoma de Bucaramanga - UNAB.

La aplicación implementa un CRUD de carros usando Laravel, Blade, Eloquent ORM, migraciones con relaciones, factories y seeders, validación con Form Request y autenticación con Laravel Breeze.

### Modelo de datos

| Tabla        | Campos principales                                          | Relación                               |
|--------------|-------------------------------------------------------------|----------------------------------------|
| `categories` | name, description                                           | Una categoría tiene muchos carros      |
| `cars`       | name, brand, year, description, price, category_id          | Un carro pertenece a una categoría     |
| `cart_items` | user_id, car_id, quantity                                   | Une usuarios con los carros del carrito |

### Rutas principales

| Método | URL                   | Acción              | Acceso    |
|--------|-----------------------|---------------------|-----------|
| GET    | `/`                   | Landing             | Público   |
| GET    | `/cars`               | Catálogo            | Público   |
| GET    | `/cars/{car}`         | Detalle de un carro | Público   |
| GET    | `/cars/manage`        | Panel de gestión    | Con login |
| GET    | `/cars/create`        | Formulario nuevo    | Con login |
| POST   | `/cars`               | Guardar carro       | Con login |
| GET    | `/cars/{car}/edit`    | Formulario editar   | Con login |
| PUT    | `/cars/{car}`         | Actualizar carro    | Con login |
| DELETE | `/cars/{car}`         | Eliminar carro      | Con login |

---

## Cómo ejecutarlo

```bash
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

Usuario de prueba creado por el seeder: `test@example.com` / `password`.

Para correr las pruebas: `php artisan test`.

---

## Tecnologías utilizadas

- PHP 8 y Laravel 13
- Blade
- Laravel Breeze
- Eloquent ORM
- SQLite
- HTML5 y CSS3
- Vite y Tailwind CSS (vistas de perfil de Breeze)
- Composer, Node.js y NPM
- Git y GitHub

---

## Autor

<p align="center">
  <strong>Juan Andrés Forero Becerra</strong><br>
  Universidad Autónoma de Bucaramanga - UNAB<br>
  <strong>Asignatura:</strong> Backend · <strong>Año:</strong> 2026
</p>
