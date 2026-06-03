<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', fn() => view('about'));

Route::get('/contact',  [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/gallery', fn() => view('gallery'))->name('gallery');

Route::get('/services',          [ServicesController::class, 'index'])->name('services');
Route::get('/services/{slug}',   [ServicesController::class, 'show'])->name('services.show');

Route::get('/blog',        [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Legal pages
Route::get('/privacy',       fn() => view('privacy'))->name('privacy');
Route::get('/terms',         fn() => view('terms'))->name('terms');
Route::get('/cookie-policy', fn() => view('cookie-policy'))->name('cookie-policy');