<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'brand',
        'year',
        'description',
        'price',
        'category_id',
    ];

    // Un carro pertenece a un tipo de carrocería
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un carro puede estar en el carrito de varios usuarios
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
