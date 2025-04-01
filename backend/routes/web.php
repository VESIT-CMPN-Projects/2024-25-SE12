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

