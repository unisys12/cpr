@extends('templates.site')

@section('title')
	@foreach ($data as $facility)
		{{ $facility->title }}
	@endforeach
@stop

@section('content')		
	<div class="row">		
		@foreach ($data as $facility)			
			<section class="large-6 medium-4 columns">
				<header>
					<h3>{{ $facility->name }}</h3>
				</header>
				<figure class="facility_img panel radius">
					<a href="/facilities/{{ $facility->slug }}">
						<img src="http://corinthparks.s3.amazonaws.com/{{ $facility->image_1 }}" alt="{{ $facility->image_1_description }}">
					</a>
					<figcaption>
						<small>
							{{ $facility->description }}
						</small>
					</figcaption>
				</figure>
			</section>
		@endforeach
	</div>
@stop

@section('side-nav')

@stop