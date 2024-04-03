<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Darshil-Nathani', function () {
    return view('user.index');
});
