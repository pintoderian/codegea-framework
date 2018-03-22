<?php
namespace App\Controllers;

use Opis\Http\Request;
use Opis\Http\Response;

use App\Models\Users;

class FrontEndController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function home(){
        echo $this->template->render('home.twig');
    }
    public function users(){
        $user = Users::all();
        echo $this->template->render('users.twig', ['user' => $user]);
    }
}