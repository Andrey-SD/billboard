<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthLoginController extends Controller
{
    public function login(Request $request)
	{
		$user = User::where('name', $request->name)->first();
        if ($user === null) {
            User::insert(array(
                'name'  => $request->name,
				'password' => Hash::make($request->password)
            ));
        }
		$credentials = $request->only('name', 'password');
        Auth::attempt($credentials);
        return redirect()->intended('/');
	}
}
