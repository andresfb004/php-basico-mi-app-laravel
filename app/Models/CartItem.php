<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_items';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'car_id',
        'quantity',
    ];

    // Un ítem del carrito pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Un ítem del carrito apunta a un carro
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
