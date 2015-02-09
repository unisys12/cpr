@extends('templates.admin')

@section('sub-menu')
	<header>
		<h4>Staff Members</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.staff.index') }}">Home</a></li>
			<li><a href="{{ route('backend.staff.create') }}">New Staff Memeber</a></li>
		</ul>
	</nav>
@stop

@section('content')
	@if(!$staff->count())
		<h5>There have been no Staff Members added to your site yet!</h5>
	@endif

	<ul>
	@foreach ($staff as $member)
		<li>
			<a href="/backend/staff/{{ $member->slug }}">{{ $member->title }}</a> - <a href="/backend/staff/{{ $member->slug }}/edit">Edit</a>
			{{ Form::open(['route' => ['backend.staff.destroy', $member->slug], 'method' => 'DELETE']) }}
			{{ Form::submit('Delete') }}
			{{ Form::close() }}
		</li>
	@endforeach
	</ul>

@stop