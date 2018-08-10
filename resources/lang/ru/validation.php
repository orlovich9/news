<?php

return [

    'required'             => 'Поле :attribute обязательно для заполнения.',
    'string'               => 'Поле :attribute должно быть строкой.',
    'min'                  => [
        'string'  => 'Поле :attribute должно иметь не менее :min символов.',
    ],
    'max'                  => [
        'string'  => 'Поле :attribute должно иметь не более :max символов.',
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
    ]

];
