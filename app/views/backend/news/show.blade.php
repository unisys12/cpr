@extends('templates.admin')

@section('sub-menu')
	<header class="call-out">
		<h4>Announcements</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.news.create') }}">New Announcement</a></li>
			@foreach($news as $item)
			<li><a href="/backend/news/{{ $item->slug }}/edit">Edit This Announcement</a></li>
			@endforeach
		</ul>
	</nav>
@stop

@section('content')
	
	@foreach($news as $item)	
		<p>{{ $item->title }}</p>
		<h4>{{ $item->header }}</h4>
		<p>{{ $item->content }}</p>
	@endforeach

@stop