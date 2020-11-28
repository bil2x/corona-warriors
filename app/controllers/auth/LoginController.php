<?php

namespace App\Controllers\Auth;

use App\Models\User;

/**
 * 
 */
class LoginController
{
	public function create()
	{
		return view('auth/login');
	}

	function attemptLogin()
	{
		//dd(request());

		$form_data = request();
		//validation check start
		$field = [];
		foreach ($form_data as $key => $data) {
			if (empty($data)) {
				$field[] = $key;
			}
		}
		// all field required
		if (!empty($field)) {
			foreach ($field as $val) {
				$_SESSION['error'][$val] = ucwords($val) . " field is required";
			}
			//dd($_SESSION);
			return redirect('register');
		}
		// email validation checking
		if (!filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
			$_SESSION['error']['email'] = "Validate email address required";
			return redirect('register');
		}
		//password at least 8 character long
		if (strlen(request('password')) < 8) {
			$_SESSION['error']['password'] = "Password at least 8 characters long";
			return redirect('register');
		}
		//dd('ready to check');
		$res = User::check($form_data);
		if (empty($res)) {
			$_SESSION['error']['message'] = 'Your email or password invalid';
			return redirect('login');
		}
		//dd($res);
		// $res2  = array_map(function ($user) {
		// 	return [$user->id, $user->name, $user->email];
		// }, $res);
		foreach ($res as $user);
		//dd($user);
		$_SESSION['current_user'] = $user;
		redirect('');
	}

	public function destroy()
	{
		unset($_SESSION['current_user']);
		redirect('login');
	}
}
