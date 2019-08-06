<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;
use App\DiseaseCategory;
use App\PlantVariant;
use App\Plant;
use DB;

class DiseaseController extends Controller
{
	public function index () {

		return view('welcome');

	}

	public function query(Request $request) {

		$searchTerm = $request->searchTerm;

		$search_results = Disease::where('disease_name','LIKE','%'.$searchTerm.'%')->get();

		return view('search_result', compact('search_results','searchTerm'));

	}

	public function details($id) {

		$disease = Disease::findOrFail($id);

		$disease_plant_variant = $disease->disease_plant_variant;

		$disease_category = DiseaseCategory::where('id', $disease->id)->first();

		$plant_variant = $disease_plant_variant->first();

		$plant_variant_id = $plant_variant->id;

		$plant_variant = PlantVariant::findOrFail($plant_variant_id);

		$plant = Plant::findOrFail($plant_variant->plant_id);

		// dd($plant);

		return view('details', compact('disease', 'disease_category', 'plant_variant', 'plant'));

	}
}
