<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function show()
    {
        $books = [
            new Book("Beloved", "Toni Morrison", 1987),
            new Book("The Color Purple", "Alice Walker", 1982),
            new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925),
        ];

        return view('items', compact('books'));
    }

    public function showById($id)
    {
        $books = [
            new Book("Beloved", "Toni Morrison", 1987),
            new Book("The Color Purple", "Alice Walker", 1982),
            new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925),
        ];

        $index = $id - 1;

        if (!isset($books[$index])) {
            abort(404);
        }

        return $books[$index]->toString();
    }
}