<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.auth-login', ['type_menu' => '']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function()
    {
        return view('pages.app.dashboard-siakad', ['type_menu' => '']);
    })->name('home');
});
/*
Route::get('/auth-login', function () {
    return view('auth.auth-login', ['type_menu' => '']);
});

Route::get('/auth-register', function () {
    return view('auth.auth-register', ['type_menu' => '']);
});

Route::get('/auth-forgot-password', function () {
    return view('auth.auth-forgot-password', ['type_menu' => '']);
});

Route::get('/auth-reset-password', function () {
    return view('auth.auth-reset-password', ['type_menu' => '']);
});
*/
