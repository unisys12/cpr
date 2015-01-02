@extends('templates.admin')

@section('title')
Set-Up a New Facility
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Set-Up a New Facility</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Faclities</h4>
	</header>
	<nav>
		<ul>
			<li><a href=" {{ route('backend.facility.index') }} ">Facilities Home</a></li>
			<li><a href="{{ route('backend.facility.create') }}">Add a New Facility</a></li>
		</ul>
	</nav>
@stop

@section('content')
	<div class="small-12 large-8 columns">
		<p class="panel radius">
			Use this form to add a new facility to the site. Images will not be resized. Be as in-depth as possible with the description of the facility being added. Remeber, this information will appear on the website. 
		</p>
		{{ Form::open(['route' => 'backend.facility.store', 'files' => true)]) }}

		{{ Form::label('name', 'Facility Name') }}
		{{ Form::text('name') }}

		{{ Form::label('description', 'Give a Description of this Facility.') }}
		{{ Form::text('description') }}

		{{ Form::label('image_1', 'Choose the First Image to Display') }}
		{{ Form::file('image_1', ['required' => true]) }}
		{{ Form::text('image_1_description', null, ['placeholder' => 'Give your image a description']) }}

		{{ Form::label('image_2', 'Choose the Second Image to Display') }}
		{{ Form::file('image_2', ['required' => true]) }}
		{{ Form::text('image_2_description', null, ['placeholder' => 'Give your image a description']) }}

		{{ Form::submit('Add a New Facility') }}

		{{ Form::close() }}
	</div>
@stop