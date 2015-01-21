@extends('templates.admin')

@section('title')
Add New Page
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Create a New Page</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Pages</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="/backend/pages/create">New Page</a></li>
		</ul>
	</nav>
@stop

@section('content')
	<div class="small-12 large-8 columns">
	@include('partials.errors')
		{{ Form::open(['route' => 'page.store']) }}
		
		{{ Form::label('title', 'Give a Title to Your Page') }}
		{{ Form::text('title') }}

		{{ Form::label('header', 'Give the New Page a Header') }}
		{{ Form::text('header') }}

		{{ Form::label('content', 'Insert the Content of Your New Page') }}
		{{ Form::textarea('content') }}

		{{ Form::submit('Create New Page') }}

		{{ Form::close() }}
	</div>
@stop