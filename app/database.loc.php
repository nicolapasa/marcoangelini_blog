<?php


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();


$capsule->addConnection([
    'driver'=>'mysql',
    'host'=>'localhost',
    'username'=>'root',
    'password'=>'',
    'database'=>'mvc_angelini',
    'charset'=>'utf8',
    'collection'=>'utf8_unicode_ci',
    'prefix'=>''

]);

$capsule->bootEloquent();