<?php
class Extension extends Twig_Extension{
    public function getFunctions() {
        return array(
            new Twig_Function('assets', array($this, 'assets')),
            new Twig_Function('url', array($this, 'url')),
        );
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
}