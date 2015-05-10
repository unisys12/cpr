<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<script src="{{ asset('packages/tinymce/tinymce.min.js') }}"></script>
		<script>
			tinymce.init(
				{
					relative_urls: false,
					plugins: 'image, jbimages, anchor, textcolor, media, link, hr, spellchecker, table',
					menu : { // this is the complete default configuration
				        edit   : {title : 'Edit'  , items : 'undo redo | cut copy paste pastetext | selectall'},
				        insert : {title : 'Insert', items : 'link media jbimages | hr'},
				        view   : {title : 'View'  , items : 'visualaid'},
				        format : {title : 'Format', items : 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
				        table  : {title : 'Table' , items : 'inserttable tableprops deletetable | cell row column'},
				        tools  : {title : 'Tools' , items : 'spellchecker code'},
				        images : {title : 'Images', items : 'jbimages image'}
				    },
				    toolbar: 'forecolor backcolor | bold italic underline',
					selector:'textarea'
				}
			);
		</script>
	</head>
	<body>
		<header class="row">
			<div class="large-8 columns">
				<h3>Corinth Alcorn Parks and Recreation Site Administration Area</h3>
			</div>
			<div class="large-4 right columns">
				@if( Auth::check() )

				<p>Hello, {{{ Auth::user()->name }}}</p>

				@endif
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
					
					@if( Auth::check() )

					<li class="panel">
						<a href="/backend">Backend Home</a>
					</li>

					@endif

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