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
    'attributes' => [
        'login' => 'Логин',
        'password' => 'Пароль'
    ],

];
