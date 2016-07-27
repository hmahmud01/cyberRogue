@extends('layout')
@section('content')
        <div class="container">
            <div class="content">
                <div class="title">	All rogues here</div>
	                @foreach($rogues as $rogue)
	                	<p><strong>Name:</strong> {{ $rogue->name }} | <strong>Nick</strong> {{ $rogue->gaming_nick }}</p>
	                @endforeach
            </div>
        </div>
@stop