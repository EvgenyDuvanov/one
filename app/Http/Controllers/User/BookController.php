<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::query()->paginate(9);

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
        'published_at' => ['nullable', 'string', 'date'],
        'published' => ['nullable', 'boolean'],
       ]);
       

       $book = Book::query()->firstOrcreate([
        'user_id' => User::query()->value('id'),
        'title' => $validated['title'], 
       ], [
        'content' => $validated['content'],
        'published_at' => new Carbon($validated['published_at'] ?? null),
        'published' => $validated['published'] ?? false,
       ]);

        session(['alert' => __('Книга создана!')]);

        return redirect()->route('user.books.show', $book);
    }

    public function show(Request $request, Book $book)
    {
        return view('user.books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('user.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'boolean'],
            ]);

        $book->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published_at' => new Carbon($validated['published_at'] ?? null),
            'published' => $validated['published'] ?? false,
        ]);

    session(['alert' => __('Изменения сохранены!')]);

        return redirect()->route('user.books.show', $book);
    }

    // public function delete(Book $book)
    public function delete($book)
{

    // $book->delete([
    //     'title' => ['title'],
    //     'content' => ['content'],
    //     'published_at' => new Carbon($validated['published_at'] ?? null),
    //     'published' => $validated['published'] ?? false,
    // ]);

    $book = Book::find()->delete($book);

    // Book::find($book)->delete();

    session(['alert' => __('Книга удалена!')]);
    return redirect()->route('user.books');

    }
}
