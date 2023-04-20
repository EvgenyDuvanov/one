<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrController extends Controller
{
    public function index(Request $request)
    {
    // $data = $request->all();
    // dd($data);
    $search = $request->input('search');
    $category_id = $request->input('category_id');

    // dd($search, $category_id);

        $book = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, dolorum?',
            'category_id' => 1,
        ];

        $books = array_fill(0, 10, $book);

        $books = array_filter($books, function ($book) use ($search, $category_id) {
            if ($search && ! str_contains(strtolower($book->title), strtolower ($search))) {
                    return false;
            }

            if ($category_id && $book->category_id != $category_id) {
                return false;
            }
            return true;
        });
       
       $categories = [
        null => __('Все категории'),
        1 => __('Первая категория'), 
        2 => __('Вторая категория')];

        return view('libr.index', compact('books', 'categories'));
       
    }

    public function show(Request $request)
    {
        

        return view('libr.show', compact('book'));
    }
}

