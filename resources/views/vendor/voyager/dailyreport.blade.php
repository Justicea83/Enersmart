@extends('voyager::master')

@section('page_title','Daily-Report')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('/datatables/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@stop
@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table id="manageBrandTable" class="table table-responsive table-striped">
			<thead>
				<tr class="align">
					<th>Customer Name</th>
					<th>Meter No</th>
					<th>Geo Code</th>
					<th>New Geo Code</th>
					<th>Nearby Code</th>
					<th>Tariff class</th>
					<th>Remarks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($reports as $report)
				<tr>
					<td>{{ $report->customer_name }}</td>
					<td>{{ $report->meter_no }}</td>
					<td>{{ $report->geo_code }}</td>
					<td>{{ $report->new_geo_code }}</td>
					<td>{{ $report->nearby_code }}</td>
					<td>{{ $report->tarrif }}</td>
					<td>{{ $report->remarks }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop
@section('javascript')
<script src="{{ asset('/datatables/datatables.min.js') }}"></script>
<script src="{{asset('/js/app.js')}}"></script>
@stop

