<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;


Route::view('/','welcome')->name('home');

Route::redirect('/home', '/')->name('home.redierct');

// Route::get('/test', TestController::class)->name('test')->middleware('log');
Route::get('/test', TestController::class)->name('test');


//регистрация и вход

Route::middleware('guest')->group(function () {

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
});

Route::get('libr', [LibrController::class, 'index'])->name('libr');
Route::get('libr/{book}', [LibrController::class, 'show'])->name('libr.show');



// Route::resource('books', BookController::class);