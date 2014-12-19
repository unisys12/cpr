@extends('templates.admin')

@section('title')
Create a New Carousel
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Create a New Carousel</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Carousel</h4>
	</header>
	<nav>
		<ul>
			<li><a href="{{ route('backend.carousel.index') }}">Carousel Home</a></li>
			<li><a href="/backend/carousel/create">New Carousel</a></li>
		</ul>
	</nav>
@stop

@section('content')
	<div class="small-12 large-8 columns">
		<p class="panel radius">For the carosel to work properly, the images will be limited to a size of <i>640x426</i>. This form will not allow you to upload any images who's width and/or height does not meet these requirements.</p>
		{{ Form::open(['route' => 'backend.carousel.store', 'files' => true]) }}

		{{ Form::label('title', 'Give your carousel a title. This will allow you to reuse it in the future.') }}
		{{ Form::text('title') }}

		{{ Form::label('description', 'Describe this grouping of images') }}
		{{ Form::text('description') }}

		<hr>
		
		{{ Form::label('image_1', 'Choose the First Image to Display') }}
		{{ Form::file('image_1') }}
		{{ Form::text('image_1_description', null, ['placeholder' => 'Give your image a description']) }}

		{{ Form::label('image_2', 'Choose the Second Image to Display') }}
		{{ Form::file('image_2') }}
		{{ Form::text('image_2_description', null, ['placeholder' => 'Give your image a description']) }}

		{{ Form::label('image_3', 'Choose the Third Image to Display') }}
		{{ Form::file('image_3') }}
		{{ Form::text('image_3_description', null, ['placeholder' => 'Give your image a description']) }}

		{{ Form::submit('Create New Page') }}

		{{ Form::close() }}
	</div>
@stop