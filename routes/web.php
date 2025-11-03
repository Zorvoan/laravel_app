<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.homepage');
})->name('home');

Route::get('/about', function () {
    return view('about.aboutpage'); //
})->name('about');

Route::get('/contact', function () {
    return view('contact.contactpage');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


