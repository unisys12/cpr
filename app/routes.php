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
Route::get('/backend', function()
{
	return View::make('backend.index');
});

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

// Site Routes
Route::get('/', ['as' => 'site.index', 'uses' => 'SiteController@index']);
Route::get('/{slug}', ['as' => 'site.page', 'uses' => 'SiteController@singlePage']);
