<?php

use App\Http\Controllers\InspectionController;
use App\Models\Inspection;
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

Route::get('/', function () {
    return redirect('/inspections');
});

Route::prefix('inspections')->group(function () {
    Route::get('/', [InspectionController::class, 'index']);
});