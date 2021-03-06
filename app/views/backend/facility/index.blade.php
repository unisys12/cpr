@extends('templates.admin')

@section('title')
Existing Facilities
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Existing Facilities</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Faclities</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href=" {{ route('backend.facility.index') }} ">Facilities Home</a></li>
			<li><a href="{{ route('backend.facility.create') }}">Add a New Facility</a></li>
		</ul>
	</nav>
@stop

@section('content')
	@if(!$facilities->count())
		<h5>There have been no facilities created for your site yet</h5>
	@endif

	<ul>
	@foreach ($facilities as $facility)
		<li>
			<a href="/backend/facility/{{ $facility->slug }}">{{ $facility->name }}</a> - <a href="/backend/facility/{{ $facility->slug }}/edit">Edit</a>
			{{ Form::open(['route' => ['backend.facility.destroy', $facility->slug], 'method' => 'DELETE']) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</li>
	@endforeach
	</ul>
@stop
