@extends('templates.admin')

@section('sub-menu')
	<header>
		<h4>Pages</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('page.index') }}">Home</a></li>
			<li><a href="/backend/pages/create">New Page</a></li>
		</ul>
	</nav>
@stop

@section('content')
	@if(!$pages->count())
		<h5>There have been no pages created for your site yet</h5>
	@endif

	<ul>
	@foreach ($pages as $page)
		<li>
			<a href="/backend/pages/{{ $page->slug }}">{{ $page->title }}</a> - <a href="/backend/pages/{{ $page->slug }}/edit">Edit</a>
		</li>
	@endforeach
	</ul>

@stop