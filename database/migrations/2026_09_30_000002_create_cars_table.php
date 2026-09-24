<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 // modelo: Corolla, Mustang...
            $table->string('brand');                // marca: Toyota, Ford...
            $table->unsignedSmallInteger('year');   // año del modelo
            $table->text('description');
            $table->decimal('price', 12, 2);        // precio en COP
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
