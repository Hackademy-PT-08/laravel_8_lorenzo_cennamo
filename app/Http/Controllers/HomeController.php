<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $articles = Article::all();
        return view('home.homepage', ['articles'=>$articles]); 
    }
};