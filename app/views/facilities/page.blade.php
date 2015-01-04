@extends('templates.site')

@section('title')
	@foreach ($data as $element)
		{{ $element->name }}
	@endforeach
@stop

@section('content')
	<div class="large-8 columns">		
		@foreach ($data as $element)
			<header>
				<h2>{{ $element->name }}</h2>
			</header>
			<figure>
				<img src="{{ asset($element->image_1) }}" alt="{{ $element->image_1_description }}">
				<figcaptions>
					<small>
						{{ $element->image_1_description }}
					</small>\
				</figcaption>
			</figure>
			<figure>
				<img src="{{ asset($element->image_2) }}" alt="{{ $element->image_2_description }}">
				<figcaptions>
					<small>
						{{ $element->image_2_description }}
					</small>\
				</figcaption>
			</figure>
			<article>
				{{ $element->description }}
			</article>
		@endforeach
	</div>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop