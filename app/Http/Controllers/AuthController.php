<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }
    public function resetPassword()
    {
        return view('auth.reset-password');
    }
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }
}
