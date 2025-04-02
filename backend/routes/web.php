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

Route::get('/whatwedo', function () {
    return view('whatWeDo');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/donatenow', function () {
    return view('donateNow');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});