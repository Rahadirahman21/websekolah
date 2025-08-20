<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('welcome');
Route::get('/profil', [UserController::class, 'profilIndex'])->name('profil');
Route::get('/jurusan', [UserController::class, 'jurusanIndex'])->name('jurusan');
Route::get('/eskul', [UserController::class, 'eskulIndex'])->name('eskul');
Route::get('/sarpras', [UserController::class, 'sarprasIndex'])->name('sarpras');
Route::get('/rombel', [UserController::class, 'rombelIndex'])->name('rombel');
