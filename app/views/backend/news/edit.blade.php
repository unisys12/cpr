@extends('templates.admin')

@section('title')
Edit a Announcement
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Edit Announcement</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Announcements</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.news.create') }}">New Announcement</a></li>
		</ul>
	</nav>
@stop

@section('content')

	<p class="message">
		Edit the following Announcement, then click the "Save Edits" button below. To cancel, just click your browsers back button.
	</p>
	@include('partials.errors')
	
	@foreach ($news as $item)
	{{ Form::open(['route' => ['backend.news.update', $item->slug], 'method' => 'put']) }}
	
	{{ Form::label('title', 'Give a Title to Your Page') }}
	{{ Form::text('title', $item->title) }}

	{{ Form::label('header', 'Give the New Page a Header') }}
	{{ Form::text('header', $item->header) }}

	{{ Form::label('content', 'Insert the Content of Your New Page') }}
	{{ Form::textarea('content', $item->content) }}

	@endforeach
	{{ Form::submit('Save Edits') }}

	{{ Form::close() }}

@stop