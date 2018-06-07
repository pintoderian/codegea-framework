<?php
use Illuminate\Database\Capsule\Manager as Database;

$App = Loader::file(PUBLIC_PATH.'config/app');

if(isset($App['timezone'])): date_default_timezone_set($App['timezone']); endif;

$base = new Database;

$base->addConnection([
    'driver' =>'mysql',
    'host' => $App['database']['DB_HOST'],
    'database' => $App['database']['DB_DATABASE'],
    'username' => $App['database']['DB_USERNAME'],
    'password' => $App['database']['DB_PASSWORD'],
    'charset' => $App['database']['DB_CHARSET'],
    'collation' => $App['database']['DB_COLLATION'],
    'prefix' => $App['database']['DB_PREFIX']
]);

$base->bootEloquent();