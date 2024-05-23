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
    return view('index');
})->name('index');

Route::get('/single-post', function () {
    return view('single-post');
})->name('single-post');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/for-individuals', function () {
    return view('for-individuals');
})->name('for-individuals');

Route::get('/for-businesses', function () {
    return view('for-businesses');
})->name('for-businesses');

Route::get('/trust-and-security', function () {
    return view('trust-and-security');
})->name('trust-and-security');

Route::get('/customer-experience', function () {
    return view('customer-experience');
})->name('customer-experience');

Route::get('/business-agility', function () {
    return view('business-agility');
})->name('business-agility');

Route::get('/human-resources', function () {
    return view('human-resources');
})->name('human-resources');

Route::get('/legal', function () {
    return view('legal');
})->name('legal');

Route::get('/procurement', function () {
    return view('procurement');
})->name('procurement');

Route::get('/sales', function () {
    return view('sales');
})->name('sales');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup1', function () {
    return view('auth.signup1');
})->name('signup1');

Route::get('/signup2', function () {
    return view('auth.signup2');
})->name('signup2');

Route::get('/signup3', function () {
    return view('auth.signup3');
})->name('signup3');

Route::get('/signup4', function () {
    return view('auth.signup4');
})->name('signup4');

Route::get('/signup5', function () {
    return view('auth.signup5');
})->name('signup5');

Route::get('/e-signature', function () {
    return view('e-signature');
})->name('e-signature');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/solutions', function () {
    return view('solutions');
})->name('solutions');