<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/admission', function () {
    return view('admission');
})->name('admission');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/faculty', function () {
    return view('faculty');
})->name('faculty');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');


Route::post('/contact', function () {
    // Handle the form submission (you can add form validation here)

    // Example: Send an email, save data, etc.
    // Mail::to('admin@example.com')->send(new ContactFormSubmitted($request));

    // After form submission, redirect back to the contact page with a success message
    return redirect()->route('contact')->with('success', 'Your message has been sent!');
})->name('contact.submit');