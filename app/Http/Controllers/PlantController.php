<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class PlantController extends Controller
{
	public function create (){

		return view('admin.plants.create');

	}

	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'plant_name'    => 'required',
			'latin_name' => 'required',
			'plant_photo' => 'required',
			'plant_description' => 'required',
			'plant_growth_description' => 'required'
		]);
		if ($validator->fails()) {

			Session::flash('error', 'Please Check your Inputs');

			return redirect()->back();
		}

		$image= $request->file('photo');

		$filename = time(). '.' .$image->getClientOriginalExtension();
		$location = public_path('clinican_photos/' . $filename);
		Image::make($image)->resize(800, 400)->save($location);
		$clinican_photo = $filename;

		$credentials = [
			'email'    => $request->email,
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'password' => $request->password,
			'address' => $request->address,
			'telephone_number' => $request->telephone_number,
			'health_facility_id' => $request->health_facility_id,
			'specialist' => $request->specialist,
			'photo' => $clinican_photo,
			'gender' => $request->gender,
			'biography' => $request->biography
		];

		$user = Sentinel::registerAndActivate($credentials);

		$role = Sentinel::findRoleBySlug("clinican");

		$role->users()->attach($user);

		Session::flash('success', 'A New Clinican Added Successful.');

		return redirect()->route('clinican_lists');

	}
}
