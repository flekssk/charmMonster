<?php

namespace App\Requests\Admin\Blog;

use App\Requests\CustomFormRequest;

class PostFormRequest extends CustomFormRequest
{
    public function rules()
    {
        return [
            'title'   => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле заголовок не иожет быть пустым',
            'content.required' => 'Содержание не может быть пустым',
        ];
    }
}