<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('user.index');
});
Route::get('/peserta', [PesertaController::class, 'index'])->name('pages.index');

Route::resource('/pages',\App\Http\Controllers\PesertaController::class);
Route::resource('/instruktur',\App\Http\Controllers\InstrukturController::class);
Route::resource('/jadwal', \App\Http\Controllers\JadwalController::class);


Route::get('/user.sign-up', [\App\Http\Controllers\UserController::class, 'signup'])->name('user.sign-up');
Route::post('/user/sign-up', [\App\Http\Controllers\UserController::class, 'registration'])->name('user.registration');

Route::get('/user.sign-in', [\App\Http\Controllers\UserController::class, 'index'])->name('user.sign-in');
Route::get('/user/sign-in', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');

Route::get('/pages.index', [\App\Http\Controllers\PesertaController::class, 'index'])->name('pages.index');
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');

Route::get('/user.profile', [\App\Http\Controllers\UserController::class, 'profil'])->name('user.profile');
