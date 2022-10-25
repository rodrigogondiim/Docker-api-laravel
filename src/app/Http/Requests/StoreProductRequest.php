<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string',
            'incoins' => 'required|integer',
            'real' => 'required|integer',
            'cover' => 'nullable|file|mimes:jpeg,png,jpg|max:15000',
            'stock_total' => 'required|integer',
            'stock_current' => 'required|max:stock_total|integer',
            'suggested' => 'sometimes|boolean'
        ];
    }
}
