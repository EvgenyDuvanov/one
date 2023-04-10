<?php
//кабинет пользователя

use App\Http\Controllers\User\BookController;
use Illuminate\Support\Facades\Route;

// Route::prefix('user')->middleware('auth', 'active')->group(function () {

Route::prefix('user')->group(function () {

    Route::redirect('/', '/user/books')->name('user');

    Route::get('books', [BookController::class, 'index'])->name('user.books');   //просмотр 
    Route::get('books/create', [BookController::class, 'create'])->name('user.books.create');  //создание
    Route::post('books', [BookController::class, 'store'])->name('user.books.store');  //создание запрос?
    Route::get('books/{book}', [BookController::class, 'show'])->name('user.books.show');  //отображение
    Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('user.books.edit'); //редактирование
    Route::put('books/{book}', [BookController::class, 'update'])->name('user.books.update'); // запрос на изменение
    Route::delete('books/{book}', [BookController::class, 'destroy'])->name('user.books.destroy'); // удаление
});