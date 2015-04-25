@extends('templates.admin')

@section('header')
	<div class="small-6 columns">
		<h5>Create a New Carousel</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Image Carousel</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.carousel.index') }}">Carousel Home</a></li>
			<li><a href="/backend/carousel/create">New Carousel</a></li>
		</ul>
	</nav>
@stop

@section('content')
<section class="large-8 small-centered large-uncentered columns">
	
	<article class="carousel">
	@foreach($carousel as $image)
	<h2>{{ $image->title }}</h2>
	<p>{{ $image->description }}</p>
		<figure class="image img-one">
			<img src="http://corinthparks.s3.amazonaws.com/{{ image_1 }}" alt="{{ $image->image_1_description }}" />
			<figcaption>{{ $image->image_1_description }}</figcaption>
		</figure>
		<figure class="image img-two">
			<img src="http://corinthparks.s3.amazonaws.com/{{ $image->image_2 }}" alt="{{ $image->image_2_description }}" />
			<figcaption>{{ $image->image_2_description }}</figcaption>
		</figure>
		<figure class="image img-three">
			<img src="http://corinthparks.s3.amazonaws.com/{{ $image->image_3 }}" alt="{{ $image->image_3_description }}" />
			<figcaption>{{ $image->image_3_description }}</figcaption>
		</figure>
	@endforeach
	</article>

</section>
@stop