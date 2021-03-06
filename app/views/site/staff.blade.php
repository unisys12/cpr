@extends('templates.site')

@section('title')
Contact Information
@stop

@section('content')

@foreach($staff as $member)	
	<section class="row">
		<figure class="large-8 columns right">
			<img src="http://corinthparks.s3.amazonaws.com/{{ $member->image }}" alt="{{ $member->name }}">
		</figure>
		<div class="large-4 columns">
			<h4>{{ $member->name }}</h4>
			<p>{{ $member->title }}</p>
			<a href="mailto::{{ $member->email }}">{{ $member->email }}</a>
		</div>
	</section>
	<section class="row">			
		<div class="large-12 columns">{{ $member->summary }}</div>
	</section>
	<br>
	<hr>
	<br>
@endforeach

@stop
