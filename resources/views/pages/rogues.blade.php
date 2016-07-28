@extends('layout')
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>All rogues here</h1>
		<ul class="list-group">
		    @foreach($rogues as $rogue)	        
		            <li class="list-group-item"><strong>Name:</strong><a href="{{ $rogue->path() }}"> {{ $rogue->name }} </a>| <strong>Nick</strong> {{ $rogue->gaming_nick }}</li>
		        	                	
		    @endforeach		
	    </ul>

	    <hr>

	    <h1>Add a Rogue</h1>

	    <form>
	    <div class="form-group">
	    	<input type="text" name="name" class="form-control">
	    </div>
	   	<div class="form-group">	    	
	    	<button class="btn btn-primary" type="submit">Add</button>
	    </div>
	    </form>
	</div>    
</div>
@stop