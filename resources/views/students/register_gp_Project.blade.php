@extends('layouts.app')

@section('content')
    <h1>Graduation Project</h1>
    <h5>Step 3: Project Details</h5>
     {!! Form::open(['action' => 'StudentController@register_gp_Project_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


        <input type="hidden" name="all_students" value="{{json_encode($all_students)}}">
        <input type="hidden" name="all_users" value="{{json_encode($all_users)}}">
        <input type="hidden" name="team" value="{{json_encode($team)}}">

        <div class="form-group">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

        <div class="col-md-6">

                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>

        <div class="form-group">
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        <div class="col-md-6">

                    @if ($errors->has('body'))
                        <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>

        
       
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection