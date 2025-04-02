<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('homePage');
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

// Admin route (no authentication)
Route::get('/admin', [ContactController::class, 'index'])->name('admin');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/donatenow', function () {
    return view('donateNow');
});