<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $book = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, dolorum?',
        ];
        $books = array_fill(0, 10, $book);

        return view('user.books.index', compact('books'));
    }

    public function create()
    {
        return view('user.books.create');
    }

    public function store(Request $request)
    {
       $validated = $request->validate([
        'title' => ['required', 'string', 'max:100'],
        'content' => ['required', 'string', 'max:10000'],
       ]);

        dd($validated);

        // dd($title, $content);

        session(['alert' => __('Книга создана!')]);


        return redirect()->route('user.books.show', 123);
    }

    public function show($book)
    {
        $book = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, dolorum?',
        ];
        return view('user.books.show', compact('book'));
    }

    public function edit($book)
    {
        $book = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, dolorum?',
        ];
        return view('user.books.edit', compact('book'));
    }

    public function update(Request $request, $book)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ]);

    dd($validated);

    session(['alert' => __('Изменения сохранены!')]);

        return redirect()->back();
    }

    public function delete($book)
    {
        return redirect()->route('user.books.show', $book);

    }
}
