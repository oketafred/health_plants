<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Session;

class PasswordController extends Controller
{
	public function my_profile(){

		return view('admin.profile.index');

	}

	public function update(Request $request) {

		$hasher = Sentinel::getHasher();

		$oldPassword = $request->old_password;
		$password = $request->password;
		$passwordConf = $request->password_confirmation;

		$user = Sentinel::getUser();

		if (!$hasher->check($oldPassword, $user->password) || $password != $passwordConf) {
			Session::flash('error', 'Check input is correct.');

			return redirect()->route('my_profile');
		}

		Sentinel::update($user, array('password' => $password));

		Sentinel::logout();

		Session::flash('success', 'Password updated successfully. Please Login');

		return redirect('/admin');
	}
}

