@extends('templates.admin')

@section('sub-menu')
	<header>
		<h4>Image Carousel</h4>
	</header>
	<nav>
		<ul>
			<li><a href="{{ route('backend.carousel.index') }}">Carousel Home</a></li>
			<li><a href="/backend/carousel/create">New Carousel</a></li>
		</ul>
	</nav>
@stop

@section('content')
	@if(!$carousel->count())
		<h5>There have been no carousels created for your site yet</h5>
	@endif

	<ul>
	@foreach ($carousel as $example)
		<li>
			<a href="/backend/carousel/{{ $example->title }}">{{ $example->title }}</a> - {{ $example->description }}
		</li>
	@endforeach
	</ul>

@stop