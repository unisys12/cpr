@extends('templates.site')

@section('title')
	@foreach ($data as $facility)
		{{ $facility->name }}
	@endforeach
@stop

@section('content')			
	@foreach ($data as $facility)
		<header>
			<h1>{{ $facility->name }}</h1>
		</header>
		<article>
			<p>{{ $facility->description }}</p>
		</article>
		<figure>
			<img src="http://corinthparks.s3.amazonaws.com/{{ $facility->image_1 }}" alt="{{ $facility->image_1_description }}">
			<figcaptions>
				<small>
					<p><b>{{ $facility->image_1_description }}</b></p>
				</small>
			</figcaption>
		</figure>
		<br>
		<figure>
			<img src="http://corinthparks.s3.amazonaws.com/{{ $facility->image_1 }}" alt="{{ $facility->image_2_description }}">
			<figcaptions>
				<small>
					<p><b>{{ $facility->image_2_description }}</b></p>
				</small>
			</figcaption>
		</figure>
	@endforeach
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop