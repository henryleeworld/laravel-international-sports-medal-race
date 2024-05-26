<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SportsController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [SportsController::class, 'create'])->name('create');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/sports', [SportsController::class, 'store'])->name('store');
Route::get('/sports', [SportsController::class, 'show'])->name('show');
