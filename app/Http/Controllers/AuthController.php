<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

	public function register() {
		return view('auth/register');
	}

	public function welcome() {
		$data['nama'] = [
			'firstname' => request('firstname'),
			'lastname' => request('lastname')
 		];
		return view('auth/welcome', $data);
	}

}
