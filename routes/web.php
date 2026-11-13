<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/buku');

// Tambah, ubah, dan hapus buku hanya untuk pengguna yang sudah login.
// Didaftarkan lebih dulu agar /buku/create tidak tertangkap oleh /buku/{buku}.
Route::resource('buku', BukuController::class)->except(['index', 'show'])->middleware('auth');

// Daftar dan detail buku boleh dilihat siapa saja
Route::resource('buku', BukuController::class)->only(['index', 'show']);

// Breeze mengarahkan pengguna ke "dashboard" setelah login;
// di aplikasi ini dashboard-nya adalah daftar buku
Route::redirect('/dashboard', '/buku')->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
