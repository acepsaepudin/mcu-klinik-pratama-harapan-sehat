<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layout');
});
Route::group(['prefix' => 'perusahaan'], function(){
	/**
	 * Get list Companies
	 */
	Route::get('/',[
	    'as' => 'company.index',
	    'uses' => 'CompanyController@index'
	]);
	/**
	 * Add New Company
	 */
	Route::get('tambah', [
		'as' => 'company.add',
		'uses' => 'CompanyController@create'
	]);
	/**
	 * Store New Company
	 */
	Route::post('tambah', [
		'as' => 'company.store',
		'uses' => 'CompanyController@store'
	]);
	/**
	 * Edit New Company
	 */
	Route::get('{id}/edit', [
		'as' => 'company.edit',
		'uses' => 'CompanyController@edit'
	]);
	/**
	 * Update data Company
	 */
	Route::post('{id}/update', [
		'as' => 'company.update',
		'uses' => 'CompanyController@update'
	]);
});

