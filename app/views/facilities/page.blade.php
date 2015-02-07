@extends('templates.site')

@section('title')
	@foreach ($data as $element)
		{{ $element->name }}
	@endforeach
@stop

@section('content')
	@foreach ($data as $element)
		<h1>{{ $element->name }}</h1>
	@endforeach		
		@foreach ($data as $element)
			<header>
				<h2>{{ $element->name }}</h2>
			</header>
			<figure>
				<img src="{{ secure_asset($element->image_1) }}" alt="{{ $element->image_1_description }}">
				<figcaptions>
					<small>
						<p><b>{{ $element->image_1_description }}</b></p>
					</small>
				</figcaption>
			</figure>
			<br>
			<figure>
				<img src="{{ secure_asset($element->image_2) }}" alt="{{ $element->image_2_description }}">
				<figcaptions>
					<small>
						<p><b>{{ $element->image_2_description }}</b></p>
					</small>
				</figcaption>
			</figure>
			<article>
				<p>{{ $element->description }}</p>
			</article>
		@endforeach
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop