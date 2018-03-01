@extends('voyager::master')

@section('page_title','notifications')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				@foreach(auth()->user()->unreadNotifications as $notify)
					{{ $notify->data }}
					
				@endforeach
			</div>
		</div>
	</div>
@stop


