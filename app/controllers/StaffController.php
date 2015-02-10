<?php

class StaffController extends \BaseController {

	public function __construct(Staff $staff)
	{
		$this->beforeFilter('auth');
		$this->staff = $staff;
	}

	/**
	 * Display a listing of the staff member.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.staff.index')->with('staff', $this->staff->all());
	}


	/**
	 * Show the form for creating a new staff member.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('backend.staff.new');
	}


	/**
	 * Store a newly created staff member in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$imagePath = 'imgs/uploads/staff/';

		$data = [
			'name' 		=> Input::get('name'),
			'slug'		=> Str::slug(Input::get('name')),
			'title'		=> Input::get('title'),
			'email'		=> Input::get('email'),
			'image'		=> $imagePath . Input::file('image')->getClientOriginalName(),
			'summary'	=> Input::get('summary')
		];

		$attempt = $this->staff->validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.staff.create')->with('errors', $attempt->messages())->withInput();
		}

		$image = Input::file('image');

		if($image->isValid()){
			$image->move($imagePath, $data['image']);
		}

		$this->staff->create($data);
		
		return Redirect::route('backend.staff.index');
	}


	/**
	 * Display the specified staff member.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		return View::make('backend.staff.show')->with('slug', $this->staff->where('slug', $slug)->get());
	}


	/**
	 * Show the form for editing the specified staff member.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
		return View::make('backend.staff.edit')->with('slug', $this->staff->where('slug', $slug)->get());
	}


	/**
	 * Update the specified staff member in storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function update($slug)
	{
		$imagePath = 'imgs/uploads/staff/';

		$data = [
			'name' 		=> Input::get('name'),
			'slug'		=> Str::slug(Input::get('name')),
			'title'		=> Input::get('title'),
			'email'		=> Input::get('email'),
			'image'		=> $imagePath . Input::file('image')->getClientOriginalName(),
			'summary'	=> Input::get('summary')
		];

		$attempt = $this->staff->validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.staff.create')->with('errors', $attempt->messages())->withInput();
		}

		$image = Input::file('image');

		if($image->isValid()){
			$image->move($imagePath, $data['image']);
		}

		$existing = $this->staff->where('slug', $slug);

		$existing->update($data);

		return Redirect::route('backend.staff.index');
	}


	/**
	 * Remove the specified staff member from storage.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function destroy($slug)
	{
		$staff = $this->staff->where('slug', $slug);

		$staff->delete();

		return Redirect::route('backend.staff.index');
	}


}
