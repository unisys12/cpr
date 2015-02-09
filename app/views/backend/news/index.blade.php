@extends('templates.admin')

@section('sub-menu')
	<header>
		<h4>News and Annoucements</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.news.index') }}">Home</a></li>
			<li><a href="{{ route('backend.news.create') }}">New Announcement</a></li>
		</ul>
	</nav>
@stop

@section('content')
	@if(!$news->count())
		<h5>There have been no Annoucements made for your site yet!</h5>
	@endif

	<ul>
	@foreach ($news as $news)
		<li>
			<a href="/backend/news/{{ $news->slug }}">{{ $news->title }}</a> - <a href="/backend/news/{{ $news->slug }}/edit">Edit</a>
			{{ Form::open(['route' => ['backend.news.destroy', $news->slug], 'method' => 'DELETE']) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</li>
	@endforeach
	</ul>

@stop