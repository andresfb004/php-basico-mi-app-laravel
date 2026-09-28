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
}
