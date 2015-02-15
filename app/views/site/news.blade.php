@extends('templates.site')

@section('title')
	@foreach ($data as $element)
		{{ $element->title }}
	@endforeach
@stop

@section('content')		
	@foreach ($data as $element)
		<header>
			<h2>{{ $element->title }}</h2>
			<h4>{{ $element->header }}</h4>
		</header>
		<article>
			{{ substr($element->content,0, 500) }}
			<p><small><a href="/news/{{ $element->slug }}">Read More</a> - Created: {{ $element->created_at }}</small></p>
		</article>
	@endforeach
@stop
