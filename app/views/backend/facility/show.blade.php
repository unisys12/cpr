@extends('templates.admin')

@section('title')
Preview Facility
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Preview Facility</h5>
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
		@foreach($facilites as $facility)
		<h2>{{ $facility->name }}</h2>
		<p>{{ $facility->description }}</p>
		<figure>
			<img src="{{ asset($facility->image_1) }}" alt="{{ $facility->image_1_description }}">
			<figcaption>{{ $facility->image_1_description }}</figcaption>
		</figure>
		<figure>
			<img src="{{ asset($facility->image_2) }}" alt="{{ $facility->image_2_description }}">
			<figcaption>{{ $facility->image_2_description }}</figcaption>
		</figure>
		@endforeach
	</div>
@stop