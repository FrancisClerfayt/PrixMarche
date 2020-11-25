<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class HomeController extends Controller
{
    public function index(){
        return view('home');
    }


    public function category(){
        $category = Category::all();
        return view('category', ['categories' => $category]);
    }
}