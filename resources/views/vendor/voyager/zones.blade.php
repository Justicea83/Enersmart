@extends('voyager::master')

@section('page_title','zone')

@section('content')
<div class="container">
	@include('../../includes.errorbag');
	<div class="col-md-8 col-md-offset-2">
		<form action="{{ route('zones.create') }}" method="post">
	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">Region Name</label>
				<select name="region-name" id="selectRegion" class="form-control">
					@foreach($regions as $region)
                    <option class="region-id" value="{{$region->id}}" data-regionID="{{$region->id}}">{{$region->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">District Name</label>
				<select name="district-name" id="selectDistrict" class="form-control">
					
				</select>
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			
			<div class="col-md-12">
				<label class="control-label">Block Code</label>
				<select name="block-name" id="blockId" name="block-number" class="form-control">
					
				</select>
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			<div class="col-md-12">
				<label class="control-label">Round Code</label>
				<select name="round-name" id="roundId" class="form-control">
					
				</select>
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			<div class="col-md-12">
				<label class="control-label">Plot Code</label>
				<select name="plot-code" id="plotId"  class="form-control">
					
				</select>
		</div>
	</div>

	<button type="submit" class="btn btn-success">Create Zone</button>
	{{ csrf_field() }}
</form>
	<p class="lead" id="form-data"></p>
	</div>
	
</div>
@stop
@section('javascript')
	<script src="{{asset('/js/app.js')}}"></script>
@stop


