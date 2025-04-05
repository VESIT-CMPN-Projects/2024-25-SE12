<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;
use App\Models\Donation;
use App\Models\Contact;


Route::get('/', function () {
    return view('homePage');
})->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::get('/team', function () {
    return view('ourTeam');
});

Route::get('/about', function () {
    return view('aboutUs');
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

// Handle login and signup
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Admin route (no authentication)
Route::get('/admin', [ContactController::class, 'index'])->name('admin');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');

Route::get('/admin', function () {
    $donations = Donation::latest()->get();
    $contacts = Contact::latest()->get();
    return view('admin', compact('donations', 'contacts'));
});



Route::get('/admin/manage-events', [EventController::class, 'index'])->name('events.index');
Route::post('/admin/manage-events', [EventController::class, 'store'])->name('events.store');
Route::delete('/admin/manage-events/{id}', [EventController::class, 'destroy'])->name('events.destroy');


