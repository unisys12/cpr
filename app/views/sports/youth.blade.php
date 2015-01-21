@extends('templates.site')

@section('title')
Youth Sports
@stop

@section('content')
<h1>Youth Sports</h1>
<p>Youth Sports offered through Corinth/Alcorn County Parks &amp; Recreation Department include:</p>
<ul class="sports_list">
	<li><h4>Tee Ball for boys and girls</h4></li>
	<li><h4>Coach Pitch Baseball for 6 years olds and 7-8 year olds</h4></li>
	<li><h4>Youth Baseball for 9-10 and 11-12 year olds</h4></li>
	<li><h4>Youth Baseball for 13-15 year olds</h4></li>
	<li><h4>Coach Pitch Softball for 6U and 8U</h4></li>
	<li><h4>Fast Pitch Softball for 10U and 12U</h4></li>
	<li><h4>Alcorn County Youth Football offering tackle football for 5-12</h4></li>

</ul>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop