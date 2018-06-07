<?php
namespace App\Controllers;

use App\Models\Users;
use Core\Request;

class FrontEndController extends Controller{

    public function home(){
        return $this->view('home.twig');
    }

    public function form(){
        $request = Request::all();
        $this->validate($request, [
            'title' => 'required|unique:users,username,2'
        ]);
        return $this->view('form.twig');
    }


    public function users(){
        $current_page = $this->getPage(Request::all());
        $this->paginator($current_page);

        $users = Users::paginate(2);
        return $this->view('users.twig', ['users' => $users]);
    }
}