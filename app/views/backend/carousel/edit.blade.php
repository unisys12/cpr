@extends('templates.admin')

@section('title')
Edit Your Image Carousel
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Edit the Image Carousel of Your Site</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Carousel</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="/backend/carousel/create">New Page</a></li>
		</ul>
	</nav>
@stop

@section('content')

	<div class="small-12 large-8 columns">
		<p>
			Edit the following page, then click the "Save Edits" button below. To cancel, just click your browsers back button.
		</p>
		@include('partials.errors')

		@foreach($carousel as $item)
		{{ Form::open(['url' => 'backend/carousel/' . $item->slug, 'method' => 'put', 'files' => true]) }}

		{{ Form::label('title', 'Give your carousel a title. This will allow you to reuse it in the future.') }}
		{{ Form::text('title', $item->title) }}

		{{ Form::label('description', 'Describe this grouping of images') }}
		{{ Form::text('description', $item->description) }}

		<hr>
		
		{{ Form::label('image_1', 'Choose the First Image to Display') }}
		{{ Form::file('image_1', ['required' => true]) }}
		{{ Form::text('image_1_description', $item->image_1_description) }}

		{{ Form::label('image_2', 'Choose the Second Image to Display') }}
		{{ Form::file('image_2', ['required' => true]) }}
		{{ Form::text('image_2_description', $item->image_2_description) }}

		{{ Form::label('image_3', 'Choose the Third Image to Display') }}
		{{ Form::file('image_3', ['required' => true]) }}
		{{ Form::text('image_3_description', $item->image_3_description) }}

		{{ Form::submit('Save Edits') }}
		@endforeach

		{{ Form::close() }}

@stop