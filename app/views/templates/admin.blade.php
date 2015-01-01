<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/style.css" />
		<script src="/packages/tinymce/tinymce.min.js"></script>
		<script>
			tinymce.init(
				{
					relative_urls: false,
					plugins: "jbimages",
					toolbar: "jbimages",
					selector:'textarea'
				}
			);
		</script>
	</head>
	<body>
		<header class="row">
			<div class="small-6 columns">
				<h5>Backend/Administration Area</h5>
			</div>
			<nav class="small-6 columns">
				<a href=" {{ route('site.index') }} ">Site Home</a> -
				<a href="/backend">Backend Home</a> -
				<a href="/backend/pages">Pages</a> -
				<a href="{{ route('backend.carousel.index') }}">Carousel</a> -
				<a href="{{ route('backend.facility.index') }}">Facilities</a> -
			</nav>
		</header>
		<hr>
		<main class="row">
			<aside class="large-4 columns">
				@yield('sub-menu')
			</aside>
			@yield('content')
		</main>		
	</body>
</html>