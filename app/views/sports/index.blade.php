@extends('templates.site')

@section('title')
Sports Index
@stop

@section('content')
<h1>Sports</h1>
<p>Ours sports are divided into two groups: Youth and Adult. To see a list of activities for each, click one of the links below.</p>
<ul class="sports_list">
	<li><h3><a href="\sports\youth">Youth</a></h3></li>
	<li><h3><a href="\sports\adult">Adult</a></h3></li>
</ul>
@stop

@section('side-nav')
@foreach (Page::all() as $page)
	<li><a href="/{{ $page->slug }}">{{ $page->title }}</a></li>
@endforeach
@stop