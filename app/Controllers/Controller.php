<?php
namespace App\Controllers;

use Core\BaseController;

class Controller extends BaseController{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function view($path = '', $params = []){
        echo $this->template->render($path, $params);
    }
}