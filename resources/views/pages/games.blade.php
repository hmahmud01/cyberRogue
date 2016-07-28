@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>All games here</h1>
			<ul class="list-group">
				@foreach($games as $game)
					<li class="list-group-item">
					<strong>Name</strong><a href="{{ $game->path() }}"> {{ $game->name }} </a>| <strong>Score</strong>  {{ $game->score }}
				</li>
				@endforeach					
			</ul>		
		</div>
	</div>
@stop