<?php

return [

    'required'             => 'Поле :attribute обязательно для заполнения.',
    'string'               => 'The :attribute must be a string.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'Поле :attribute должно иметь не менее :min символов.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'Поле :attribute должно иметь не более :max символов.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'email'                => 'Поле :attribute должно быть корректным электронным адресом.',
    'unique'               => 'Уже существует пользователь с таким полем :attribute.',
    'confirmed'            => 'Пароли не совпадают.',
    'image'                => ':attribute должна быть изображением в формате JPEG, PNG, BMP, GIF или SVG.',
    'attributes' => [
        'name' => 'Имя',
        'email' => 'Email',
        'avatar' => 'Аватарка',
        'login' => 'Логин',
        'password' => 'Пароль'
    ],

];
