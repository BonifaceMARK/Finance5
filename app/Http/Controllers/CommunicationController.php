<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function communcationDash()
    {
        // Return the login view
        return view('cac');
    }
}
