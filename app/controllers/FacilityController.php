<?php

use Cpr\Storage\Facility\FacilityRepository as Facility;

class FacilityController extends \BaseController {

	public function __construct(Facility $facility)
	{
		$this->facility = $facility;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$facilites = $this->facility->all();
		return View::make('backend.facilites.index')->with('facilites', $facilites);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.facilites.new');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$image_path = 'imgs/uploads/facilites/';

		$data = [
			'title' 				=> 	Input::get('title'),
			'slug'					=>	Str::slug(Input::get('title')), 
			'description'			=>	Input::get('description'),
			'image_1'				=>	$image_path . Input::file('image_1')->getClientOriginalName(),
			'image_1_description'	=>	Input::get('image_1_description'),
			'image_2'				=>	$image_path . Input::file('image_2')->getClientOriginalName(),
			'image_2_description'	=>	Input::get('image_2_description'),
		];

		Image::make(Input::file('image_1'))->save($data['image_1']);
		Image::make(Input::file('image_2'))->save($data['image_2']);

		$this->facility->store($data);
		return Redirect::route('backend.facilites.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$facilites = $this->facility->find($slug);
		return View::make('backend.facilites.show')->with('facilites', $facilites);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  slug  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		$facilites = $this->facility->find($slug);
		return View::make('backend.facilites.edit')->with('facilites', $facilites);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function update($slug)
	{
		$image_path = 'imgs/uploads/facilites/';

		$data = [
			'title' 				=> 	Input::get('title'),
			'slug'					=>	Str::slug(Input::get('title')), 
			'description'			=>	Input::get('description'),
			'image_1'				=>	$image_path . Input::file('image_1')->getClientOriginalName(),
			'image_1_description'	=>	Input::get('image_1_description'),
			'image_2'				=>	$image_path . Input::file('image_2')->getClientOriginalName(),
			'image_2_description'	=>	Input::get('image_2_description'),
		];

		Image::make(Input::file('image_1'))->save($data['image_1']);
		Image::make(Input::file('image_2'))->save($data['image_2']);

		$this->facility->update($data);
		return Redirect::route('backend.facilites.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		$facilites = Facility::where('slug', $slug)->get();
		$facilites->delete();
		return Redirect::route('backend.facilites.index');
	}


}
