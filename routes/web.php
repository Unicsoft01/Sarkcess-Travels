<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;
use App\Livewire\Frontend\Countries;
use App\Livewire\Frontend\Courses;
use App\Livewire\Frontend\Homepage;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::get('/', Homepage::class)->name('welcome');
    Route::get('/countries', Countries::class)->name('countries.index');
    Route::get('/courses-abroad', Courses::class)->name('courses.index');

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::view('dashboard', 'dashboard')->name('dashboard');

        Route::view('profile', 'profile')->name('profile');

    });


    require __DIR__ . '/auth.php';
});