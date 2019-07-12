<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware' => 'visitors'], function(){
	Route::get('admin', 'AccountController@getLogin')->name('login');
	Route::post('login', 'AccountController@processLogin')->name('login');

	Route::get('forgot_password', function(){
		return view('admin.forgot_password');
	})->name('forgot_password');
});

Route::post('logout', 'AccountController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	
	Route::get('dashboard', function(){
		return view('admin.admin_dashboard');
	})->name('admin_dashboard');
	
	Route::get('view_plants', function(){
		return view('admin.plants.index');
	})->name('plants.index');
	
	Route::get('add_plant', 'PlantController@create')->name('plants.create');
	Route::post('add_plant', 'PlantController@store')->name('plants.store');
});