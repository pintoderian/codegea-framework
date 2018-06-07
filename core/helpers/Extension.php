<?php

use App\Kernel;
use Core\Session;
use Symfony\Component\Security\Csrf\CsrfTokenManager;

class Extension extends Twig_Extension{

    public function getFunctions() {
        $newFunctions = [];
        $functions = [
            new Twig_Function('elapsed_time', array($this, 'elapsed_time')),
            new Twig_Function('path', array($this, 'path')),
            new Twig_Function('assets', array($this, 'assets')),
            new Twig_Function('url', array($this, 'url')),
            new Twig_Function('current_url', array($this, 'current_url')),
            new Twig_Function('custom', array($this, 'custom')),
            new Twig_Function('csrf', array($this, 'csrf')),
            new Twig_Function('error_has', array($this, 'error_has')),
            new Twig_Function('check_has', array($this, 'check_has'))
        ];
        $result = array_merge($functions, $newFunctions);
        return $result;
    }

    public function elapsed_time(){
        if (!isset($GLOBALS['PerformanceMicrotime'])) {
            return 0;
        }
        return number_format(( microtime(true) - $GLOBALS['PerformanceMicrotime']), 4);
    }

    public function path($slug = NULL, $current = NULL){
        $numero = '';
        foreach ($current as $key => $value) {
            $numero = $value;
        }
        echo $slug.'?page='.$value;
    }

    public function assets($url = NULL) {
        $root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        $url = $root . 'assets/' . $url;
        return $url;
    }

    public function url($url = NULL) {
        $root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
        $root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        $url = $root . $url;
        return $url;
    }

    public function current_url(){
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $actual_link;
    }

    public function csrf($type = NULL){
        $easyCSRF = new CsrfTokenManager();
        $token = $easyCSRF->getToken('_token');
        if($type == 'input'){
            return '<input type="hidden" name="_token" value="'.$token.'">';
        }elseif($type == 'meta'){
            return '<meta name="_token" content="'.$token.'">';
        }else{
            return $token;
        }
    }

    public function custom($func, $params){
        $kernel = new Kernel;
        if(method_exists($kernel, $func)){
            return $kernel->$func($params);
        }else{
            return 'This function not exists';
        }
    }

    public function error_has($name){
        $session = new Session;
        $errors = $session->get('errors');
        if(isset($errors)){
            if(isset($errors[$name])){
                $temp = $errors[$name];
                unset($errors[$name]);
                $session->set('errors', $errors);
                return $temp;
            }
        }
    }

    public function check_has($name){
        $session = new Session;
        $errors = $session->get('errors');
        if(isset($errors)){
            if(isset($errors[$name])){
                $temp = $errors[$name];
                return $temp;
            }
        }
    }
}
