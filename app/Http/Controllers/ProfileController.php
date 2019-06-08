<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Faculty;
class ProfileController extends Controller
{
      public function __construct()
	    {
	        $this->middleware('auth');        
	    }
	  public function index()
	  {
	  	if(auth()->check()){
          $user_id = auth()->user()->id;
          $user = User::find($user_id);

          if($user->type == 'A'){
             return view('admin.profile');
          }

          elseif ($user->type == 'S') {
             return view('student.profile');
          }

          elseif ($user->type == 'P') {
             return view('professor.profile');
          }

          elseif ($user->type == 'F') {
              $faculty = Faculty::where('user_id',$user->id)->first();
              return view('faculty.profile')->with('faculty',$faculty);
          }
        }
	  }
}
