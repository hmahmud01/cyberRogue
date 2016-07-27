@extends('layout')
@section('content')
        <div class="container">
            <div class="content">
                <div class="title">	All games here</div>
                	@foreach($games as $game)
						<p><strong>Name</strong>  {{ $game->name }} | <strong>Score</strong>  {{ $game->score }}</p>
					@endforeach
            </div>
        </div>
@stop