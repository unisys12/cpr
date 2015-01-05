@extends('templates.site')

@section('title')
	@foreach ($data as $element)
		{{ $element->title }}
	@endforeach
@stop

@section('content')
	<div class="large-8 columns">
		<div class="row">		
		@foreach ($data as $element)			
			<section class="large-6 medium-4 columns">
				<header>
					<h3>{{ $element->name }}</h3>
				</header>
				<figure class="facility_img panel radius">
					<a href="/facilities/{{ $element->slug }}">
						<img src="{{ asset($element->image_1) }}" alt="{{ $element->image_1_description }}">
					</a>
					<figcaption>
						<small>
							{{ $element->description }}
						</small>
					</figcaption>
				</figure>
			</section>
		@endforeach
		</div>
	</div>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop