@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>All friends here</h1>
			<ul class="list-group">
				@foreach($friends as $friend)				
					<li class="list-group-item"><strong>ID</strong>  <a href="{{ $friend->path() }}">{{ $friend->rogue_id }}</a> | <strong>Request</strong>  {{ $friend->request_status }}</li>
				@endforeach	
			</ul>		
		</div>
	</div>
@stop