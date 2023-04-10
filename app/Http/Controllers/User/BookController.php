<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookController extends Controller
{
    // public function __construct() {
   
    // }
        
    public function index()
    {
        return view('user.books.index');
    }

    public function create()
    {
        return view('user.books.create');
    }

    public function store()
    {
        return 'Запрос создания книг';
    }

    public function show($book)
    {
        return view('user.books.show', compact('book'));
    }

    public function edit($book)
    {
        return view('user.books.edit', compact('book'));
    }

    public function update()
    {
        return 'Запрос изменения книг';
    }

    public function delete()
    {
        return "Запрос удаление книги";
    }
}
