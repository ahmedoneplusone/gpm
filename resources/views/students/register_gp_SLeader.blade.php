@extends('layouts.app')

@section('content')
    <h1>Graduation Project</h1>
    <h5>Step 1: Team Leader</h5>
    {!! Form::open(['action' => 'StudentController@register_gp_SLeader_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
       
        <div class="form-group">
            <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
            {{Form::label('student_id', 'ID')}}
            {{Form::number('student_id', '', ['class' => 'form-control', 'placeholder' => 'Your Faculty ID'])}}
                <div class="col-md-6">

                    @if ($errors->has('student_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('student_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>

        <div class="form-group">
            <div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">

            {{Form::label('faculty', 'Faculty')}}
            {{Form::text('faculty', '', ['class' => 'form-control', 'placeholder' => 'Faculty Name'])}}

               <div class="col-md-6">

                    @if ($errors->has('faculty'))
                        <span class="help-block">
                            <strong>{{ $errors->first('faculty') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>

        <div class="form-group">
            <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                
            {{Form::label('dept', 'Department')}}
            {{Form::text('dept', '', ['class' => 'form-control', 'placeholder' => 'Department'])}}
        
               <div class="col-md-6">

                    @if ($errors->has('dept'))
                        <span class="help-block">
                            <strong>{{ $errors->first('dept') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>

       
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection