<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class ,'landing']);
Route::post('click', [MainController::class, 'click'])->name('click');

Route::middleware('guest')->group(function() {
	Route::view('login', 'auth')->name('login.get');
	Route::post('login', [AuthController::class, 'login'])->name('login.post');
});

Route::middleware('auth')->group(function() {
	Route::post('logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('dashboard', [MainController::class, 'statistics'])->name('dashboard');
});
