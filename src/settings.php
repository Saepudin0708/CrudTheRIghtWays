<?php
return [
    'settings' => [
        'displayErrorDetails' => true,

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        // Database
        'database' => [
            'host'      => 'localhost',
            'dbname'    => 'dda_crud',
            'user'      => 'root',
            'password'  => 'anisnuzulan123`'
        ]
    ],
];
