<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LibrController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:50'],
            'from_date' => ['nullable', 'string', 'date'],
            'to_date' => ['nullable', 'string', 'date', 'after:from_date'],
            'tag' => ['nullable', 'string', 'max:10'],

        ]);

        $query = Book::query()
        ->where('published', true)
        ->whereNotNull('published_at');

        if($search =  $validated['search'] ?? null) {
            $query->where('title', 'like', "%{$search}%");
        }

        if($fromDate =  $validated['from_date'] ?? null) {
            $query->where('published_at', '>=', new Carbon($fromDate));
        }

        if($toDate =  $validated['to_date'] ?? null) {
            $query->where('published_at', '<=', new Carbon($toDate));
        }

        if($tag =  $validated['tag'] ?? null) {
            $query->whereJsonContains('tags', $tag);
        }

        $books = $query->latest('published_at')
        ->paginate(9);
        

        return view('libr.index', compact('books'));
       
    }

    public function show(Request $request, Book $book)
    {
        return view('libr.show', compact('book'));
    }
}

