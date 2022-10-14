<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DashboardController;

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

Route::controller(ViewController::class)->group(function () {
    Route::get('signin', 'viewlogin');
    Route::get('register', 'viewregister');
    Route::get('refresh', 'viewrefresh');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'viewjwt');
    Route::get('dashboard', 'viewdashboard');
});
//Route::redirect('/', '/login');
