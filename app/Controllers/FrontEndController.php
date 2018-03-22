<?php
namespace App\Controllers;

use Opis\Http\Request;
use Opis\Http\Response;

use App\Models\Users;

class FrontEndController extends Controller{
    public function home(){
        return $this->view('home.twig');
    }
    public function users(){
        $user = Users::all();
        return $this->view('users.twig', ['user' => $user]);
    }
}