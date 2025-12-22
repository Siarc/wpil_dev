<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('tracking')->name('tracking.')->group(function () {
    Route::get('/primary', [TrackingController::class, 'primary'])->name('primary');
    Route::get('/partner', [TrackingController::class, 'partner'])->name('partner');
});
