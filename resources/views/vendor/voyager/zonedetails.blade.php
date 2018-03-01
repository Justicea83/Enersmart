@extends('voyager::master')

@section('page_title','survey')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@stop
@section('content')
<div class="container">
	<div class="row">
		
		<div class="col-xs-12 col-md-8 col-md-offset-2" id="ZoneContainer">
			<h3 class="text-center zone-header">{{ $details->district_name }} district</h3>
			<div class="well well-lg hidden-xs">
				<table class="table table-striped">
				<tbody>
					<tr>
						<td>District number</td>
						<td class="colon">:</td>
						<td>{{$details->district_number}}</td>
					</tr>
					<tr>
						<td>Block number</td>
						<td class="colon">:</td>
						<td>{{$details->block_number}}</td>
					</tr>
					<tr>
						<td>Round number</td>
						<td class="colon">:</td>
						<td>{{$details->round_number}}</td>
					</tr>
					<tr>
						<td>Plot number</td>
						<td class="colon">:</td>
						<td>{{$details->plot_number}}</td>
					</tr>
					<tr>
						<td>Plot Code</td>
						<td class="colon">:</td>
						<td>{{$details->plot}}</td>
					</tr>
				</tbody>
			</table>
			</div>
			<table class="table table-striped hidden-sm hidden-md hidden-lg">
				<tbody>
					<tr>
						<td>District number</td>
						<td class="colon">:</td>
						<td>{{$details->district_number}}</td>
					</tr>
					<tr>
						<td>Block number</td>
						<td class="colon">:</td>
						<td>{{$details->block_number}}</td>
					</tr>
					<tr>
						<td>Round number</td>
						<td class="colon">:</td>
						<td>{{$details->round_number}}</td>
					</tr>
					<tr>
						<td>Plot number</td>
						<td class="colon">:</td>
						<td>{{$details->plot_number}}</td>
					</tr>
					<tr>
						<td>Plot Code</td>
						<td class="colon">:</td>
						<td>{{$details->plot}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		
	</div>
</div>
@stop
@section('javascript')
	
	<script src="{{asset('/js/app.js')}}"></script>
@stop

