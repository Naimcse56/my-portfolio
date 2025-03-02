<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;

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
    Route::controller(SkillController::class)->prefix('skills')->as('skills.')->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/delete', 'destroy')->name('delete');
    });
    Route::controller(ServiceController::class)->prefix('services')->as('services.')->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/delete', 'destroy')->name('delete');
        Route::post('/status-update', 'status_update')->name('status_update');
    });
    Route::controller(EducationController::class)->prefix('academic-qualifications')->as('education.')->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/delete', 'destroy')->name('delete');
    });
    Route::controller(ExperienceController::class)->prefix('experiences')->as('experiences.')->group(function () {
        Route::get('/list', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::post('/delete', 'destroy')->name('delete');
    });
});
