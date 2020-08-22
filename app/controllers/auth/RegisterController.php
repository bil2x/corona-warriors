<?php

namespace App\Controllers\Auth;

use App\Models\Users;

class RegisterController
{

	public function create()
	{
		//dd('auth');
		return view('auth/register');
	}

	public function store()
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

		//confirm password should match with password
		if (strcmp(request('password'), request('password_confirmation')) !== 0) {
			$_SESSION['error']['password_confirmation'] = "Confirm password not matched";
			return redirect('register');
		}

		// validation check end
		//dd('ready to insert');
		unset($form_data['password_confirmation']);
		//dd($form_data);
		$response = Users::create($form_data);
		if ($response == 1) {
			//dd($response);
			redirect('login');
		}
		//dd($form_data);
	}
}
