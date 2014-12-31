<?php

use Cpr\Storage\Page\PageRepository as Page;

class PagesController extends \BaseController {

	public function __construct(Page $pages)
	{
		$this->page = $pages;
	}

	/**
	 * Display a listing of the page.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pages = $this->page->all();
		return View::make('backend.pages.index')->with('pages', $pages);
	}


	/**
	 * Show the form for creating a new page.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.pages.new');
	}


	/**
	 * Store a newly created page in storage.
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

		$this->page->create($data);
		return Redirect::route('page.index');
	}


	/**
	 * Display the specified page.
	 *
	 * @param  string $slug
	 * @return Response
	 */
	public function show($slug)
	{ 
		$page = $this->page->where('slug', $slug)->get();
		return View::make('backend.pages.show')->with('page', $page);
	}


	/**
	 * Show the form for editing the specified page.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		$page = $this->page->where('slug', $slug)->get();
		return View::make('backend.pages.edit')->with('page', $page);
	}


	/**
	 * Update the specified page in storage.
	 *
	 * @param  string $slug
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

		$this->page->save($data);
		return Redirect::route('page.index');
	}


	/**
	 * Remove the specified page from storage.
	 *
	 * @param  int  $title
	 * @return Response
	 */
	public function destroy($slug)
	{
		$page = $this->page->where('slug', $slug)->get();
		$page->delete();
		return Redirect::route('page.index');
	}


}
