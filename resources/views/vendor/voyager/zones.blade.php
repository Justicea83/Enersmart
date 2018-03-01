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
				<input type="text" class="form-control" name="region-name" placeholder="Region name">
			</div>
			<div class="col-md-6">
				<label class="control-label">Region Code</label>
				<input type="number" class="form-control" name="region-number" placeholder="Region number">
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">District Name</label>
				<input type="text" class="form-control" name="district-name" placeholder="District name">
			</div>
			<div class="col-md-6">
				<label class="control-label">District Code</label>
				<input type="number" class="form-control" name="district-number" placeholder="District number">
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			
			<div class="col-md-12">
				<label class="control-label">Block Code</label>
				<input type="number" class="form-control" name="block-number" placeholder="Block number">
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			<div class="col-md-12">
				<label class="control-label">Round Code</label>
				<input type="number" class="form-control" name="round-number" placeholder="Round number">
			</div>
		</div>
	</div>

		<div class="form-group">
		<div class="row">
			<div class="col-md-12">
				<label class="control-label">Plot Code</label>
				<input type="number" class="form-control" name="plot-number" placeholder="Plot number">
			</div>
		</div>
	</div>

	<button type="submit" class="btn btn-success">Create Zone</button>
	{{ csrf_field() }}
</form>
	<p class="lead" id="form-data"></p>
	</div>
	
</div>
@stop


