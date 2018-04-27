<?php

namespace Billboard\Http\Controllers\Auth;

use Auth;
use Billboard\User;
use Illuminate\Http\Request;
use Billboard\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthLoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('name', $request->name)->first();
        if ($user === null) {
            User::insert(array(
                'name'  => $request->name,
                'password' => Hash::make($request->password)
            ));
        }
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return redirect('/')->withInput();
        }
    }
}
