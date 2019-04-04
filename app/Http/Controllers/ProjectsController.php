<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;
use DB;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projects = project::all();
        // return project::where('title', 'project Two')->get();
        // $projects = DB::select('SELECT * FROM projects');
        // $projects = project::orderBy('title','desc')->take(1)->get();
        // $projects = project::orderBy('title','desc')->get();

        $projects = Project::orderBy('created_at','desc')->paginate(10);
        return view('projects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

      
       
        // Create project
        $project = new Project;
        $project->title = $request->input('title');
        $project->body =  strip_tags($request->input('body'));
        $project->user_id = auth()->user()->id;
        $project->save();

        return redirect('/projects')->with('success', 'Project Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);

        // Check for correct user
        if(auth()->user()->id !==$project->user_id){
            return redirect('/projects')->with('error', 'Unauthorized Page');
        }

        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);


        // Create project
        $project = Project::find($id);
        $project->title = $request->input('title');
        $project->body = $request->input('body');

        $project->save();

        return redirect('/projects')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        // Check for correct user
        if(auth()->user()->id !==$project->user_id){
            return redirect('/projects')->with('error', 'Unauthorized Page');
        }
        
        $project->delete();
        return redirect('/projects')->with('success', 'Project Removed');
    }
}
