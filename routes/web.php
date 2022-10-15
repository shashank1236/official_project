<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Admin

Route::group(['prefix' => 'admin'], function () {
	Route::get('/', [AdminController::class, 'adminView']);
	Route::post('/login', [AdminController::class, 'adminLogin']);

	Route::group(['middleware' => 'adminauth'], function () {
		Route::get('/dashboard', [AdminController::class, 'adminDashboardView'])->name('adminDashboard');
	});
});
