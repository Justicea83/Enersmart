@extends('voyager::master')

@section('page_title','Plot Details')

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
				<button class="btn btn-info btn-block" data-toggle="modal" data-target="#assign">Assign</button>
			</div>
		</div>
		</div>
		
	</div>
	<div class="modal" id="assign" tabindex="-1" aria-labelledby="modalLabel" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h3 class="text-center modal-title" id="modalLabel">Choose People to assign the plot</h3>
				</div>
				<div class="modal-body">
					<table id="selection-table" class="table table-striped table-responsive">
						<thead>
							<tr>
								<th></th>
								<th>Name</th>
								<th>E-mail</th>
								<th>Role</th>
							</tr>
						</thead>
						<tbody>
							@foreach($subs as $sub)
							<tr data-id="{{ $sub->id }}">
								<td class="text-center">
									<input id="selected" type="checkbox" name="">
								</td>
								<td>{{ $sub->name }}</td>
								<td>{{$sub->email}}</td>
								<td>{{ $subId->display_name }}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<buttton class="btn btn-info" style="float: right;">Assign</buttton>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('javascript')
	<script src="{{asset('/js/app.js')}}"></script>
@stop

