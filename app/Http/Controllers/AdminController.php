<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plant;

class AdminController extends Controller
{
	public function admin (){

		$plant_count = Plant::count();

		return view('admin.admin_dashboard', compact('plant_count'));
	}
}
