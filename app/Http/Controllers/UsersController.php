<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function editProfile() {
        return view('dashboard.user')->with('selected', 'editProfile');
    }
    public function messages() {
        return view('dashboard.user')->with('selected', 'messages');
    }
    public function my_favorites() {
        return view('dashboard.user')->with(['selected' => 'my_favorites', 'id' => 1]);
    }
    public function notifications() {
        return view('dashboard.user')->with('selected', 'notifications');
    }
    public function support() {
        return view('dashboard.user')->with('selected', 'support');
    }
}
