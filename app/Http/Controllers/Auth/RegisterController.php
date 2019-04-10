<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Faculty;
use App\Professor;
use App\Student;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        //     'phone' => $data['phone'],
        // ]);

        //Register AS FACUlTY

        if($data['l-name'] && $data['sub-domain'])
        {
               

                $fac = new User();
                $fac->name=$data['name'];
                $fac->email=$data['email'];
                $fac->password=bcrypt($data['password']);
                $fac->phone=$data['phone'];
                $fac->type="F";
                $fac->save();

                $newFac = new Faculty();
                $newFac->user_id = $fac->id;
                $newFac->little_name = $data['l-name'];
                $newFac->sub_domain = $data['sub-domain'];
                $newFac->save();

                return $fac;
        }
        elseif ($data['fac_name'] && $data['dept'])
        {
           
                $prof = new User();
                $prof->name=$data['name'];
                $prof->email=$data['email'];
                $prof->password=bcrypt($data['password']);
                $prof->phone=$data['phone'];
                $prof->type="P";
                $prof->save();

                $newPro = new Professor();
                $newPro->user_id = $prof->id;
                $newPro->faculty = $data['fac_name'];
                $newPro->dept = $data['dept'];
                $newPro->save();
                return $prof;
        }
        elseif ($data['st_fac_name'] && $data['st_fac_dept'])
        {
          
                $std = new User();
                $std->name=$data['name'];
                $std->email=$data['email'];
                $std->password=bcrypt($data['password']);
                $std->phone=$data['phone'];
                $std->type="S";
                $std->save();

                

                $newStd = new Professor();
                $newStd->user_id = $std->id;
                $newStd->faculty = $data['st_fac_name'];
                $newStd->dept = $data['st_fac_dept'];
                $newStd->save();

                return $std; 
        }
        elseif ($data['desc'] && $data['Address']) {
           
                $comp = new User();
                $comp->name=$data['name'];
                $comp->email=$data['email'];
                $comp->password=bcrypt($data['password']);
                $comp->phone=$data['phone'];
                $comp->type="C";
                $comp->save();

                $newStd = new Professor();
                $newStd->user_id = $std->id;
                $newStd->description = $data['desc'];
                $newStd->address = $data['Address'];
                $newStd->save();
                return $comp ; 
        }

    }
}
