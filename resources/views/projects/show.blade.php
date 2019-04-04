@extends('layouts.app')

@section('content')
    <a href="/projects" class="btn btn-default">Go Back</a>
    <h1>{{$project->title}}</h1>
    <br><br>
    <div>
        {!!$project->body!!}
    </div>
    <hr>
    <small>Written on {{$project->created_at}} by {{$project->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $project->user_id)
            <a href="/projects/{{$project->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection