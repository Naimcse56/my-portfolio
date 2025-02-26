<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'main_home')->name('main_home');
});
Auth::routes();

Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('home');
        Route::get('/password-settings', 'password_settings')->name('password_settings');
        Route::post('/password-update', 'password_update')->name('password_update');
        Route::get('/avatar-settings', 'avatar_settings')->name('avatar_settings');
        Route::post('/avatar-update', 'avatar_update')->name('avatar_update');
        Route::get('/contact-settings', 'contact_settings')->name('contact_settings');
        Route::post('/contact-update', 'contact_update')->name('contact_update');
        Route::get('/cv-settings', 'cv_settings')->name('cv_settings');
        Route::post('/cv-update', 'cv_update')->name('cv_update');
        Route::get('/about-settings', 'about_settings')->name('about_settings');
        Route::post('/about-update', 'about_update')->name('about_update');
    });
});
