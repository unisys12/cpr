<?php

class CarouselController extends \BaseController {

	public function __construct(Carousel $carousel)
	{
		$this->beforeFilter('auth');
		$this->carousel = $carousel;
	}

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
		$imagePath = 'imgs/uploads/carousel/';

		$data = [
			'title' 				=> 	Input::get('title'),
			'slug'					=>	Str::slug(Input::get('title')), 
			'description'			=>	Input::get('description'),
			'image_1'				=>	$imagePath . Input::file('image_1')->getClientOriginalName(),
			'image_1_description'	=>	Input::get('image_1_description'),
			'image_2'				=>	$imagePath . Input::file('image_2')->getClientOriginalName(),
			'image_2_description'	=>	Input::get('image_2_description'),
			'image_3'				=>	$imagePath . Input::file('image_3')->getClientOriginalName(),
			'image_3_description'	=>	Input::get('image_3_description')
		];

		$attempt = $this->carousel->validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.carousel.create')->with('errors', $attempt->messages())->withInput();
		}

		$imageOne = Input::file('image_1');
		$imageTwo = Input::file('image_2');
		$imageThree = Input::file('image_3');

		if($imageOne->isValid()){
			$imageOne->move($imagePath, $data['image_1']);
		}

		if($imageTwo->isValid()){
			$imageTwo->move($imagePath, $data['image_2']);
		}

		if($imageThree->isValid()){
			$imageThree->move($imagePath, $data['image_3']);
		};

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
	public function edit($slug)
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
		$image_path = 'imgs/uploads/carousel';

		$data = [
			'title' 				=> 	Input::get('title'),
			'slug'					=>	Str::slug(Input::get('title')), 
			'description'			=>	Input::get('description'),
			'image_1'				=>	$image_path . Input::file('image_1')->getClientOriginalName(),
			'image_1_description'	=>	Input::get('image_1_description'),
			'image_2'				=>	$image_path . Input::file('image_2')->getClientOriginalName(),
			'image_2_description'	=>	Input::get('image_2_description'),
			'image_3'				=>	$image_path . Input::file('image_3')->getClientOriginalName(),
			'image_3_description'	=>	Input::get('image_3_description')
		];

		$attempt = $this->carousel->validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.carousel.create')->with('errors', $attempt->messages())->withInput();
		}

		$imageOne = Input::file('image_1');
		$imageTwo = Input::file('image_2');
		$imageThree = Input::file('image_3');

		if($imageOne->isValid()){
			$imageOne->move($image_path, $data['image_1']);
		}

		if($imageTwo->isValid()){
			$imageTwo->move($image_path, $data['image_2']);
		}

		if($imageThree->isValid()){
			$imageThree->move($image_path, $data['image_3']);
		};

		$existing = $this->carousel->where('slug', $slug);
		$existing->update($data);
		
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
		$carousel = Carousel::where('slug', $slug);
		$carousel->delete();
		return Redirect::route('backend.carousel.index');
	}


}
