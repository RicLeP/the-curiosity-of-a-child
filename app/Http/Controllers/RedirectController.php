<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'error';


        //return redirect()->away('https://curiosityofpod.com' . request()->getRequestUri(), 301);
    }
}
