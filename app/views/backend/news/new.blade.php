@extends('templates.admin')

@section('title')
Add New Announcement
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Create a New Announcement</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>News and Announcements</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.news.index') }}">News and Annoucements Home</a></li>
		</ul>
	</nav>
@stop

@section('content')

	@include('partials.errors')
		{{ Form::open(['route' => 'backend.news.store']) }}
		
		{{ Form::label('title', 'Give a Title to Your Announcement') }}
		{{ Form::text('title') }}

		{{ Form::label('header', 'Give the New Announcement a Header') }}
		{{ Form::text('header') }}

		{{ Form::label('content', 'Insert the Content of Your New Announcement') }}
		{{ Form::textarea('content') }}

		{{ Form::submit('Create New Announcement') }}

		{{ Form::close() }}

@stop