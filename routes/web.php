<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HikingController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(HikingController::class)->prefix('hikings')->group(function () {
        Route::get('', 'index')->name('hikings');
        Route::get('create', 'create')->name('hikings.create');
        Route::post('store', 'store')->name('hikings.store');
        Route::get('show/{id}', 'show')->name('hikings.show');
        Route::get('edit/{id}', 'edit')->name('hikings.edit');
        Route::put('edit/{id}', 'update')->name('hikings.update');
        Route::delete('destroy/{id}', 'destroy')->name('hikings.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
