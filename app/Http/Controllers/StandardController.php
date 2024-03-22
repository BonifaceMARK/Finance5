<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandardController extends Controller
{
    public function standardDash()
    {
        // Return the login view
        return view('standards');
    }
}
