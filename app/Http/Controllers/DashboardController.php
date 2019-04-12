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
     * Show the application home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $projectIdeas = Project::all()->where('user_id','=',$user_id)->where('is_gp', '=' , 0);

        if($user->type == 's'){

        $gp = Project::all()->where('user_id','=',$user_id)->where('is_gp', '=' , 1)->first();
        
            if(!empty($gp)){

                return view('dashboard',['projects'=>$projectIdeas,'gp'=>$gp]); 

            }
        }

        return view('dashboard',['projects'=>$projectIdeas]);    
    }
}
