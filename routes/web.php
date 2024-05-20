<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('pages.app.dashboard-simpadu', ['type_menu' =>'']);
})->name('login');

Route::get('/', function () {
    // return view('welcome');
    return view('pages.app.dashboard-simpadu', ['type_menu' =>'']);
})->name('login');

Route::get('/register', function () {
    // return view('welcome');
    return view('pages.auth.auth-register', ['type_menu' =>'']);
})->name('register');

Route::get('/forgot', function () {
    // return view('welcome');
    return view('pages.auth.auth-forgot-password', ['type_menu' =>'']);
})->name('forgot');

Route::get('/reset', function () {
    // return view('welcome');
    return view('pages.auth.auth-reset-password', ['type_menu' =>'']);
})->name('reset');