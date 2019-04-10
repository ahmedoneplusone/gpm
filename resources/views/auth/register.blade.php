@extends('layouts.app')

@section('content')

<?php
    $facs = \App\User::where('type','F')->get();
    $deps = \App\Departments::get();
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fas fa-plus-square"></i> <b>REGISTER</b></div>
                <div class="panel-body">
                    <form class="form-horizontal"  role="form" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                                <div class="panel-heading"><i class="fas fa-plus-square"></i> <b> As Faculty?</b>
                                 <small style="display: block;color: #e74c3c;">SWAP RIGHT TO GET PROFESSOR FORM</small></div>

                                

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <input  type="text" style="width: 100%" class="search_iput" name="name" value="{{ old('name') }}"  autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <input  type="email" style="width: 100%" class="search_iput" name="email" value="{{ old('email') }}" >

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  type="password" style="width: 100%" class="search_iput" name="password" >

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  placeholder=" Reapet Password" style="width:100%" type="password" class="search_iput" name="password_confirmation" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-phone-square"></i>
                                            </div>
                                            <input  placeholder=" PHONE" type="text" style="width:100%" class="search_iput" name="phone" >

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-compress-arrows-alt"></i>
                                            </div>
                                            <input id="l-name" placeholder=" SHORT NAME LIKE 'FCIH'" type="text" style="width:100%" maxlength="6" class="search_iput" name="l-name" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-server"></i>
                                            </div>
                                            <input id="sub-domain" placeholder=" MAIL DOMAIN LIKE ' @fcih ' " type="text" style="width:100%" maxlength="6" class="search_iput" name="sub-domain" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                <small><strong>ALEARDY HAVE ACCOUNT</strong></small>
                                            </a>
                                        </div>
                                    </div>
                               
                          </div>
                          <div class="swiper-slide">
                            <div class="panel-heading"><i class="fas fa-plus-square"></i> <b> As PROFESSOR?</b>
                             <small style="display: block;color: #e74c3c;">SWAP RIGHT TO GET STUDENT FORM OR LEFT TO GET FACULTY FORM</small></div>
                               
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <input  type="text" style="width: 100%" class="search_iput" name="name" value="{{ old('name') }}"  autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <input  type="email" style="width: 100%" class="search_iput" name="email" value="{{ old('email') }}" >

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  type="password" style="width: 100%" class="search_iput" name="password" >

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  placeholder=" Reapet Password" style="width:100%" type="password" class="search_iput" name="password_confirmation" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-phone-square"></i>
                                            </div>
                                            <input  placeholder=" PHONE" type="text" style="width:100%" class="search_iput" name="phone" >

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <select class="search_iput" style="width:100%" name="fac_name">
                                                <option selected disabled> SELECET YOUR FACULTY.</option>
                                                @foreach($facs as $fac)
                                                    <option value="{{$fac->id}}">
                                                        {{$fac->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <select class="search_iput" style="width:100%" name="dept">
                                                <option selected disabled> SELECET YOUR DEPARTMENT.</option>
                                                @foreach($deps as $dep)
                                                    <option value="{{$dep->id}}">
                                                        {{$dep->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                <small><strong>ALEARDY HAVE ACCOUNT</strong></small>
                                            </a>
                                        </div>
                                    </div>
                               


                          </div>
                          <div class="swiper-slide">
                            <div class="panel-heading"><i class="fas fa-plus-square"></i> <b> As STUDENT?</b>
                             <small style="display: block;color: #e74c3c;">SWAP RIGHT TO GET COMPANY FORM OR LEFT TO GET PROFESSORS FORM</small></div>
                              
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <input  type="text" style="width: 100%" class="search_iput" name="name" value="{{ old('name') }}"  autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <input  type="email" style="width: 100%" class="search_iput" name="email" value="{{ old('email') }}" >

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  type="password" style="width: 100%" class="search_iput" name="password" >

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  placeholder=" Reapet Password" style="width:100%" type="password" class="search_iput" name="password_confirmation" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-phone-square"></i>
                                            </div>
                                            <input  placeholder=" PHONE" type="text" style="width:100%" class="search_iput" name="phone" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <select class="search_iput" style="width:100%" name="st_fac_name">
                                                <option selected disabled> SELECET YOUR FACULTY.</option>
                                                @foreach($facs as $fac)
                                                    <option value="{{$fac->id}}">
                                                        {{$fac->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <select class="search_iput" style="width:100%" name="st_fac_dept">
                                                <option selected disabled> SELECET YOUR DEPARTMENT.</option>
                                                @foreach($deps as $dep)
                                                    <option value="{{$dep->id}}">
                                                        {{$dep->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                <small><strong>ALEARDY HAVE ACCOUNT</strong></small>
                                            </a>
                                        </div>
                                    </div>
                               
                          </div>
                           <div class="swiper-slide">
                            <div class="panel-heading"><i class="fas fa-plus-square"></i> <b> As COMPANY?</b>
                             <small style="display: block;color: #e74c3c;">SWAP LEFT TO GET STUDENTS FORM</small></div>
                                
                                    

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <input  type="text" style="width: 100%" class="search_iput" name="name" value="{{ old('name') }}"  autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <input  type="email" style="width: 100%" class="search_iput" name="email" value="{{ old('email') }}" >

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  type="password" style="width: 100%" class="search_iput" name="password" >

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-key"></i>
                                            </div>
                                            <input  placeholder=" Reapet Password" style="width:100%" type="password" class="search_iput" name="password_confirmation" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="absoluteRightTop text-right">
                                                <i class="fas fa-phone-square"></i>
                                            </div>
                                            <input  placeholder=" PHONE" type="text" style="width:100%" class="search_iput" name="phone" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <textarea  placeholder=" Description" type="text" style="width:100%" class="search_iput" name="desc" ></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <input  placeholder=" Address" type="text" style="width:100%" class="search_iput" name="Address" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                <small><strong>ALEARDY HAVE ACCOUNT</strong></small>
                                            </a>
                                        </div>
                                    </div>
                                
                          </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
