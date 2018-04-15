<?php

use \Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'database' => 'YOUR_DB_NAME',
    'username' => 'YOUR_USERNAME',
    'password' => 'YOUR_PASSWORD',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);

$capsule->bootEloquent();