<?php

use Engine\Route;

$loader = require 'vendor/autoload.php';
$loader->addPsr4('Engine\\', __DIR__ . '/vendor/engine');
$loader->addPsr4('App\\', __DIR__ . '/app');


//use Engine\Db;

define('APP', __DIR__ . '/app/');

Route::run();
//$db = Db::getInstance();