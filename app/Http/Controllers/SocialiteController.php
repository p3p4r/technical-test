<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class SocialiteController extends Controller
{
     /**
     * Redirect user to github
     * @return void
     */
    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Login user
     * @return void
     */
    public function githubLogin()
    {
        $github_user = Socialite::driver('github')->user();

        try {
            $user = User::firstOrCreate([
                'email' => $github_user->email,
            ], [
                'role_id' => Roles::INSPECTOR,
                'name' => $github_user->name,
                'password' => Str::random(6)
            ]);

            Auth::login($user);
            Toastr::success('You Have Successfully Login', 'Notification');
            return redirect('/inspections'); //Prod: redirect('/');
        } catch (Exception $e) {
            // Log error
            Toastr::error('You Have Successfully Logout', 'Notification');
            return redirect('/login');
        }
    }
}
