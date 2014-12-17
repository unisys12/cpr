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
				<h2>{{ $element->title }}</h2>
				<h4>{{ $element->header }}</h4>
			</header>
			<article>
				{{ $element->content }}
				<p><small>Created: {{ $element->created_at }}</small></p>
			</article>
		@endforeach
	</div>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop