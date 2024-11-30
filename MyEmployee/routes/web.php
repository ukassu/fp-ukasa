<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register', [PegawaiController::class, 'index']);
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('MyEmployeeApp.index');
})->name('login');