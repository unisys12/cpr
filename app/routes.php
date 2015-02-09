<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Backend Routes
Route::get('/backend', ['before' => 'auth', function()
{
	return View::make('backend.index');
}]);

Route::get('/backend/login', ['as' => 'login', 'uses' => 'UserController@index']);

Route::post('/backend/login', ['as' => 'attempt', function()
{
	$data = Input::except('_token', '_url');

	$rules = array(
		'email' => 'required',
		'password' => 'required'
	);

	$validate = Validator::make($data, $rules);

	if($validate->fails())
	{

		$errors = $validate->messages();

		return Redirect::to('/backend/login')
			->withErrors($errors)
			->withInput();
	}

	if(Auth::attempt($data))
	{
		return Redirect::intended('/backend');
	}

	return Redirect::to('/backend/login')->with('message', 'Username and Password do not match');
}]);

//Route::resource('/backend/pages', 'PagesController');
Route::get('backend/pages', ['as' => 'page.index', 'uses' => 'PagesController@index']);
Route::get('backend/pages/create', ['as' => 'page.create', 'uses' => 'PagesController@create']);
Route::post('backend/pages/store', ['as' => 'page.store', 'uses' => 'PagesController@store', 'before' => 'csrf']);
Route::get('backend/pages/{page}', ['as' => 'page.preview', 'uses' => 'PagesController@show']);
Route::get('backend/pages/{page}/edit', ['as' => 'page.edit', 'uses' => 'PagesController@edit']);
Route::get('backend/pages/{page}/delete', ['as' => 'page.delete', 'uses' => 'PagesController@destroy']);
Route::put('backend/pages/{page}', ['as' => 'page.update', 'uses' => 'PagesController@update', 'before' => 'csrf']);

Route::resource('/backend/carousel', 'CarouselController');
Route::resource('/backend/facility', 'FacilityController');
Route::resource('/backend/news', 'NewsController');
Route::resource('/backend/staff', 'StaffController');

Route::get('/facilities', function()
{
	return View::make('facilities.index')->with('data', Facility::all());
});

Route::get('/facilities/{slug}', ['as' => 'facilities.page', function($slug)
{
	$data = Facility::where('slug', $slug)->get();
	return View::make('facilities.page')->with('data', $data);
}]);

Route::get('/sports', ['as' => 'sports.index', function()
{
	return View::make('sports.index');
}]);

Route::get('/sports/youth', ['as' => 'sports.youth', function()
{
	return View::make('sports.youth');
}]);

Route::get('/sports/adult', ['as' => 'sports.adult', function()
{
	return View::make('sports.adult');
}]);

// Route to Registration Info
Route::get('/registration', ['as' => 'registration', function()
{
	return View::make('site.registration');
}]);

// Route to Announcements and News
Route::get('/news', function()
{
	$data = News::all()->take(5);

	return View::make('site.page')->with('data', $data);
});

// Route to Staff view
Route::get('/staff', function()
{
	return View::make('site.staff')->with('staff', Staff::all());
});

// Site Routes
Route::get('/', ['as' => 'site.index', 'uses' => 'SiteController@index']);
Route::get('/{slug}', ['as' => 'site.page', 'uses' => 'SiteController@singlePage']);
