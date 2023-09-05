<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class AuthController extends Controller
{
    /**
     * Logout the user
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        Toastr::success('You Have Successfully Logout', 'Notification');
        return redirect('/login');
    }
}