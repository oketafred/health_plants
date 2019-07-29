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
	
	Route::get('dashboard', 'AdminController@admin')->name('admin_dashboard');
	
	Route::get('view_plants', 'PlantController@index')->name('plants.index');
	
	Route::get('add_plant', 'PlantController@create')->name('plants.create');
	Route::post('add_plant', 'PlantController@store')->name('plants.store');

	Route::get('plant/{id}', 'PlantController@plantVariant')->name('plants.variants');

	Route::get('plant_variants', 'PlantVariantController@index')->name('variants.index');

	Route::get('plants/export', 'PlantController@export')->name('plants.export');

	Route::post('plants/import', 'PlantController@import')->name('plants.import');

	Route::get('my_profile', 'PasswordController@my_profile')->name('my_profile');

	Route::post('resetpassword', 'PasswordController@update')->name('reset.password');
});