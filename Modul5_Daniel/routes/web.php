<?php

use Illuminate\Support\Facades\Route;

Route::get('/dosens', function () {
    return view('dosens.index'); // Akses dosens/index.blade.php
});

Route::get('/dosens/create', function () {
    return view('dosens.create'); // Akses dosens/profile.blade.php
});

Route::get('/dosens/show', function () {
    return view('dosens.show'); // Akses dosens/profile.blade.php
});

Route::get('/mahasiswas', function () {
    return view('mahasiswas.index'); // Akses mahasiswas/index.blade.php
});

Route::get('/mahasiswas/create', function () {
    return view('mahasiswas.create'); // Akses mahasiswas/nilai.blade.php
});

Route::get('/mahasiswas/show', function () {
    return view('mahasiswas.show'); // Akses mahasiswas/nilai.blade.php
});



// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

// Dosen Routes
Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
Route::get('/dosens/{id}', [DosenController::class, 'show'])->name('dosens.show');
Route::get('/dosens/create', [DosenController::class, 'getCreateForm'])->name('dosens.create');
Route::post('/dosens', [DosenController::class, 'store'])->name('dosens.store');
Route::get('/dosens/{id}/edit', [DosenController::class, 'getEditForm'])->name('dosens.edit');
Route::put('/dosens/{id}', [DosenController::class, 'update'])->name('dosens.update');
Route::delete('/dosens/{id}', [DosenController::class, 'destroy'])->name('dosens.destroy');

// Mahasiswa Routes
Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
Route::get('/mahasiswas/{id}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
Route::get('/mahasiswas/create', [MahasiswaController::class, 'getCreateForm'])->name('mahasiswas.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/mahasiswas/{id}/edit', [MahasiswaController::class, 'getEditForm'])->name('mahasiswas.edit');
Route::put('/mahasiswas/{id}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
Route::delete('/mahasiswas/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');
