@extends('templates.site')

@section('title')
	@foreach ($data as $element)
		{{ $element->title }}
	@endforeach
@stop

@section('content')
	<div class="large-8 columns">		
		@foreach ($data as $element)
			<header>
				<h2>{{ $element->name }}</h2>
			</header>
			<figure>
				<a href="/facilities/{{ $element->slug }}">
					<img src="{{ asset($element->image_1) }}" alt="{{ $element->image_1_description }}">
				</a>
				<figcaptions>
					<small>
						{{ $element->description }}
					</small>
				</figcaption>
			</figure>
		@endforeach
	</div>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop