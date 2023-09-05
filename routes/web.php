<?php

use App\Http\Controllers\{
    AuthController,
    InspectionController,
    SocialiteController
};
use Illuminate\Support\Facades\Route;


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
})->name('login');

Route::get('logout', [AuthController::class, 'logout']);

Route::get('/auth/github', [SocialiteController::class, 'githubRedirect']);

Route::get('/auth/callback', [SocialiteController::class, 'githubLogin']);

Route::middleware(['auth'])->get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('/inspections');
});

Route::prefix('inspections')->middleware(['auth'])->group(function () {
    Route::get('/', [InspectionController::class, 'index']);
});

// Demonstration purposes
Route::get('/guest', [InspectionController::class, 'index']);
