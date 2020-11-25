<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
