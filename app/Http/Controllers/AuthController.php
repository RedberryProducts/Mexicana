<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	/**
	 * Log in to the liderator admin panel.
	 */
	public function login(LoginRequest $loginRequest)
	{
		if(Auth::attempt($loginRequest->validated()))
		{
			return redirect()->route('dashboard');
		}
		else
		{
			return view('auth')
				->with(
					'invalidCredentials', 
					'Invalid credentials provided.',
				);
		}
	}

	/**
	 * Logout from liderator admin panel.
	 */
	public function logout()
	{
		Auth::logout();
		return redirect()->route('login.get');
	}
}