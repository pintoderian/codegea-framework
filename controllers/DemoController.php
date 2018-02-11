<?php
use Opis\Http\Request;
use Opis\Http\Response;
class DemoController extends Base{
    public function __construct(){
        parent::__construct();
    }
    public function home(){
        echo $this->template->render('home.twig');
    }
    public function user(){
        $user = Users::all();
        echo $this->template->render('users.twig', ['user' => $user]);
    }
}