<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;


Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profil', [PegawaiController::class, 'show'])->middleware(['auth'])->name('profil');
Route::post('/profil', [PegawaiController::class, 'update'])->middleware(['auth'])->name('profil.update');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/absen', [DashboardController::class, 'absen'])->middleware(['auth'])->name('absen');
Route::post('/dashboard/pulang', [DashboardController::class, 'pulang'])->middleware(['auth'])->name('pulang');
