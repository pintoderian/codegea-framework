<?php
namespace App\Controllers;

class ErrorController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        header('HTTP/1.1 404 Not Found');
        echo $this->template->render('errors/404.twig');
    }
}