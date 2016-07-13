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

Route::group(['prefix' => 'jabatan'], function(){
	/**
	 * Get list Employee Section
	 */
	Route::get('/',[
	    'as' => 'section.index',
	    'uses' => 'EmployeeSectionController@index'
	]);
	/**
	 * Add New Employee Section
	 */
	Route::get('tambah', [
		'as' => 'section.add',
		'uses' => 'EmployeeSectionController@create'
	]);
	/**
	 * Store New Employee Section
	 */
	Route::post('tambah', [
		'as' => 'section.store',
		'uses' => 'EmployeeSectionController@store'
	]);
	/**
	 * Edit New Employee Section
	 */
	Route::get('{id}/edit', [
		'as' => 'section.edit',
		'uses' => 'EmployeeSectionController@edit'
	]);
	/**
	 * Update data Employee Section
	 */
	Route::post('{id}/update', [
		'as' => 'section.update',
		'uses' => 'EmployeeSectionController@update'
	]);
});

Route::group(['prefix' => 'peserta'], function(){
	/**
	 * Get list Employee
	 */
	Route::get('/',[
	    'as' => 'employee.index',
	    'uses' => 'EmployeeController@index'
	]);
	/**
	 * Add New Employee
	 */
	Route::get('tambah', [
		'as' => 'employee.add',
		'uses' => 'EmployeeController@create'
	]);
	/**
	 * Store New Employee
	 */
	Route::post('tambah', [
		'as' => 'employee.store',
		'uses' => 'EmployeeController@store'
	]);
	/**
	 * Edit New Employee
	 */
	Route::get('{id}/edit', [
		'as' => 'employee.edit',
		'uses' => 'EmployeeController@edit'
	]);
	/**
	 * Update data Employee
	 */
	Route::post('{id}/update', [
		'as' => 'employee.update',
		'uses' => 'EmployeeController@update'
	]);
});
