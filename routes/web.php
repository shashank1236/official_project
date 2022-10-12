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
Route::get('/admin', function () {
    return view('admin.admin_login');
});

Route::post('/admin/login', [AdminController::class, 'adminLogin'], ["data", "shashank"]);

Route::get('/admin/dashboard', function () {
    return view('admin.admin_dashboard');
});
