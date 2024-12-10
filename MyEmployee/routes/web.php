<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\TaskController;


Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register');
Route::match(['get', 'post'], '/', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profil', [PegawaiController::class, 'show'])->middleware(['auth'])->name('profil');
Route::post('/profil', [PegawaiController::class, 'update'])->middleware(['auth'])->name('profil.update');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/absen', [DashboardController::class, 'absen'])->middleware(['auth'])->name('absen');
Route::post('/dashboard/pulang', [DashboardController::class, 'pulang'])->middleware(['auth'])->name('pulang');

Route::get('/task', function () {
    return view('MyEmployeeApp.task');
})->name('task');

Route::get('/notifikasi', [NotifikasiController::class, 'show'])->middleware(['auth'])->name('notifikasi');
Route::post('/notifikasi/clear', [NotifikasiController::class, 'clear'])->middleware(['auth'])->name('notifikasi.clear');
Route::post('/notifikasi/delete/{id}', [NotifikasiController::class, 'delete'])->middleware(['auth'])->name('notifikasi.delete');
Route::post('/notifikasi/markasread/{id}', [NotifikasiController::class, 'markAsRead'])->middleware(['auth'])->name('notifikasi.markasread');

Route::get('/task', [TaskController::class, 'index'])->middleware(['auth'])->name('task');
Route::post('/task/togglecomplete/{task}', [TaskController::class, 'toggleComplete'])->middleware(['auth'])->name('task.toggle');