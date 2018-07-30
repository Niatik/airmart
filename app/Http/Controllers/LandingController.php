<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as Mail;
use App\Mail\CallOrder as CallOrder;

class LandingController extends Controller
{
    public function call()
    {
        Mail::send(
            new CallOrder(
               'n.dragunov@energouchet.kz'
            )
        );
    }

    public function index()
    {
        return view('landing-page');
    }
}
