<?php
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









































