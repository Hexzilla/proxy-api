<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showSignin() {
        // return view('AuthView.login');
        return view('LoginView.login');
    }
    
    public function showSignup() {
        // return view('AuthView.register');
        return view('LoginView.signup');
    }

}
