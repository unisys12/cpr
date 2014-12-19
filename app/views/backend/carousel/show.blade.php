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
	<nav>
		<ul>
			<li><a href="{{ route('backend.carousel.index') }}">Carousel Home</a></li>
			<li><a href="/backend/carousel/create">New Carousel</a></li>
		</ul>
	</nav>
@stop

@section('content')
@include('partials.carousel')
@stop