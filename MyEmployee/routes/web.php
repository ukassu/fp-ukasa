<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('MyEmployeeApp.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profil', function() {
    return view('MyEmployeeApp.profil');
})->middleware(['auth'])->name('profil');