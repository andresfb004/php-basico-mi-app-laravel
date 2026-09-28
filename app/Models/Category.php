<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
    ];

    // Un tipo de carrocería tiene muchos carros
    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    // Emoji que representa el tipo de carrocería en las vistas
    public function icon(): string
    {
        return match ($this->name) {
            'Sedán' => '🚘',
            'SUV' => '🚙',
            'Pickup' => '🛻',
            'Deportivo' => '🏎️',
            'Eléctrico' => '⚡',
            'Convertible' => '🌤️',
            'Minivan' => '🚐',
            default => '🚗',
        };
    }
}
