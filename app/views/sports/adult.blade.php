@extends('templates.site')

@section('title')
Adult Sports
@stop

@section('content')
<h1>Adult Sports</h1>
<p>The Corinth/Alcorn County Parks &amp; Recreation Department offers many sports for adults that are designed to provide a means for recreation, while at the same time remaining safe and competitive.</p>
<ul class="sports_list">
	<li>
		<h4>Spring/Summer Adult Softball leagues consisting of Seniors, Women, CoEd, Church, and Open Leagues</h4>
	</li>
	<li>
		<h4>Fall Adult softball leagues consisting of Seniors, Women and Opens League</h4>
	</li>
</ul>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop