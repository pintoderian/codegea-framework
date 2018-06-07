<?php
namespace Core;

use Core\Session;
use Core\Validator;

use Illuminate\Pagination\Paginator;

class BaseController{
    
    protected $template;

    public function __construct(){
        if (!isset($GLOBALS['PerformanceMicrotime'])) {
            $GLOBALS['PerformanceMicrotime'] = microtime(true);
        }
        $loader = new \Twig_Loader_Filesystem(PUBLIC_PATH.'/resource/views');
        $this->template = new \Twig_Environment($loader, array(
            'cache' => realpath(PUBLIC_PATH.'storage/cache/views/'),
            'debug' => true,
            'charset' => 'utf8'
        ));
        $this->template->addExtension(new \Twig_Extension_Debug());
        $this->template->addExtension(new \Extension());
    }

    public function getPage($request){
        $page = @$request->get("page");
        if(isset($page)){
            if(is_numeric($page)){
                return $page;
            }else{
                redirect('/error');
            }
        }else{
            return 1;
        }
    }
    
    public function paginator($current_page = 1){
        Paginator::currentPageResolver(function() use ($current_page) {
            return $current_page;
        });
    }
    
    public function view($path = '', $params = []){
        echo $this->template->render($path, $params);
    }

    public function error(){
        header('HTTP/1.1 404 Not Found');
        return $this->view('APP/errors/404.twig');
    }

    public function validate($request, $arr = []){
        Validator::request($request, $arr);
    }

    public function error_has($name){
        $session = new Session;
        $errors = $session->get('errors');
        if(isset($errors)){
            if(isset($errors[$name])){
                $temp = $errors[$name];
                unset($errors[$name]);
                $session->set('errors', $errors);
                throw new \Exception($temp);
            }
        }
    }
}