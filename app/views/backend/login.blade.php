@extends('templates.admin')

@section('header')
	<div class="small-6 columns">
		<h5>Backend/Administration Area</h5>
	</div>
@stop

@section('content')

@include('partials.errors')

	{{ Form::open() }}
	{{ Form::label("email", "Email") }}
	{{ Form::text("email") }}
	{{ Form::label("password", "Password") }}
	{{ Form::password("password") }}
	{{ Form::submit("login") }}
	{{ Form::close() }}
	
@stop