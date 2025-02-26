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
    });
});
