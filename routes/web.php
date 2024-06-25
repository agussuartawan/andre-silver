<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

// PUBLIC ROUTE
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/products', [HomeController::class,'products'])->name('products');
Route::get('/teams', [HomeController::class,'teams'])->name('teams');
Route::post("/subscribe", [SubscriberController::class, 'store'])->name('subscribe.store');

// DASHBOARD ROUTE
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');

    Route::get('/package/{package}', [PackageController::class, 'edit'])->name('package.edit');
    Route::patch('/package/{package}', [PackageController::class, 'update'])->name('package.update');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';