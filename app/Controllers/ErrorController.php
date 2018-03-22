<?php
namespace App\Controllers;

class ErrorController extends Controller{

    public function index(){
        header('HTTP/1.1 404 Not Found');
        return $this->view('errors/404.twig');
    }
}