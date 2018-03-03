@extends('voyager::master')

@section('page_title','survey')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@stop
@section('content')
<div class="container">
	<div class="row">
		<h3 class="text-center zone-header">Districts Available</h3>
		<div class="col-xs-6 col-md-12 col-xs-offset-3 col-md-offset-0" id="ZoneContainer">
			
			@foreach($zones as $zone)
			<div class="widget-container">
				
				<img class="region-img" src="{{asset('/images/enersmart.jpg')}}" alt="enersmart image">
				<a href="{{ route('user.zones.block',['id'=>$zone->id]) }}" title=""><button class="btn btn-info positon-button"  title="Takes you to the Ayigya Zone">{{$zone->name}}</button></a>

			</div>
			@endforeach
		</div>
		
	</div>
</div>
@stop


