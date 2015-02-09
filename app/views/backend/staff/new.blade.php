@extends('templates.admin')

@section('title')
Add New Staff Member
@stop

@section('header')
	<div class="small-6 columns">
		<h5>Create a New Staff Member</h5>
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

	@include('partials.errors')
		{{ Form::open(['route' => 'backend.staff.store', 'files' => true]) }}

		{{ Form::label('name', 'Staff Member Name') }}
		{{ Form::text('name') }}
		
		{{ Form::label('title', 'Staff Members Title') }}
		{{ Form::text('title') }}

		{{ Form::label('email', 'Staff Members Email') }}
		{{ Form::email('email') }}

		{{ Form::label('image', 'Staff Members Photo Optional') }}
		{{ Form::file('image') }}

		{{ Form::label('summary', 'Give a summary of this staff members roles within organization and outside, if possible') }}
		{{ Form::textarea('summary') }}

		{{ Form::submit('Add New Staff Member') }}

		{{ Form::close() }}

@stop