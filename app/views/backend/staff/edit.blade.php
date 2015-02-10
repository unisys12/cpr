@extends('templates.admin')

@section('title')
Edit A Staff Member
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Edit A Staff Member</h5>
	</div>
@stop

@section('sub-menu')
	<header>
		<h4>Staff Members</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.staff.index') }}">Staff Members Home</a></li>
		</ul>
	</nav>
@stop

@section('content')

	<p class="message">
		Edit the following Staff Member, then click the "Save Edits" button below. To cancel, just click your browsers back button.
	</p>

	@include('partials.errors')

	@foreach($slug as $member)
		{{ Form::open(['route' => ['backend.staff.update', $member->slug], 'method' => 'put', 'files' => true]) }}

		{{ Form::label('name', 'Staff Member Name') }}
		{{ Form::text('name', $member->name) }}
		
		{{ Form::label('title', 'Staff Members Title') }}
		{{ Form::text('title', $member->title) }}

		{{ Form::label('email', 'Staff Members Email') }}
		{{ Form::text('email', $member->email) }}

		{{ Form::label('image', 'Staff Members Photo Optional') }}
		{{ Form::file('image') }}

		{{ Form::label('summary', 'Give a summary of this staff members roles within organization and outside, if possible') }}
		{{ Form::textarea('summary', $member->summary) }}
	@endforeach

		{{ Form::submit('Save Edits') }}

		{{ Form::close() }}

@stop