<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterOptionsController extends Controller
{
    public function signupOptions() {
        return view('auth.register.signup-options');
    }

    public function vendorRegister() {
        return view('auth.register.vendor');
    }

    public function userRegister() {
        return view('auth.register.user');
    }
}
