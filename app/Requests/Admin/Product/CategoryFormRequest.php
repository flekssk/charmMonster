<?php

namespace App\Requests\Admin\Product;

use App\Requests\CustomFormRequest;

class CategoryFormRequest extends CustomFormRequest
{
    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле название необходимо для заполнения'
        ];
    }
}