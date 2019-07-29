<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantVariantController extends Controller
{
	public function index () {

		return view('admin.plant_variants.index');
		
	}
}
