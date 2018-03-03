@extends('voyager::master')

@section('page_title','survey - blocks')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default" id="panel">
			<div class="panel-heading">
				<h3 class="text-center plot-heading">Plot {{ $details->name }}</h3>
			</div>
			<div class="panel-body">
				<table class="table table-responsive table-striped">
					<thead>
						<tr class="color-data-header">
							<th>Region Name</th>
							<th>District Name</th>
							<th>Block Name</th>
							<th>Round Name</th>
						</tr>
					</thead>
					<tbody>
						<tr class="color-data">
							<td class="text-center">{{$region->region->name}}</td>
							<td class="text-center">{{ $district->district->name }}</td>
							<td class="text-center">{{ $block->block->name }}</td>
							<td class="text-center">{{ $round->round->name }}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="panel-footer">
				<button class="btn btn-info btn-block">Assign</button>
			</div>
		</div>
		</div>
		
	</div>
</div>
@stop
@section('javascript')
	<script src="{{asset('/js/app.js')}}"></script>
@stop

