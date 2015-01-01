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
Route::put('backend/pages/update', ['as' => 'page.update', 'uses' => 'PagesController@update', 'before' => 'csrf']);

Route::resource('/backend/carousel', 'CarouselController');
Route::resource('/backend/facility', 'FacilityController');

// Site Routes
Route::get('/', ['as' => 'site.index', 'uses' => 'SiteController@index']);
Route::get('/{slug}', ['as' => 'site.page', 'uses' => 'SiteController@singlePage']);
