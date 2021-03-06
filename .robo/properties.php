<?php

return [

    // User global configuration
    'local' => [
        'GIT_PATH' => [
            'question' => 'Path to git',
            'default' => 'git',
        ],
    ],

    // Project local configuration
    'config' => [
        'DEV_MAIL' => [
            'question' => 'Developer email',
            'default'  => '',
        ],
        'DB_HOST' => [
            'question' => 'Database Host',
            'default' => 'localhost',
        ],
        'DB_NAME' => [
            'question' => 'Database name',
            'default' => '',
        ],
        'DB_USER' => [
            'question' => 'Database username',
            'default' => '',
        ],
        'DB_PASSWORD' => [
            'question' => 'Database password',
            'default' => '',
        ],
        'ENVIRONEMENT' => [
            'question' => 'Environment',
            'choices' => ['development', 'staging', 'production'],
            'default' => 'development',
        ],
        'WEB_SCHEME' => [
            'question' => 'Site scheme',
            'choices' => ['http', 'https'],
            'default' => 'http',
        ],
        'WEB_DOMAIN' => [
            'question' => 'Site domain (without path)',
            'default' => 'example.com',
        ],
        'WEB_PATH' => [
            'question' => 'Site base path (don\'t forget the ending `/web` part if no vhost)',
            'default' => '/www/your-project/web',
            'empty' => true,
        ],
    ],

];
