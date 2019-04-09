@extends('layouts.app')

@section('content')
    <div class="_sec_navbar">
    	<div class="_navbar_input_search">
    		<form method="POST" >
    			@csrf
    			<input type="text" name="q" class="search_iput">
    			<button type="submit" class="_search_submit"><i class="fa fa-search"></i></button>
    		</form>
    	</div>
    </div>
    <div class="Content">
    	<div class="_content_padd_5">
    	<div class="_Left_side">
    		<div class="_con_card">
    			<h4> <i class="far fa-newspaper"></i> RECENT FACULTIES</h4>
	    		<div class="hr"></div>
	    		<div class="_fac_details">
	    			<div class="_details_right">
	    				<img src="{{url('/')}}/img/fcih.jpg" class="_details_right_img">
	    			</div>
	    			<div class="_details_left">
	    				<p><b>Faculty of Computer And Information</b></p>
	    				<p>25 Project, 110 Student, 25 Profs.</p>
	    			</div>

	    		</div>
	    		<br>
	    		<div class="_fac_details">
	    			<div class="_details_right">
	    				<img src="{{url('/')}}/img/fcih.jpg" class="_details_right_img">
	    			</div>
	    			<div class="_details_left">
	    				<p><b>Faculty of Computer And Information</b></p>
	    				<p>25 Project, 110 Student, 25 Profs.</p>
	    			</div>

	    		</div>
	    		<br>
	    		<div class="_fac_details">
	    			<div class="_details_right">
	    				<img src="{{url('/')}}/img/fcih.jpg" class="_details_right_img">
	    			</div>
	    			<div class="_details_left">
	    				<p><b>Faculty of Computer And Information</b></p>
	    				<p>25 Project, 110 Student, 25 Profs.</p>
	    			</div>

	    		</div>
    		</div>
    		<br>
    		<div class="_con_card">
    			<h4> <i class="far fa-newspaper"></i> RECENT PROJECTS</h4>
	    		<div class="hr"></div>
	    		<div class="_fac_details">
	    			<div class="_details_right">
	    				<img src="{{url('/')}}/img/fcih.jpg" class="_details_right_img">
	    			</div>
	    			<div class="_details_left">
	    				<p><b>Graduation Project Managment</b></p>
	    				<p>1 mins ago.</p>
	    			</div>

	    		</div>
    		</div>
    		<br>
    		<div class="_con_card">
    			<h4><i class="far fa-newspaper"></i> RECENT COMPANIES</h4>
	    		<div class="hr"></div>
	    		<div class="_fac_details">
	    			<div class="_details_right">
	    				<img src="{{url('/')}}/img/fcih.jpg" class="_details_right_img">
	    			</div>
	    			<div class="_details_left">
	    				<p><b>MICROSOFT EGYPT COMPANY</b></p>
	    				<p>0 Projects.</p>
	    			</div>

	    		</div>
    		</div>
    	</div>
    	<div class="_Center_side">
    		<div class="_con_card">
    			<div class="_card_social_card">
    				<div class="social_card_img">
    					<img  src="{{url('/')}}/img/fcih.jpg"/>
    				</div>
    				<div class="social_card_Content">
    					<p><b>AHMED WAEL</b></p>
    					<small><i class="far fa-clock"></i> 14Feb,2019 10:12:44 PM</small>
    					<small><i class="fas fa-map-marker"></i> FCIH STUDENT</small>
    					
    				</div>
    				
    			</div>
    		</div>
    	</div>
    	<div class="_Right_side">
    		<div class="_con_card">
    			<h4> <i class="far fa-newspaper"></i> RELATIONED WITH YOU</h4>
	    		<div class="hr"></div>
	    		<div class="_fac_details">
	    			<div class="_details_right">
	    				<img src="{{url('/')}}/img/fcih.jpg" class="_details_right_img">
	    			</div>
	    			<div class="_details_left">
	    				<p><b>Faculty of Computer And Information</b></p>
	    				<p>25 Project, 110 Student, 25 Profs.</p>
	    			</div>

	    		</div>
	    		<br>
	    	</div>
    	</div>
    </div>
    
@endsection
