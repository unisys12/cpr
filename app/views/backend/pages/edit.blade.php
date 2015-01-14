@extends('templates.admin')

@section('title')
Edit a Page
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Edit Page</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Pages</h4>
	</header>
	<nav>
		<ul>
			<li><a href="/backend/pages/create">New Page</a></li>
			<li><a href="#">Test Link</a></li>
			<li><a href="#">Test Link</a></li>
			<li><a href="#">Test Link</a></li>
		</ul>
	</nav>
@stop

@section('content')
	<div class="small-12 large-8 columns">
		<p class="message">
			Edit the following page, then click the "Save Edits" button below. To cancel, just click your browsers back button.
		</p>
		@include('partials.errors')
		{{ Form::open(['route' => 'page.update', 'method' => 'put']) }}
		@foreach ($page as $item)
		
		{{ Form::label('title', 'Give a Title to Your Page') }}
		{{ Form::text('title', $item->title) }}

		{{ Form::label('header', 'Give the New Page a Header') }}
		{{ Form::text('header', $item->header) }}

		{{ Form::label('content', 'Insert the Content of Your New Page') }}
		{{ Form::textarea('content', $item->content) }}

		@endforeach
		{{ Form::submit('Save Edits') }}

		{{ Form::close() }}
	</div>
@stop