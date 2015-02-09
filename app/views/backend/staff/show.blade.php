@extends('templates.admin')

@section('sub-menu')
	<header class="call-out">
		<h4>Staff Members</h4>
	</header>
	<nav class="submenu">
		<ul>
			<li><a href="{{ route('backend.staff.create') }}">Add Staff Memeber</a></li>
			@foreach($slug as $member)
			<li><a href="/backend/staff/{{ $member->slug }}/edit">Edit This Staff Member</a></li>
			@endforeach
		</ul>
	</nav>
@stop

@section('content')
	
	@foreach($slug as $member)	
		<section class="row">
			<div class="large-6">
				<h4>{{ $member->name }}</h4>
				<p>{{ $member->title }}</p>
				<p>{{ $member->email }}</p>
				<p>{{ $member->summary }}</p>
			</div>
			<div class="large-6">
				<figure>
					<img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
				</figure>
				<figcaption>
					{{ $member->name }}
				</figcaption>
			</div>
		</section>
	@endforeach

@stop