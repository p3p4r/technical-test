<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * List of inspections
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}