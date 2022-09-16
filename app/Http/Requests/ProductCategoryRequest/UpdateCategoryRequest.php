<?php

namespace App\Http\Requests\ProductCategoryRequest;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'id' => 'required',
            'image' => 'required',
            'name' => [
                "required",
                "string",
                Rule::unique('product_categories', 'nama')
                    ->ignore($this->route('kategori_id'), 'id'),
            ],
        ];
    }
}
