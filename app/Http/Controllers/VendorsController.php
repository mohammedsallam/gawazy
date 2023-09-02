<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    public function editProfile() {
        return view('dashboard.vendor')->with('selected', 'editProfile');
    }
    public function messages() {
        return view('dashboard.vendor')->with('selected', 'messages');
    }
    public function my_favorites() {
        return view('dashboard.vendor')->with(['selected' => 'my_favorites', 'id' => 1]);
    }
    public function notifications() {
        return view('dashboard.vendor')->with('selected', 'notifications');
    }
    public function support() {
        return view('dashboard.vendor')->with('selected', 'support');
    }

    public function add_new_offer() {
        return view('dashboard.vendor')->with('selected', 'add_new_offer');
    }
    public function add_secondary_service() {
        return view('dashboard.vendor')->with('selected', 'add_secondary_service');
    }
    public function draft() {
        return view('dashboard.vendor')->with('selected', 'draft');
    }
    public function main_service() {
        return view('dashboard.vendor')->with('selected', 'main_service');
    }
    public function latest_work() {
        return view('dashboard.vendor')->with(['selected' => 'latest_work', 'id' => 1]);
    }
    public function my_offers() {
        return view('dashboard.vendor')->with('selected', 'my_offers');
    }
    public function my_secondary_services() {
        return view('dashboard.vendor')->with('selected', 'my_secondary_services');
    }
}
