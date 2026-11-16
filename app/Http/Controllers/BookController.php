<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function show()
    {
        $books = Book::with('author')->get();

        return view('items', compact('books'));
    }

    public function showById($id)
    {
        $book = Book::with('author')->findOrFail($id);

        return $book->title . " by " .
               $book->author->name . " (" .
               $book->year . ")";
    }
}
