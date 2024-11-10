<?php

use App\Http\Middleware\HtmlMinifier;
use App\Livewire\Frontend\AboutUS;
use App\Livewire\Frontend\HomePage;
use Illuminate\Support\Facades\Route;

Route::middleware([HtmlMinifier::class])->group(function () {

    Route::get('/', HomePage::class)->name('welcome');
    Route::get('/about-us', AboutUS::class)->name('about-us.index');

    
    

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::view('dashboard', 'dashboard')->name('dashboard');

        Route::view('profile', 'profile')->name('profile');
        // frontend
        
        // Route::get('admin/settings', SiteSettings::class)->name('admin.settings');
    });


    require __DIR__ . '/auth.php';
});