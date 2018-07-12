<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Profile extends FormRequest
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
            'name' => 'required|string|max:32',
            'login' => 'required|string|max:32|unique:users',
            'avatar' => 'image',
            'email' => 'required|string|email|max:32|unique:users',
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
            'min'                  => [
                'string'  => 'Поле :attribute должно иметь не менее :min символов.'
            ],
            'max'                  => [
                'string'  => 'Поле :attribute должно иметь не более :max символов.'
            ],
            'email'                => 'Поле :attribute должно быть корректным электронным адресом.',
            'unique'               => 'Уже существует пользователь с таким полем :attribute.',
            'image'                => ':attribute должна быть изображением в формате JPEG, PNG, BMP, GIF или SVG.',
            'attributes' => [
                'name' => 'Имя',
                'email' => 'Email',
                'avatar' => 'Аватарка',
                'login' => 'Логин',
            ],

        ];
    }
}
