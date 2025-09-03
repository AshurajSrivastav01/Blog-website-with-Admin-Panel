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

// Frontend Routes
Route::view('/', 'frontend.blog', ['Title' => 'Home - Modern Blog']);
Route::view('/about', 'frontend.about', ['Title' => 'About - Modern Blog']);
Route::view('/contact', 'frontend.contact', ['Title' => 'Contact - Modern Blog']);
Route::view('/Categories', 'frontend.categories', ['Title' => 'Categories - Modern Blog']);

// Admin Routes


// Authontication Routes
Route::view('/cb-user/login', 'auth.login', ['Title' => 'User Login - Modern Blog']);
Route::view('/cb-user/forgot-password', 'auth.forgotPassword', ['Title' => 'Forgot Password - Modern Blog']);
Route::prefix('user')->group(function () {
    Route::view('/register', 'auth.register', ['Title' => 'User Register - Modern Blog']);
    Route::view('/reset-password', 'auth.changePassword', ['Title' => 'Reset Password - Modern Blog']);
});


