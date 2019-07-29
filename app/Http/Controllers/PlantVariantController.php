<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlantVariant;

class PlantVariantController extends Controller
{
	public function index () {

		$plant_variants = PlantVariant::orderBy('id', 'DESC')->get();

		return view('admin.plant_variants.index', compact('plant_variants'));
		
	}
}
