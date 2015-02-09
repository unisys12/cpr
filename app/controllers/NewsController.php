<?php

class NewsController extends \BaseController {

	public function __construct(News $news)
	{
		$this->beforeFilter('auth');
		$this->news = $news;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return View::make('backend.news.index')->with('news', $this->news->all());

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('backend.news.new');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$data = [
			'title' 	=> Input::get('title'),
			'slug'		=> Str::slug(Input::get('title')),
			'header'	=> Input::get('header'),
			'content'	=> Input::get('content')
		];

		$attempt = $this->news->validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.news.create')->with('errors', $attempt->messages())->withInput();
		}

		$this->news->create($data);
		return Redirect::route('backend.news.index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		return View::make('backend.news.show')->with('news', $this->news->where('slug', $slug)->get());
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		return View::make('backend.news.edit')->with('news', $this->news->where('slug', $slug)->get());
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function update($slug)
	{
		
		$data = [
			'title' 	=> Input::get('title'),
			'slug'		=> Str::slug(Input::get('title')),
			'header'	=> Input::get('header'),
			'content'	=> Input::get('content')
		];

		$attempt = $this->news->validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.news.create')->with('errors', $attempt->messages())->withInput();
		}

		$existing = $this->news->where('slug', $slug);
		
		$existing->update($data);

		return Redirect::route('backend.news.index');

	}


	/**
	 * Remove the specified announcement from storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		
		$news = $this->news->where('slug', $slug);

		$news->delete();

		return Redirect::route('backend.news.index');

	}


}
