<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/database.php';
// =============================================================================
// Extructura base para la carga de templates de twig
// =============================================================================
require_once 'BaseController.php';
// =============================================================================
// Iniciando rutas
// =============================================================================
require_once 'Route.php';
Route::setNamespace('App\Controllers');
require_once __DIR__.'/../route/web.php';
Route::run();