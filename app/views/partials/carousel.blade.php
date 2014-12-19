<section class="large-2 small-centered large-uncentered columns">
	
	<article class="carousel">
	@foreach($carousel as $image)
		<figure class="image img-one">
			<img src=" {{ asset($image->image_one) }} " alt="Multifunction Banner">
			<figcaption>{{ $image->image_desc }}</figcaption>
		</figure>
	</article>

	<img src="imgs/park-logo-svg.svg" alt="logo">
</section>