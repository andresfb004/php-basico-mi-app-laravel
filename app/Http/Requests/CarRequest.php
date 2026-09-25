<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:100',
            'year' => 'required|integer|min:1886|max:'.(date('Y') + 1),
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El modelo del carro es obligatorio.',
            'brand.required' => 'La marca es obligatoria.',
            'year.required' => 'El año es obligatorio.',
            'year.min' => 'El año no puede ser anterior a 1886 (primer automóvil).',
            'year.max' => 'El año no puede ser mayor a :max.',
            'description.required' => 'La descripción es obligatoria.',
            'price.required' => 'El precio es obligatorio.',
            'price.min' => 'El precio no puede ser negativo.',
            'category_id.required' => 'Selecciona un tipo de carrocería.',
            'category_id.exists' => 'El tipo de carrocería seleccionado no existe.',
        ];
    }
}
