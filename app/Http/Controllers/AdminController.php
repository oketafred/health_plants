<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;
use App\PlantVariant;

class AdminController extends Controller
{
	public function admin (){

		$plant_count = Plant::count();

		$plant_variants_count = PlantVariant::count();

		return view('admin.admin_dashboard', compact('plant_count', 'plant_variants_count'));
	}
}
