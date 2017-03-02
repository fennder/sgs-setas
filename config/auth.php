<?php

return [
    
    'driver' => 'eloquent',
    
    'model' => Gerenciador\User::class,
    
    'table' => 'users',

    'password' => [
        'email' => 'emails.password',
        'table' => 'password_resets',
        'expire' => 60,
    ],

];