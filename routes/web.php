<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/setup', function () {
    return view('setup');
});

Route::get('/setup-success', function () {
    return view('setup-success');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/submit-number', function () {
    return view('submit-number');
});

Route::get('/submit-number-success', function () {
    return view('submit-number-success');
});

Route::get('/add-meal', function () {
    return view('add-meal');
});
