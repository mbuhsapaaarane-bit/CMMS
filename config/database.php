<?php

use Illuminate\Support\Str;

return [
    'default' => env('DB_CONNECTION', env('MYSQLHOST') ? 'mysql' : 'sqlite'),
    'connections' => [
        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', env('MYSQLHOST', '127.0.0.1')),
            'port' => env('DB_PORT', env('MYSQLPORT', '3306')),
            'database' => env('DB_DATABASE', env('MYSQLDATABASE', 'cmms')),
            'username' => env('DB_USERNAME', env('MYSQLUSER', 'root')),
            'password' => env('DB_PASSWORD', env('MYSQLPASSWORD', '')),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],
    ],
    'migrations' => 'migrations',
];
