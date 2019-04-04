<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $projects = Project::all()->where('FKuser_id','=',$user_id);
        
        if($user->type == 'a'){
           session()->put('type','a');
        }

        elseif ($user->type == 's') {
           session()->put('type','s');
        }

        elseif ($user->type == 'p') {
           session()->put('type','p');
        }

        elseif ($user->type == 'c') {
           session()->put('type','c');
        }

        return view('dashboard',['projects'=>$projects]);    
    }
}
