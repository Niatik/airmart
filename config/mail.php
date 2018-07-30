<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'energouchet.kz'),
    'port' => env('MAIL_PORT', '25'),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS',  'info@energouchet.kz'),
        'name' => env('MAIL_FROM_NAME', 'Служба ЮК-ДАСУ'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', ''),
    'username' => env('MAIL_USERNAME', 'info@energouchet.kz'),
    'password' => env('MAIL_PASSWORD', 'ypOPYq872w'),
    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
];