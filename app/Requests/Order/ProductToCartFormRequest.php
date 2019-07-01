<?php

namespace App\Requests\Order;

use App\Requests\CustomFormRequest;

class ProductToCartFormRequest extends CustomFormRequest
{
    public function rules()
    {
        return [
            'product_id' => 'required'
        ];
    }
}