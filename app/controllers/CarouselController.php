<?php

class CarouselController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$carousel = Carousel::all();
		return View::make('backend.carousel.index')->with('carousel', $carousel);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.carousel.new');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$image_path = 'public/imgs/uploads/carousel';

		$data = [
			'title' 		=> 	Input::get('title'),
			'slug'			=>	Str::slug(Input::get('title')), 
			'description'	=>	Input::get('description'),
			'image_1'		=>	$image_path . Input::file('image_1'),
			'image_2'		=>	$image_path . Input::file('image_2'),
			'image_3'		=>	$image_path . Input::file('image_3')
		];

		Input::file('image_1')->move($image_path, Input::file('image_1')->getClientOriginalName());
		Input::file('image_2')->move($image_path, Input::file('image_2')->getClientOriginalName());
		Input::file('image_3')->move($image_path, Input::file('image_3')->getClientOriginalName());

		Carousel::create($data);
		return Redirect::route('backend.carousel.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$carousel = Carousel::where('slug', $slug)->get();
		return View::make('backend.carousel.show')->with('carousel', $carousel);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function edit($carousel)
	{
		$carousel = Carousel::where('slug', $slug)->get();
		return View::make('backend.carousel.edit')->with('carousel', $carousel);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function update($slug)
	{
		$image_path = '../imgs/uploads/carousel';

		$data = [
			'title' 		=> 	Input::get('title'),
			'slug'			=>	Str::slug(Input::get('title')), 
			'description'	=>	Input::get('description'),
			'image_1'		=>	$image_path . Input::file('image_1'),
			'image_2'		=>	$image_path . Input::file('image_2'),
			'image_3'		=>	$image_path . Input::file('image_3')
		];

		Carousel::save($data);
		return Redirect::route('backend.carousel.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		$carousel = Carousel::where('slug', $slug)->get();
		$carousel->delete();
		return Redirect::route('backend.carousel.index');
	}


}
