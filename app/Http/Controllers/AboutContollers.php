<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContollers extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return "Ini adalah halaman About" ;
    }
}
