<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;

Route::resource('jadwal', JadwalController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

