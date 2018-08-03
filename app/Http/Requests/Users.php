<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Users extends FormRequest
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
            'name.*' => 'required|string|max:32',
            'login.*' => 'required|string|max:32|unique:users,login',
            'email.*' => 'required|string|email|max:32|unique:users,email',
            'password.*' => 'required|string|min:6',
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

            'name.*.required'             => 'Имя обязательно для заполнения.',
            'name.*.string'               => 'Имя должно быть строкой.',
            'name.*.max'                  => [
                'string'  => 'Имя должно иметь не более :max символов.'
            ],
            'login.*.required'             => 'Логин обязателен для заполнения.',
            'login.*.string'               => 'Логин должен быть строкой.',
            'login.*.max'                  => [
                'string'  => 'Имя должно иметь не более :max символов.'
            ],
            'login.*.unique'               => 'Уже существует пользователь с таким логином',
            'email.*.required'             => 'Email обязателен для заполнения.',
            'email.*.string'               => 'Email должен быть строкой.',
            'email.*.max'                  => [
                'string'  => 'Имя должно иметь не более :max символов.'
            ],
            'email.*.email'                => 'Поле email должно быть корректным электронным адресом.',
            'email.*.unique'               => 'Уже существует пользователь с таким email',
            'password.*.required'             => 'Пароль обязателен для заполнения.',
            'password.*.min'                  => [
                'string'  => 'Пароль должен иметь не менее :min символов.'
            ],
        ];
    }
}
