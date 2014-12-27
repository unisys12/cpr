@extends('templates.site')

@section('content')
<section class="large-9 medium-10 columns">
	@include('partials.carousel')
</section>
<article class="large-9 medium-10 columns">
	<p>Crossroads Regional Park, southeast of downtown Corinth, Mississippi, offers 38 acres of opportunities for outdoor recreation. Facilities include a 1-mile paved walking or jogging trail, a soccer field, 10 tennis courts, 6 fields for baseball or softball, a 9 hole disc golf course and 3 picnic pavilions. A major attraction is the Crossroads Fun Station mega playground.</p>
</article>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop