<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PlantsImport;
use App\Exports\PlantsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Plant;
use Validator;
use Session;
use Image;
use App\PlantVariant;

class PlantController extends Controller
{

	public function export() 
	{
		return Excel::download(new PlantsExport, 'plants.xlsx');
	}

	public function import(Request $request) 
	{
		Excel::import(new PlantsImport, request()->file('excel_file'));

		Session::flash('success', 'Import from Excel Successful');
		
		return redirect()->back();
	}

	public function create (){

		return view('admin.plants.create');

	}

	public function index (){
		$plants = Plant::orderBy('id', 'DESC')->get();

		return view('admin.plants.index', compact('plants'));
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

		$image= $request->file('plant_photo');

		$filename = time(). '.' .$image->getClientOriginalExtension();
		$location = public_path('plant_photos/' . $filename);
		Image::make($image)->resize(800, 400)->save($location);
		$plant_photo = $filename;

		$plant = new Plant;

		$plant->plant_name = $request->plant_name;
		$plant->latin_name = $request->latin_name;
		$plant->plant_photo = $filename;
		$plant->description = $request->plant_description;
		$plant->growth_condition = $request->plant_growth_description;

		// dd($plant);

		$plant->save();

		Session::flash('success', 'A New Plant Added Successful.');

		return redirect()->route('plants.index');

	}


	public function plantVariant($id){

		$plant = Plant::where('id', $id)->first();


		return view('admin.plants.plant_variants', compact('plant'));

	}
}
