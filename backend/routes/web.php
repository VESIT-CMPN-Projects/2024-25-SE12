<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/team', function () {
    return view('ourTeam');
});


Route::get('/donateus', function () {
    return view('donateUs');
});

Route::get('/donateus', function () {
    return view('donateUs');
});

