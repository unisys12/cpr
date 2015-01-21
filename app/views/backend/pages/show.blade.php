@extends('templates.admin')

@section('sub-menu')
	<header class="call-out">
		<h4>Pages</h4>
	</header>
	<nav>
		<ul>
			<li><a href="/backend/pages/create">New Page</a></li>
		</ul>
	</nav>
@stop

@section('content')
	<div class="small-12 large-8 columns">	
		@foreach($page as $section)	
			<p>{{ $section->title }}</p>
			<h4>{{ $section->header }}</h4>
			<p>{{ $section->content }}</p>
		@endforeach
	</div>
@stop