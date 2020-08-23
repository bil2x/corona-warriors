<?php

namespace App\Controllers\Auth;

use App\Models\User;

class ResetController
{

	public function create()
	{
		return view('auth/reset');
	}
	public function sendPasswordLink()
	{
		//dd(request());
		// validation check start
		if (empty(request())) {
			$_SESSION['error']['email'] = "Email field is required";
			return redirect('reset');
		}
		// email validation checking
		if (!filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
			$_SESSION['error']['email'] = "Validate email address required";
			return redirect('reset');
		}
		// validation check end
		User::resetAttempt(request());
		redirect('home');
	}
}
