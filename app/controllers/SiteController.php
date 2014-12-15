<?php

class SiteController extends \BaseController {

	public function __construct(Page $page)
	{
		$this->page = $page;
	}

	/**
	 * Generate collection for Site from list of Pages
	 *
	 * @return resource
	 */
	public function getAllPages()
	{
		return $this->page->get();
	}

	/**
	 * Retrive a single page instance
	 *
	 * @var string $slug
	 * @return resource
	 */
	public function getSinglePage($slug)
	{
		return $this->page->where('slug', $slug)->get();
	}

	// Grab and display all site pages
	public function index()
	{
		return View::make('site.index')->with('data', $this->getAllPages());
	}

	//Grab only one page
	public function singlePage($slug)
	{
		$page = $this->getSinglePage($slug);
		return View::make('site.index')->with('data', $page);
	}

}
