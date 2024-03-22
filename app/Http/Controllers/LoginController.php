<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        // Return the login view
        return view('login');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        // Create a new login record
        $login = new User();
        $login->username = $validatedData['username'];
        $login->password = bcrypt($validatedData['password']);
        $login->save();

        // Redirect to a success page or return a response
        return redirect()->route('dashboard');
    }
    public function signout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
