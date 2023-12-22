<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginSubmit()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            session()->regenerate();
            return redirect('dashboard')->with(['success' => 'You are logged in.']);
        } else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function reset()
    {
        return view('auth.reset');
    }

    public function logout()
    {
        return view('auth.login');
    }
}
