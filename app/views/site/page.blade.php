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
			{{ $element->content }}
			<p><small>Created: {{ $element->created_at }}</small></p>
		</article>
	@endforeach
@stop
