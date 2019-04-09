@extends('layouts.app')

@section('content')
    <h1>Graduation Project</h1>
    <h5>Step 2: Team Members</h5>
    {!! Form::open(['action' => 'StudentController@register_gp_Members_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}


            <input type="hidden" name="studentL" value="{{$studentL}}">
            <input type="hidden" name="team" value="{{$team}}">

                
            {!! Form::select('members_number', array('4' => 'Four', '5' => 'Five','6' => 'Six'), 'Four'); !!}
            {{Form::label('members_number', 'Members')}}


            @for($i=0 ; $i < 4 ; $i++)

                <h3>Member {{$i+1}}</h3>

            <div class="form-group">
            <div class="form-group{{ $errors->has('name_'.$i) ? ' has-error' : '' }}">

                    {{Form::label('name', 'Name')}}
                    {{Form::text('name_'.$i, '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                
               <div class="col-md-6">

                    @if ($errors->has('name_'.$i))
                        <span class="help-block">
                            <strong>{{ $errors->first('name_'.$i) }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>

        <div class="form-group">
            <div class="form-group{{ $errors->has('email_'.$i) ? ' has-error' : '' }}">

                    {{Form::label('email', 'E-mail')}}
                    {{Form::email('email_'.$i, '', ['class' => 'form-control', 'placeholder' => 'E-mail'])}}
                
               <div class="col-md-6">

                    @if ($errors->has('email_'.$i))
                        <span class="help-block">
                            <strong>{{ $errors->first('email_'.$i) }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>
        
        <div class="form-group">
            <div class="form-group{{ $errors->has('student_id_'.$i) ? ' has-error' : '' }}">

                    {{Form::label('student_id', 'ID')}}
                    {{Form::number('student_id_'.$i, '', ['class' => 'form-control', 'placeholder' => 'Faculty ID'])}}
                
               <div class="col-md-6">

                    @if ($errors->has('student_id_'.$i))
                        <span class="help-block">
                            <strong>{{ $errors->first('student_id_'.$i) }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <br/>


                <hr>

            @endfor
        
        
       
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection