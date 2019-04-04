<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To GPM!';
        
        return view('pages.index',['title'=>$title]);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about',['title'=>$title]);
    }

    public function contact(){
        $title = 'Contact Us';
        return view('pages.contact',['title'=>$title]);
    }
}
