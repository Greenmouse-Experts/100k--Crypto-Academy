<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', [App\Http\Controllers\HomePageController::class, 'test']);

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('/courses', [App\Http\Controllers\HomePageController::class, 'courses'])->name('courses');
Route::get('/faq', [App\Http\Controllers\HomePageController::class, 'faq'])->name('faq');
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');
Route::get('/terms', [App\Http\Controllers\HomePageController::class, 'terms'])->name('terms');
Route::get('/policy', [App\Http\Controllers\HomePageController::class, 'policy'])->name('policy');

// Authentications
Route::get('/sign', [App\Http\Controllers\HomePageController::class, 'sign'])->name('sign');
Route::get('/signUp', [App\Http\Controllers\HomePageController::class, 'signUp'])->name('signUp');
Route::get('/forgot', [App\Http\Controllers\HomePageController::class, 'forgot'])->name('forgot');

// User Dashboard

Route::prefix('dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('user.dashboard');
});