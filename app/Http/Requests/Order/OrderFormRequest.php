<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name'           => 'required',
            'last_name'            => 'required',
            'telephone'            => 'required',
//            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'            => 'Имя: обязательное поле',
            'last_name.required'             => 'Фамилия: обязательное поле',
            'telephone.required'             => 'Телефон: обязательное поле',
            'g-recaptcha-response.required'  => 'Необходимо пройти проверку',
            'g-recaptcha-response.recaptcha' => 'Необходимо пройти проверку',
        ];
    }
}