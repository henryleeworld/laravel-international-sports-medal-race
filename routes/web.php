<?php

use App\Http\Controllers\SportsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
Route::get('/', [SportsController::class, 'create'])->name('create');
Route::post('/sports', [SportsController::class, 'store'])->name('store');
Route::get('/sports', [SportsController::class, 'show'])->name('show');
