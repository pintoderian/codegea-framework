<?php
require_once 'LoadClass.php';
require_once 'Route.php';

class App{
    public function run(){
        // =====================================================================
        // Errors
        // =====================================================================
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
        // =====================================================================
        // Routes
        // =====================================================================
        $route = new LoadClass('Route');
        $route->setNamespace('App\Controllers');
        require_once PUBLIC_PATH.'route/web.php';
        $route->error('ErrorController@index');
        $route->run();
    }

    public function autoload($path){
        foreach (glob($path.'*.php') as $filename){
            require_once $filename;
        }
    }
}