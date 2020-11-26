<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function question(){
        return view('question');
    }
    
    public function conditions(){
        return view('conditions');
    }
    
    public function delivery(){
        return view('delivery');
    }
    
    public function account($id){
        $user = User::all()->find($id);
        //Avec l'auth, verifier si l'id passée est égale a l'id de la session
        return view('account', ['user' => $user]);
    }
}
