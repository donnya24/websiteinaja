<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::view('/', 'pages.home')->name('home');

// Halaman layanan
Route::view('/layanan', 'pages.layanan')->name('layanan');

// Halaman portfolio
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');

// Halaman kontak
Route::view('/kontak', 'pages.kontak')->name('kontak');
