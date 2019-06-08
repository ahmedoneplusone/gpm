@extends('layouts.app')

@section('content')
<div class="row" style="padding-left:15px;padding-right: 15px">
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
		<div class="_con_card" style="height: 250px;">
    				<h1 class="h1_optimzed"> <i class="fas fa-bell"></i> <b>Personal Data</b>
    					<a href="#" style="color:#3498db;float:right;padding-right:15px;cursor:pointer" data-toggle="tooltip" data-placement="right" title="Edit Personal Data !"><i class="fas fa-edit" ></i></a>
    				</h1>
    				<hr>
    				<div class="Content-Li">
    					<p><b><i class="fas fa-signature" style="font-size: 12px;margin-left:5px;"></i> Name</b> : {{auth()->user()->name}}</p>
    					<p><b><i class="fas fa-envelope" style="font-size: 12px;margin-left:5px;"></i> Email</b> : {{auth()->user()->email}}</p>
    					<p> <b><i class="fas fa-phone" style="font-size: 12px;margin-left:5px;"></i> Phone </b>: {{auth()->user()->phone}}</p>
    				</div>
    			</div>
    			<br>
    	<div class="_con_card" style="height: 250px;">
    				<h1 class="h1_optimzed"> <i class="fas fa-bell"></i> <b>Faculty Data</b>
    					<a href="#" style="color:#3498db;float:right;padding-right:15px;cursor:pointer" data-toggle="tooltip" data-placement="right" title="Edit Personal Data !"><i class="fas fa-edit" ></i></a>
    				</h1>
    				<hr>
    				<div class="Content-Li">
    					<p><b><i class="fas fa-copyright" style="font-size: 12px;margin-left:5px;"></i> Little Name</b> : {{$faculty->little_name}}</p>
    					<p><b><i class="fas fa-layer-group" style="font-size: 12px;margin-left:5px;"></i> Sub Domain</b> : {{$faculty->sub_domain}}</p>
    					<p> <b><i class="fas fa-copy" style="font-size: 12px;margin-left:5px;"></i> Summary </b>: {{$faculty->summary}}</p>
    				</div>
    			</div>
    				<br>
    	<div class="_con_card" style="height: 250px;">
    				<h1 class="h1_optimzed"> <i class="fas fa-bell"></i> <b>Faculty Departments</b>
    					<a href="#" style="color:#3498db;float:right;padding-right:15px;cursor:pointer" data-toggle="tooltip" data-placement="right" title="Edit Personal Data !"><i class="fas fa-edit" ></i></a>
    				</h1>
    				<hr>
    				
    				<div class="Content-Li">
    					<p><b><i class="fas fa-copyright" style="font-size: 12px;margin-left:5px;"></i> Little Name</b> : {{$faculty->little_name}}</p>
    				</div>
    			</div>
    			
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();   
		});
</script>
@endsection