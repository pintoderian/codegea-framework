<?php
date_default_timezone_set('America/Bogota');
if (!isset($_SESSION)):
    @session_start();
endif;
use Illuminate\Database\Capsule\Manager as Database;

$db = require_once 'app.php';
$base = new Database;

$base->addConnection([
    'driver' =>'mysql',
    'host' => $db['host'],
    'database' => $db['database'],
    'username' => $db['user'],
    'password' => $db['pass'],
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => '',
]);

$base->bootEloquent();