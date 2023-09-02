<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticsController extends Controller
{
    public function help() {
        return view('site.statics.help');
    }
    public function policy() {
        return view('site.statics.policy');
    }
    public function terms() {
        return view('site.statics.terms');
    }
}
