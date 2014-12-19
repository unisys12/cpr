<section class="large-8 small-centered large-uncentered columns">
	
	<article class="carousel">
	@foreach($carousel as $image)
	<h2>{{ $image->title }}</h2>
	<p>{{ $image->description }}</p>
		<figure class="image img-one">
			<img src="{{ asset($image->image_1) }}" alt="{{ $image->image_1_description }}" />
			<figcaption>{{ $image->image_1_description }}</figcaption>
		</figure>
		<figure class="image img-two">
			<img src="{{ asset($image->image_2) }}" alt="{{ $image->image_2_description }}" />
			<figcaption>{{ $image->image_2_description }}</figcaption>
		</figure>
		<figure class="image img-three">
			<img src="{{ asset($image->image_3) }}" alt="{{ $image->image_3_description }}" />
			<figcaption>{{ $image->image_3_description }}</figcaption>
		</figure>
	@endforeach
	</article>

</section>