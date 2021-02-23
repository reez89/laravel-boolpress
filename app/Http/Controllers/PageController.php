<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('main_pages.home');
    }

    public function about(){
        return view('main_pages.about');
    }

    public function contacts(){
        return view('main_pages.contact');
    }

    public function articles(){
        return view('main_pages.articles');
    }
}
