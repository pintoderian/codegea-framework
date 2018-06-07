<?php
namespace Core;

use Symfony\Component\HttpFoundation\Request as RequestSymfony;

class Request extends RequestSymfony{
    public static function all(){
        return self::createFromGlobals();
    }

    public function isAjax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }
    
}