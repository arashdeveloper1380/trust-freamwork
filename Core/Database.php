<?php

use \Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule();

//var_dump(env('DB_DATABASE'));die;

$capsule->addConnection([
    'driver' => env('DB_CONNECTION'),
    'host' => env('DB_HOST'),
    'port' => env('DB_PORT'),
    'database' => env('DB_DATABASE'),
    'username' => env('DB_USERNAME' , 'root'),
    'password' => env('DB_PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);

$capsule->bootEloquent();