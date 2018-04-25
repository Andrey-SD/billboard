<?php

namespace App\Http\Controllers;

use Auth;
//use App\Models\User;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthLoginController extends Controller
{
    public function login(Request $request)
	{
		
		if (!User::where('name', '=', $request->name)->count() > 0) {
			User::insert(array(
				'name'  => $request->name,
				'password' => Hash::make($request->password)
			));
		}
		
		$credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
			return redirect()->intended('/');
		}
	}
}
