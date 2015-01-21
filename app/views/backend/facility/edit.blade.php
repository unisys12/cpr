@extends('templates.admin')

@section('title')
Edit a Existing Facility
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Edit an Existing Facility</h5>
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
	<div class="small-12 large-8 columns">
		<p class="message">
			Edit the following page, then click the "Save Edits" button below. To cancel, just click your browsers back button.
		</p>
		{{ Form::open(['route' => 'backend.facility.update', 'method' => 'put']) }}
		@foreach ($facilities as $facility)
		
		{{ Form::label('name', 'Facility Name') }}
		{{ Form::text('name', $facility->name) }}

		{{ Form::label('description', 'Describe this Facility') }}
		{{ Form::text('description', $facility->description) }}

		{{ Form::label('image_1', 'Choose the First Image to Display') }}
		{{ Form::file('image_1', ['required' => true]) }}
		{{ Form::text('image_1_description', $facility->image_1_description) }}

		{{ Form::label('image_2', 'Choose the Second Image to Display') }}
		{{ Form::file('image_2', ['required' => true]) }}
		{{ Form::text('image_2_description', $facility->image_2_description) }}

		@endforeach
		{{ Form::submit('Save Edits') }}

		{{ Form::close() }}
	</div>
@stop