<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::view('/', 'pages.home')->name('home');

// Halaman layanan
Route::view('/layanan', 'pages.layanan')->name('layanan');

// Halaman portfolio
Route::view('/portofolio', 'pages.portofolio')->name('portofolio');

// Halaman kontak
Route::view('/kontak', 'pages.kontak')->name('kontak');

// Tambahan: Halaman tentang kami (opsional)
Route::view('/tentang', 'pages.tentang')->name('tentang');