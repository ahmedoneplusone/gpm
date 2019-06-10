@extends('layouts.app')


<?php
    $user_profs = \App\User::get();
    $prof = new \App\Professor;
    $studL = \App\Student::get()->where('user_id',auth()->user()->id)->first();
 ?>
@section('content')

  <div class="row  form-group">
    <div class="col-md-8 col-md-offset-2">

    <h1>Graduation Project</h1>
    <h5>Step 3: Project Details</h5>

    </div>
  </div>
  
     {!! Form::open(['action' => 'StudentController@register_gp_Project_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}



        <div class="row  form-group">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">

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
        </div>

        <div class="row form-group">
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">

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

        </div>
        

                            <div class="row form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            
                                            <select required class="search_iput" style="width:100%" name="prof">

                                                <option selected disabled>Select your Professor Supervisor.</option>

                                                @foreach($user_profs as $user_prof)

                                                    @if($user_prof->type == 'p')

                                                        {{ $prof =  \App\Professor::get()->where('user_id',$user_prof->id)->first() }}

                                                        @if($prof->dept_id == $studL->dept_id)

                                                            <option value="{{$user_prof->id}}">
                                                                {{$user_prof->name}}
                                                            </option>

                                                        @endif

                                                    @endif

                                                @endforeach

                                            </select>

                                        </div>
                                    </div>

         <div class="row form-group">

        <div class="col-md-12 text-center">
        
        {{Form::submit('Next', ['class'=>'btn btn-primary'])}}
        </div>
</div>
    {!! Form::close() !!}
@endsection