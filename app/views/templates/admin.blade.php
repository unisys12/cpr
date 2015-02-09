<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{{asset('public/css/style.css')}}" />
		<script src="{{ asset('public/packages/tinymce/tinymce.min.js') }}"></script>
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
			<div class="large-12 columns">
				<h1>Corinth Alcorn Parks and Recreation Site Administration Area</h1>
			</div>
		</header>
		<header class="row">
			<section class="large-12 columns">
				@yield('sub-menu')
			</section>
		</header>
		<hr>
		<section class="row">
			<nav class="large-4 columns">
				<ul class="admin_menu">
					<li class="panel">
						<a href=" {{ route('site.index') }} ">Site Home</a>
					</li>
					<li class="panel">
						<a href="/backend">Backend Home</a>
					</li>
					<li class="panel">
						<a href="/backend/pages">Pages</a>
					</li>
					<li class="panel">
						<a href="{{ route('backend.carousel.index') }}">Carousel</a>
					</li>
					<li class="panel">
						<a href="{{ route('backend.facility.index') }}">Facilities</a>
					</li>
					<li class="panel">
						<a href="{{ route('backend.news.index') }}">Announcements</a>
					</li>
					<li class="panel">
						<a href="{{ route('backend.staff.index') }}">Staff Members</a>
					</li>
				</ul>
			</nav>
			<main class="large-8 columns">
				@yield('content')
			</main>	
		</section>	
	</body>
</html>