<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disease;

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
}
