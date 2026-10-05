<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\QuestionController;

Route::get('/mahasiswa/detail', [MahasiswaController::class, 'detail']);
Route::get('/mahasiswa/profile', [MahasiswaController::class, 'profile']);


Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
Route::get('question', [QuestionController::class, 'index'])
		->name('question.index');