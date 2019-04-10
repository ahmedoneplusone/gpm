<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Student;
use App\Team;
use App\User;
use App\Company;

use Illuminate\Support\Facades\Crypt;

class StudentController extends Controller
{	

	  public function __construct()
    {
        $this->middleware('auth');        
    }

    public function index (){

        $comps = Company::get();
        $projs = Project::get();
        return view('pages.index')->with(['companies'=>$comps,'projects'=>$projs]);
    }

    public function register_gp_SLeader (){
    	if(Project::where('user_id',auth()->user()->id)->count() > 0){
    		return back();
    	}
    	return view('students.register_gp_SLeader');
    }

    public function register_gp_SLeader_post (Request $request){
    	
        $this->validate($request, [
            'student_id' => 'required',
            'faculty' => 'required',
            'dept' => 'required',
        ]);

        $team = new Team;
		$team->leader_id = auth()->user()->id;

        $studentL = new Student;
        $studentL->user_id = auth()->user()->id;
        $studentL->student_id = $request->input('student_id');
        $studentL->faculty = $request->input('faculty');
        $studentL->dept = $request->input('dept');

        $enc_studentL = Crypt::encrypt($studentL);
        $enc_team = Crypt::encrypt($team);

		return redirect('student/register_gp_Members/'.$enc_studentL.'/'.$enc_team);
    }

    public function register_gp_Members ($enc_studentL,$enc_team){

    	$studentL = Crypt::decrypt($enc_studentL);
    	$team = Crypt::decrypt($enc_team);

    	return view('students.register_gp_Members',array('studentL' => $studentL,'team' => $team));
    }

    public function register_gp_Members_post (Request $request){

    	$this->validate($request, [
            'name_0' => 'required',
            'email_0' => 'required',
            'student_id_0' => 'required',
            'name_1' => 'required',
            'email_1' => 'required',
            'student_id_1' => 'required',
            'name_2' => 'required',
            'email_2' => 'required',
            'student_id_2' => 'required',
            'name_3' => 'required',
            'email_3' => 'required',
            'student_id_3' => 'required',
        ],[],[

        	"name_0" => "First Member's Name",
        	"email_0" => "First Member's E-mail",
        	"student_id_0" => "First Member's ID",
        	"name_1" => "Second Member's Name",
        	"email_1" => "Second Member's E-mail",
        	"student_id_1" => "Second Member's ID",
        	"name_2" => "Third Member's Name",
        	"email_2" => "Third Member's E-mail",
        	"student_id_2" => "Third Member's ID",
        	"name_3" => "Fourth Member's Name",
        	"email_3" => "Fourth Member's E-mail",
        	"student_id_3" => "Fourth Member's ID",
        ]);

        $user_0 = new User;
        $user_0->name = $request->input('name_0');
        $user_0->email = $request->input('email_0'); 
		$user_0->password = "".rand(10000000,9999999999);

		$user_1 = new User;
        $user_1->name = $request->input('name_1');
        $user_1->email = $request->input('email_1'); 
		$user_1->password = "".rand(10000000,9999999999);

		$user_2 = new User;
        $user_2->name = $request->input('name_2');
        $user_2->email = $request->input('email_2'); 
		$user_2->password = "".rand(10000000,9999999999);

		$user_3 = new User;
        $user_3->name = $request->input('name_3');
        $user_3->email = $request->input('email_3'); 
		$user_3->password = "".rand(10000000,9999999999);

		$allUsers[] = new User;
		$allUsers[0] = $user_0;
		$allUsers[1] = $user_1;
		$allUsers[2] = $user_2;
		$allUsers[3] = $user_3;


		$studentL = new Student;
		$studentL = json_decode($request->studentL,true);

    	$student_0 = new Student;
        $student_0->student_id = $request->input('student_id_0');
        $student_0->faculty = $studentL['faculty'];
        $student_0->dept = $studentL['dept'];

        $student_1 = new Student;
        $student_1->student_id = $request->input('student_id_1');
        $student_1->faculty = $studentL['faculty'];
        $student_1->dept = $studentL['dept'];

        $student_2 = new Student;
        $student_2->student_id = $request->input('student_id_2');
        $student_2->faculty = $studentL['faculty'];
        $student_2->dept = $studentL['dept'];

        $student_3 = new Student;
        $student_3->student_id = $request->input('student_id_3');
        $student_3->faculty = $studentL['faculty'];
        $student_3->dept = $studentL['dept'];

    	$allStudents[] = new Student;
    	$allStudents[0] = $studentL;
    	$allStudents[1] = $student_0;
    	$allStudents[2] = $student_1;
    	$allStudents[3] = $student_2;
    	$allStudents[4] = $student_3;

    	$team = new Team;
		$team = json_decode($request->team,true);

		$enc_all_students = Crypt::encrypt($allStudents);
		$enc_all_users = Crypt::encrypt($allUsers);
        $enc_team = Crypt::encrypt($team);
    	
		return redirect('student/register_gp_Project/'.$enc_all_students.'/'.$enc_all_users.'/'.$enc_team);
    }

    public function register_gp_Project($enc_all_students,$enc_all_users,$enc_team){

    	$all_students = Crypt::decrypt($enc_all_students);
		$all_users = Crypt::decrypt($enc_all_users);
        $team = Crypt::decrypt($enc_team);

    	return view('students.register_gp_Project',array('all_students' => $all_students,'all_users' => $all_users,'team'=>$team));
    }

    public function register_gp_Project_post(Request $request){

    	$this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

    	$all_students = json_decode($request->all_students,true);
    	$all_users = json_decode($request->all_users,true);
    	$team = json_decode($request->team,true);

    	$project = new Project;

    	$project->title = $request->input('title');
    	$project->body = $request->input('body');
    	$project->user_id = auth()->user()->id;

    	

    	return $all_students[0]['faculty'] ;
    }

}
