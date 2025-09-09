<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($credentials)) {
            // Authentication passed, regenerate session
            $request->session()->regenerate();

            return redirect('/dashboard')->with('message', 'Login successful!');
        }

        // Authentication failed
        return redirect('/as-user/login')->with('message', 'Wrong or invalid User ID and Password!');
    }
}
