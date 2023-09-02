<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function user() {
        return view('dashboard.user')->with('id', 1);
    }
    public function vendor() {
        return view('dashboard.vendor')->with('id', 1);
    }
    public function categories() {
        return view('site.main.categories');
    }
    public function services() {
        return view('site.main.services.services')->with('id', 1);
    }
    public function servicePage() {
        return view('site.main.services.servicePage')->with('id', 1);
    }
    public function offers() {
        return view('site.main.offers.offers')->with('id', 1);
    }
    public function offerPage() {
        return view('site.main.offers.offerPage')->with('id', 1);
    }
}
