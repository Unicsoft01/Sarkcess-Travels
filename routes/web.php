<?php

use App\Http\Controllers\McePostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;
use App\Livewire\Admin\HomeIndex;
use App\Livewire\Admin\Inc\AdAssistanceCreate;
use App\Livewire\Admin\Inc\EditAppAssistance;
use App\Livewire\Admin\SocialMediaIndex;
use App\Livewire\Frontend\AboutUs;
use App\Livewire\Frontend\ApplyFreeAdvice;
use App\Livewire\Frontend\Blog;
use App\Livewire\Frontend\ExamsFrontend;
use App\Livewire\Frontend\ContactUs;
use App\Livewire\Frontend\Countries;
use App\Livewire\Frontend\Homepage;
use App\Livewire\Frontend\Courses;
use App\Livewire\Frontend\Faq;
use App\Livewire\Frontend\Inc\Sop;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::get('/', Homepage::class)->name('welcome');
    Route::get('/countries', Countries::class)->name('countries.index');
    Route::get('/courses-abroad', Courses::class)->name('courses.index');
    Route::get('/exams', ExamsFrontend::class)->name('exams.frontend');
    Route::get('/faq', Faq::class)->name('faq.frontend');
    Route::get('/contact-us', ContactUs::class)->name('contact-us.frontend');
    Route::get('/apply-free', ApplyFreeAdvice::class)->name('apply-free.frontend');
    Route::get('/about-us', AboutUs::class)->name('about-us.frontend');
    Route::get('/blog', Blog::class)->name('blog.frontend');
    Route::get('/sop', Sop::class)->name('sop.frontend');
    Route::view('welcome/some/wp
', 'welcome');

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::view('dashboard', 'dashboard')->name('dashboard');

        Route::view('profile', 'profile')->name('profile');
        // frontend
        Route::get('homepage/create', HomeIndex::class)->name('admin.homepage');
        Route::get('update/adassistance/{id}', EditAppAssistance::class)->name('update.admission-assistance');
        Route::get('social-media/create', SocialMediaIndex::class)->name('admin.social-media');
        Route::get('create-admission-assistance/{id}', AdAssistanceCreate::class)->name('admin.admission-assistance-create');

        Route::controller(McePostsController::class)->group(function () {
            // Route::post('exampage/post/{id}', 'ExamPostsCreate')->name('examposts.create');

            Route::patch('/ex_patc', 'ExamPostsUpdate')->name('examposts.patch');
        });
    });


    require __DIR__ . '/auth.php';
});