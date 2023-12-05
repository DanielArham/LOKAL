<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\AccountController;


Route::get('/Hapusakun', [AccountController::class, 'confirmDelete']);
Route::post('/Hapusakun', [AccountController::class, 'deleteAccount'])->name('deleteAccount.store');

Route::get('/Gantipw', [PasswordController::class, 'showGantipwForm']);
Route::post('/Gantipw', [PasswordController::class, 'changePassword'])->name('changePassword.store');;

Route::get('/Registration', [RegistrationController::class, 'showRegistrationForm']);
Route::post('/Registration', [RegistrationController::class, 'register'])->name('register.store');

Route::get('/Login', [AuthController::class, 'showLoginForm']);
Route::post('/Login', [AuthController::class, 'login'])->name('login.store');

Route::get('/website', [AuthController::class, 'website']);

Route::get('/', function () {
    return view('website');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Logout', function () {
    return view('Logout');
});

Route::get('/Hapusakun', function () {
    return view('Hapusakun');
});