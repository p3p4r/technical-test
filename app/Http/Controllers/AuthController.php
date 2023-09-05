<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Logout the user
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}