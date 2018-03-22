<?php
namespace Core;

class BaseController{
    protected $template;
    public function __construct(){
        $loader = new \Twig_Loader_Filesystem(realpath(__DIR__.'/../resource/views'));
        $this->template = new \Twig_Environment($loader, array(
            'cache' => realpath(__DIR__.'/../storage/cache/views'),
            'debug' => true,
            'charset' => 'utf8'
        ));
        $this->template->addExtension(new \Twig_Extension_Debug());
        $this->template->addExtension(new \Extension());
    }
}