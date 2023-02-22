<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class DemoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        dd('Working');
    }
}
