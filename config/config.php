<?php
return [
    'database' => [
        'name' => 'suividette',
        'username' => 'fatimata',
        'password' => 'passer123',
        'connection' => 'pgsql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
