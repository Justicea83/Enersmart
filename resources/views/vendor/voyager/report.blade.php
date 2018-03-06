@extends('voyager::master')

@section('page_title','report')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@stop
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h3 class="text-center">ENERSMART PREPAYMENT PROJECT </h3>
		<form method="post" action="{{ route('user.reports.save') }}">
			<div class="form-group {{ $errors->has('customer_name') ? ' has-error' : '' }}" >
				<label class="control-label">Customer Name</label>
				<input class="form-control" type="text" name="customer_name" placeholder="Enter Customer Name">
				@if($errors->has('customer_name'))
				<span class="help-block">{{$errors->first('customer_name')}}</span>
				@endif
			</div>
			<div class="form-group {{ $errors->has('meter_number') ? ' has-error' : '' }}">
				<label class="control-label">Meter Number</label>
				<input class="form-control" type="text" name="meter_number" placeholder="Enter Meter Number">
				@if($errors->has('meter_number'))
				<span class="help-block">{{$errors->first('meter_number')}}</span>
				@endif
			</div>
			<div class="form-group {{ $errors->has('geo_code') ? ' has-error' : '' }}">
				<label class="control-label">Geo Code</label>
				<input class="form-control" type="text" name="geo_code" placeholder="Enter Geo Code">
				@if($errors->has('geo_code'))
				<span class="help-block">{{$errors->first('geo_code')}}</span>
				@endif
			</div>
			<div class="form-group {{ $errors->has('new_geo_code') ? ' has-error' : '' }}">
				<label class="control-label">New Geo Code</label>
				<input class="form-control" type="text" name="new_geo_code" placeholder="Enter New Geo Code">
				@if($errors->has('new_geo_code'))
				<span class="help-block">{{$errors->first('new_geo_code')}}</span>
				@endif
			</div>
			<div class="form-group {{ $errors->has('nearby_code') ? ' has-error' : '' }}">
				<label class="control-label">Nearby Code</label>
				<input class="form-control" type="text" name="nearby_code" placeholder="Enter Nearby Code">
				@if($errors->has('nearby_code'))
				<span class="help-block">{{$errors->first('nearby_code')}}</span>
				@endif
			</div>
			<div class="form-group {{ $errors->has('tarrif') ? ' has-error' : '' }}">
				<label class="control-label">Tariff Class</label>
				<input class="form-control" type="text" name="tarrif" placeholder="Enter Tariff Class">
				@if($errors->has('tarrif'))
				<span class="help-block">{{$errors->first('tarrif')}}</span>
				@endif
			</div>
			<div class="form-group {{ $errors->has('remarks') ? ' has-error' : '' }}">
				<label class="control-label">Remarks</label>
				<textarea class="form-control" name="remarks" placeholder="Enter remarks"></textarea>
				@if($errors->has('remarks'))
				<span class="help-block">{{$errors->first('remarks')}}</span>
				@endif
			</div>
			<button type="submit" class="btn btn-info" style="float: right;">Submit</button>
			{{ csrf_field() }}
		</form>
		<br>
		<br>
		<a href="{{ route('user.reports.return') }}"><button class="btn btn-info btn-block">View Daily Report</button></a>
	</div>
</div>
@stop
@section('javascript')

<script src="{{asset('/js/app.js')}}"></script>
@stop

