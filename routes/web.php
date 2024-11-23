<?php

use App\Http\Controllers\McePostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HtmlMinifier;
use App\Livewire\Admin\Applications\ApplyFree;
use App\Livewire\Admin\Applications\ApplyNow;
use App\Livewire\Admin\BlogCreate;
use App\Livewire\Admin\BlogIndex;
use App\Livewire\Admin\CountryCreate;
use App\Livewire\Admin\CountryIndex;
use App\Livewire\Admin\HomeIndex;
use App\Livewire\Admin\Inc\AdAssistanceCreate;
use App\Livewire\Admin\Inc\EditAppAssistance;
use App\Livewire\Admin\SiteSettings;
use App\Livewire\Admin\SocialMediaIndex;
use App\Livewire\Admin\UniversityCreate;
use App\Livewire\Admin\UniversityIndex;
use App\Livewire\Frontend\AboutUs;
use App\Livewire\Frontend\ApplyFreeAdvice;
use App\Livewire\Frontend\Blog;
use App\Livewire\Frontend\BlogDetails;
use App\Livewire\Frontend\ComingSoon;
use App\Livewire\Frontend\ExamsFrontend;
use App\Livewire\Frontend\ContactUs;
use App\Livewire\Frontend\Countries;
use App\Livewire\Frontend\Homepage;
use App\Livewire\Frontend\Courses;
use App\Livewire\Frontend\Faq;
use App\Livewire\Frontend\Inc\Sop;
use App\Livewire\Frontend\ShowUniversityDetails;
use App\Livewire\Frontend\Universities;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::get('/', Homepage::class)->name('welcome');

    
    Route::get('/countries', Countries::class)->name('countries.index');
    Route::get('/countries/{slug}', Universities::class)->name('countries.show');

    
    Route::get('/universities', Universities::class)->name('courses.index');
    Route::get('/universities/{slug}', ShowUniversityDetails::class)->name('universities.show');

    
    Route::get('/coming-soon', ComingSoon::class)->name('frontend.coming-soon');
    
    Route::get('/exams', ExamsFrontend::class)->name('exams.frontend');
    Route::get('/faq', Faq::class)->name('faq.frontend');
    Route::get('/contact-us', ContactUs::class)->name('contact-us.frontend');
    Route::get('/apply-free', ApplyFreeAdvice::class)->name('apply-free.frontend');
    Route::get('/about-us', AboutUs::class)->name('about-us.frontend');
    
    Route::get('/blogs', Blog::class)->name('blog.frontend');
    Route::get('/blogs/{slug}', BlogDetails::class)->name('blog.show');
    
    Route::get('admission-assistance/{sop}', Sop::class)->name('sop.frontend');
    // Route::view('welcome/some/wp', 'welcome');

    

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::view('dashboard', 'dashboard')->name('dashboard');

        Route::view('profile', 'profile')->name('profile');
        // frontend
        Route::get('homepage/create', HomeIndex::class)->name('admin.homepage');
        Route::get('update/adassistance/{id}', EditAppAssistance::class)->name('update.admission-assistance');
        Route::get('social-media/create', SocialMediaIndex::class)->name('admin.social-media');
        Route::get('create-admission-assistance/{id}', AdAssistanceCreate::class)->name('admin.admission-assistance-create');
        
        Route::get('admin/blog-posts', BlogIndex::class)->name('admin.blog-posts');
        Route::get('admin/blog-post/create', BlogCreate::class)->name('admin.blog-post.create');

        Route::controller(McePostsController::class)->group(function () {
            Route::post('blogpost/create', 'storeBlogPost')->name('blog-post.create');

            Route::patch('/ex_patc', 'ExamPostsUpdate')->name('examposts.patch');
        });
        
        
        Route::get('admin/countries', CountryIndex::class)->name('admin.countries');
        Route::get('admin/countries/create', CountryCreate::class)->name('admin.countries.create');   
             
        Route::get('admin/universities', UniversityIndex::class)->name('admin.universities');
        Route::get('admin/universities/create', UniversityCreate::class)->name('admin.universities.create');

        Route::get('admin/settings', SiteSettings::class)->name('admin.settings');

        // applications
        Route::get('admin/applications/apply-now', ApplyNow::class)->name('admin.apply-now');
        Route::get('admin/applications/apply-free', ApplyFree::class)->name('admin.apply-free');
    });


    require __DIR__ . '/auth.php';
});