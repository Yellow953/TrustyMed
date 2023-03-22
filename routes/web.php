<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/doctor/{id}', [App\Http\Controllers\DoctorsController::class, 'show']);
Route::get('/doctors/{spectiality}', [App\Http\Controllers\DoctorsController::class, 'speciality']);
Route::get('/doctors', [App\Http\Controllers\DoctorsController::class, 'index']);

Route::get('/appointments/doctor/{id}/{day}', [App\Http\Controllers\AppointmentsController::class, 'another_day']);
Route::get('/appointments/doctor/{id}', [App\Http\Controllers\AppointmentsController::class, 'index']);

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
