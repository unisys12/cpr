<?php namespace Cpr\Storage\Page;

use Page;
use Illuminate\Validation\Factory as Validator;

class EloquentPageRepository extends Validator implements PageRepository{

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

	/**
	 * Validate Method to inspect your inputs
	 * 
	 * @var string
	 *
	 * @return bool
	 */
	public function validate($input)
	{

		$rules = [

		'title'		=>	'required|min:5|unique:facilities',
		'slug'		=>	'required|min:10|max:255',
		'header'	=> 	'required|min:5|max:25',
		'content'	=> 	'required|min:5|max:25',

		];

		$attempt = Validator::make($input, $rules);

		return $attempt;

	}

}