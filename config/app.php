<?php

return [
    'name'=>'MVC',
    'debug'=>true,
    'auth' => [
        'admin' => [
            'username' => 'Hello'
        ]
    ],

    'providers' => [
        \App\ServiceProviders\ExceptionsServiceProvider::class,
        \App\ServiceProviders\DatabaseServiceProvider::class,
        \App\ServiceProviders\AuthServiceProvider::class,
        \App\ServiceProviders\ViewServiceProvider::class,
        \App\ServiceProviders\RouteServiceProvider::class
    ]
];