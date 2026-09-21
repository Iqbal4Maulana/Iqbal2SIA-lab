<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa/detail', [MahasiswaController::class, 'detail']);
Route::get('/mahasiswa/profile', [MahasiswaController::class, 'profile']);