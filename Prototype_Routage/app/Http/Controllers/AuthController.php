<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        // return back()->withErrors(['email' => 'Invalid credentials.']);
        return back()->with('email','Invalid credentials.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('article.index');
    }
}
