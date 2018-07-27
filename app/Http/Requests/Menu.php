<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Menu extends FormRequest
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
            'title' => 'required|string'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [

            'required'             => 'Поле :attribute обязательно для заполнения.',
            'string'               => 'Поле :attribute должно быть строкой.',
            'attributes' => [
                'title' => 'Заголовок'
            ],

        ];
    }
}
