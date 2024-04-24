<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'sku' => 'required|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'status' => 'required|numeric',
            'sellingprice' => 'required|numeric',
        ];
    }

}