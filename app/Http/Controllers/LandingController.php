<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as Mail;
use App\Mail\CallOrder as CallOrder;

class LandingController extends Controller
{
    /**
     * Sent emails.
     *
     * @param  Request  $request
     * @return Response
     */
    public function call(Request $request)
    {
        $name = $request->input('call-name');
        $phone= $request->input('call-phone');
        $email = $request->input('call-email');

        Mail::send(
            new CallOrder(
                $email,
                $phone,
                $name
            )
        );

        Mail::send(
            new CallOrder(
               'n.dragunov@energouchet.kz',
               $phone,
               $name
            )
        );

        return view('landing-page');
    }

    public function index()
    {
        return view('landing-page');
    }
}
