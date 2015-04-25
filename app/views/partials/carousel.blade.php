<article class="carousel">
@foreach($carousel as $image)
	<figure class="image img-one">
		<img src="http://corinthparks.s3.amazonaws.com/{{ $image->image_1 }}" alt="{{ $image->image_1_description }}" />
		<figcaption>{{ $image->image_1_description }}</figcaption>
	</figure>
	<figure class="image img-two">
		<img src="http://corinthparks.s3.amazonaws.com/{{ $image->image_2 }}" alt="{{ $image->image_2_description }}" />
		<figcaption>{{ $image->image_2_description }}</figcaption>
	</figure>
	<figure class="image img-three">
		<img src="http://corinthparks.s3.amazonaws.com/{{ $image->image_3 }}" alt="{{ $image->image_3_description }}" />
		<figcaption>{{ $image->image_3_description }}</figcaption>
	</figure>
@endforeach
</article>
