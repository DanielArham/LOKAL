<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/cara-pemesanan', function () {
    return view('cara-pemesanan');
});

Route::get('/jasalogo', function () {
    return view('desain-logo');
});

Route::get('/jasabrosur', function () {
    return view('desain-brosur');
});

Route::get('/jasavector', function () {
    return view('desain-vector');
});

Route::get('/checkoutt', function () {
    return view('checkoutt');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/bayar', function () {
    return view('bayar');
});
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::get('/website', [AuthController::class, 'website']);

Route::get('/Registration', [RegistrationController::class, 'showRegistrationForm']);
Route::post('/Registration', [RegistrationController::class, 'register'])->name('register.store');

Route::get('/logout', function () {
    return view('logout');
});















































