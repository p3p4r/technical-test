<?php

use App\Enums\Roles;
use App\Http\Controllers\InspectionController;
use App\Models\Role;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\{
    Route,
    Auth
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('login');
});

Route::get('/auth/github', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
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

        return redirect('/');
    } catch(Exception $e) {
        // send notification to user
        // Log error
        return redirect('/login');
    }
});

Route::get('/', function () {
    return redirect('/inspections');
});

Route::prefix('inspections')->group(function () {
    Route::get('/', [InspectionController::class, 'index']);
});
