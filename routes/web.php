<?php

use App\Http\Controllers\PeriodController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('periods', [PeriodController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('periods');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
