<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/doctor/:id', [App\Http\Controllers\DoctorsController::class, 'show']);
Route::get('/doctors', [App\Http\Controllers\DoctorsController::class, 'index']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
