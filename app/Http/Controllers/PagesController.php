<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Project;
use App\Faculty;
use App\Departments;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To GPM!';

        // if(auth()->check()){
        //   $user_id = auth()->user()->id;
        //   $user = User::find($user_id);

        //   if($user->type == 'a'){
        //      session()->put('type','a');
        //   }

        //   elseif ($user->type == 's') {
        //      session()->put('type','s');
        //   }

        //   elseif ($user->type == 'p') {
        //      session()->put('type','p');
        //   }

        //   elseif ($user->type == 'c') {
        //      session()->put('type','c');
        //   }
        // }

        $comps = Company::get();
        $projs = Project::get();
        $fcus  = Faculty::get();
        return view('pages.index')->with(['companies'=>$comps,'projects'=>$projs,'fcus'=>$fcus]);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about',['title'=>$title]);
    }

    public function contact(){
        $title = 'Contact Us';
        return view('pages.contact',['title'=>$title]);
    }

    public function getDepartments($id)
    {
        $depts = Departments::where('fac_id',$id)->get();
        return $depts;
    }
}
