<?php

class StaffController extends \BaseController {

	/**
	 * Display a listing of the staff member.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('backend.staff.index')->with('staff', Staff::all());
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
		$data = [
			'name' 		=> Input::get('name'),
			'slug'		=> Str::slug(Input::get('name')),
			'title'		=> Input::get('title'),
			'email'		=> Input::get('email'),
			'summary'	=> Input::get('summary')
		];

		$attempt = Staff::validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.staff.create')->with('errors', $attempt->messages())->withInput();
		}

		Staff::create($data);
		return Redirect::route('backend.staff.index');
	}


	/**
	 * Display the specified staff member.
	 *
	 * @param  string  $name
	 * @return Response
	 */
	public function show($name)
	{
		return View::make('backend.staff.show')->with('name', Staff::where('name', $name)->get());
	}


	/**
	 * Show the form for editing the specified staff member.
	 *
	 * @param  string  $name
	 * @return Response
	 */
	public function edit($name)
	{
		return View::make('backend.staff.edit')->with('name', Staff::where('name', $name)->get());
	}


	/**
	 * Update the specified staff member in storage.
	 *
	 * @param  string  $name
	 * @return Response
	 */
	public function update($name)
	{
		$data = [
			'name' 		=> Input::get('name'),
			'slug'		=> Str::slug(Input::get('name')),
			'title'		=> Input::get('title'),
			'email'		=> Input::get('email'),
			'summary'	=> Input::get('summary')
		];

		$attempt = Staff::validate($data);

		if( $attempt->fails() ){
			return Redirect::route('backend.staff.create')->with('errors', $attempt->messages())->withInput();
		}

		$existing = Staff::where('name', $name);

		$existing->update($data);

		return Redirect::route('backend.staff.index');
	}


	/**
	 * Remove the specified staff member from storage.
	 *
	 * @param  string  $name
	 * @return Response
	 */
	public function destroy($name)
	{
		$staff = Staff::where('name', $name);

		$staff->delete();

		return Redirect::route('backend.staff.index');
	}


}
