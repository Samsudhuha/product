<?php

namespace App\Http\Requests\ProductRequest;

use Illuminate\Foundation\Http\FormRequest;

class PostProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'required|unique:products,nama',
            'product_categories_id' => 'required',
            'image' => 'required',
        ];
    }
}
