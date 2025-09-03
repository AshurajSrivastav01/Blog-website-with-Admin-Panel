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

Route::view('/', 'frontend.blog', ['Title' => 'Home - Modern Blog']);
Route::view('/about', 'frontend.about', ['Title' => 'About - Modern Blog']);
Route::view('/contact', 'frontend.contact', ['Title' => 'Contact - Modern Blog']);
