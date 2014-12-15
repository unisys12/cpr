<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/style.css" />
		<script src="/packages/tiny_mce/tiny_mce.js"></script>
		<script>
			//tinymce.baseURL = "../public/packages";
			//tinymce.suffix = '.min';
			tinyMCE.init(
				{
					theme: "advanced",
					relative_urls: false,
					plugins: "advimage",
					toolbar: "advimage",
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