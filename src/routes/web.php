<?php

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


//Membuat route localhost
Route::get('/', function () {
    return view('partials.welcome');
});

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/profile', function () {
    return view('partials.profile');
})->name('profile');

Route::get('/contact', function () {
    return view('partials.contact');
})->name('contact');