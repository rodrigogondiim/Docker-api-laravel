<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|string',
            'incoins' => 'sometimes|integer',
            'real' => 'sometimes|integer',
            'cover' => 'nullable|file|mimes:jpeg,png,jpg|max:15000',
            'stock_current' => 'sometimes|integer',
            'stock_total' => 'sometimes|integer',
            'suggested' => 'sometimes|boolean'
        ];
    }
}
