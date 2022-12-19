<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function login()
    {
        return view('home.login');
    }

    public function signUp()
    {
        return view('home.signup');
    }

    public function forgetPassword()
    {
        return view('home.forget-password');
    }
}
