@extends('templates.admin')

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