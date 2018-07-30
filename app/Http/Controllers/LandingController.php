<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function call()
    {
        return 0;
    }

    public function index()
    {
        return view('landing-page');
    }
}
