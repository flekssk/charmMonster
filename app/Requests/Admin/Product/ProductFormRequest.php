<?php

namespace App\Requests\Admin\Product;

use App\Requests\CustomFormRequest;

class ProductFormRequest extends CustomFormRequest
{
    public function rules()
    {
        return [
            'name'        => 'required',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Поле имя необходимо для заполнения',
            'category_id.required' => 'Необходимо выбрать категорию'
        ];
    }
}