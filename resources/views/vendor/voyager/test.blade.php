@extends('voyager::master')

@section('page_title','Plot Details')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
@stop
@section('content')
<h1>notifications here  {{$id}}</h1>
@stop
@section('javascript')
	<script src="{{asset('/js/app.js')}}"></script>
@stop

