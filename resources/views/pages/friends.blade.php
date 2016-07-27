@extends('layout')
@section('content')
        <div class="container">
            <div class="content">
                <div class="title">	All friends here</div>
					@foreach($friends as $friend)
						<p><strong>ID</strong>  {{ $friend->rogue_id }} | <strong>Request</strong>  {{ $friend->request_status }}</p>
					@endforeach
            </div>
        </div>
@stop