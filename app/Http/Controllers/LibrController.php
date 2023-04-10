<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrController extends Controller
{
    public function index()
    {
        $book = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, dolorum?',
        ];
        $books = array_fill(0, 10, $book);
       
       
        return view('libr.index', compact('books'));
       
    }

    public function show($book)
    {
        $book = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum, dolorum?',
        ];

        return view('libr.show', compact('book'));
    }
}

