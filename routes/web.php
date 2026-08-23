<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/pemerintahan', [PageController::class, 'pemerintahan'])->name('pemerintahan');
Route::get('/potensi', [PageController::class, 'potensi'])->name('potensi');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [PageController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/transparansi', [PageController::class, 'transparansi'])->name('transparansi');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [PageController::class, 'kirimPesanKontak'])->name('kontak.kirim');

// Rute Kelompok KKN diarahkan ke PageController agar data $desa ikut terbawa
Route::get('/kelompok', [PageController::class, 'kelompok'])->name('kelompok');