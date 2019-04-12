@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(!empty($gp))
                        <h3>Your Graduation Project</h3>
                            <div class="row form-group">
                                        <div class="col-md-4">
                                         {{$gp->title}}
                                               </div>
                                               <div class="col-md-8 ">
                                                <a href="/projects/{{$gp->id}}/edit" class="btn btn-default">Edit</a>
                                                 {!!Form::open(['action' => ['ProjectsController@destroy', $gp->id], 'method' => 'POST','style'=>'display:inline'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}

                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                            {!!Form::close()!!}
                                    </div>
                                    </div>
                        <hr/>
                        @else
                        <p>You have no Graduation Project</p>
                        <hr/>
                    @endif
                    @if(count($projects) > 0)
                        <h3>Your Projects Ideas</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th  class="text-center">Actions</th>
                            </tr>
                            @foreach($projects as $project)
                                @if($project->is_gp == 0)
                                    <tr>
                                        <td>{{$project->title}}</td>
                                        <td  class="text-center"><a href="/projects/{{$project->id}}/edit" class="btn btn-default">Edit</a>
                                            
                                            {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST','style'=>'display:inline'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}

                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    @else
                        <p>You have no project ideas</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
