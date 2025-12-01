<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\User\DashboardController;

Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
