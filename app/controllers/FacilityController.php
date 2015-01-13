<?php

//use Cpr\Storage\Facility\FacilityRepository as Facility;

class FacilityController extends \BaseController {

	public function __construct(Facility $facility)
	{
		$this->facility = $facility;

		$this->beforeFilter('csrf', ['on' => 'post, put']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$facilities = $this->facility->all();
		return View::make('backend.facility.index')->with('facilities', $facilities);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.facility.new');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$imagePath = 'imgs/uploads/facilities/';

		$data = [
			'name' 					=> 	Input::get('name'),
			'slug'					=>	Str::slug(Input::get('name')), 
			'description'			=>	Input::get('description'),
			'image_1'				=>	$imagePath . Input::file('image_1')->getClientOriginalName(),
			'image_1_description'	=>	Input::get('image_1_description'),
			'image_2'				=>	$imagePath . Input::file('image_2')->getClientOriginalName(),
			'image_2_description'	=>	Input::get('image_2_description'),
		];

		$attempt = $this->facility->validate($data);
		
		if( $attempt->fails() ){
			return Redirect::route('backend.facility.create')->with('errors', $attempt->messages())->withInput();
		}

		$imageOne = Input::file('image_1');			
		$imageTwo = Input::file('image_2');

		if($imageOne->isValid()){
			$imageOne->move($imagePath, $data['image_1']);
		}

		if($imageTwo->isValid()){
			$imageTwo->move($imagePath, $data['image_2']);
		}

		$this->facility->create($data);
		return Redirect::route('backend.facility.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$facilities = Facility::where('slug', $slug)->get();
		return View::make('backend.facility.show')->with('facilities', $facilities);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  slug  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		$facilities = Facility::where('slug', $slug)->get();
		return View::make('backend.facility.edit')->with('facilities', $facilities);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function update($slug)
	{
		$image_path = 'imgs/uploads/facilities/';

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

		$this->facility->save($data);
		return Redirect::route('backend.facility.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		$facilities = Facility::where('slug', $slug)->get();
		$facilities->delete();
		return Redirect::route('backend.facility.index');
	}


}
