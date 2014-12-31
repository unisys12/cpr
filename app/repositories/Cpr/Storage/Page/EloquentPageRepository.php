<?php namespace Cpr\Storage\Page;

use Page;

class EloquentPageRepository implements PageRepository {

	public function all()
	{
		return Page::all();
	}

	public function find($slug)
	{
		return Page::where('slug', $slug)->get();
	}

	public function store($input)
	{
		return Page::create($input);
	}

	public function update($input)
	{
		return Page::save($input);
	}

}