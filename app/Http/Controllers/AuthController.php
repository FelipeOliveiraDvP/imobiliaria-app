<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return redirect('public.auth.login');
    }

    public function register()
    {
        return redirect('public.auth.register');
    }

    public function forgot()
    {
        return redirect('public.auth.forgot');
    }

    public function reset()
    {
        return redirect('public.auth.reset');
    }
}
