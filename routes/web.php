<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;
use App\Livewire\Frontend\Homepage;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::get('/', Homepage::class)->name('welcome');

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::view('dashboard', 'dashboard')->name('dashboard');

        Route::view('profile', 'profile')->name('profile');

        // Route::get('/departments/create', CreateDepartment::class)->name('departments.create');
    });


    require __DIR__ . '/auth.php';
});