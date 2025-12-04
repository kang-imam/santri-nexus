<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\language\LanguageController;

use App\Http\Controllers\Umum\HomeController;

use App\Http\Controllers\front_pages\Pricing;
use App\Http\Controllers\front_pages\Payment;
use App\Http\Controllers\front_pages\Checkout;
use App\Http\Controllers\front_pages\HelpCenter;
use App\Http\Controllers\front_pages\HelpCenterArticle;
use App\Http\Controllers\User\DashboardController;

Route::get('/lang/{locale}', [LanguageController::class, 'swap']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/front-pages/pricing', [Pricing::class, 'index'])->name('front-pages-pricing');
Route::get('/front-pages/payment', [Payment::class, 'index'])->name('front-pages-payment');
Route::get('/front-pages/checkout', [Checkout::class, 'index'])->name('front-pages-checkout');
Route::get('/front-pages/help-center', [HelpCenter::class, 'index'])->name('front-pages-help-center');
Route::get('/front-pages/help-center-article', [HelpCenterArticle::class, 'index'])->name('front-pages-help-center-article');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
