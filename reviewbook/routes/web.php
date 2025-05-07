<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'index']); // untuk halaman awal
Route::get('/register', [DashboardController::class, 'biodata'])->name('register'); // untuk form sign up
Route::get('/register', [FormController::class, 'biodata'])->name('register');
Route::post('/register', [FormController::class, 'submit'])->name('submit.form');
Route::get('/welcome', [FormController::class, 'welcome'])->name('welcome');

