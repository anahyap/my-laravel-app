<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        // Create an author
        $author = Author::create([
            'name' => 'George Orwell'
        ]);

        // Create categories
        $fiction = Category::create([
            'name' => 'Fiction'
        ]);

        $dystopian = Category::create([
            'name' => 'Dystopian'
        ]);

        // Create a book
        $book = Book::create([
            'title' => '1984',
            'author_id' => $author->id
        ]);

        // Assign categories to the book
        $book->categories()->attach([
            $fiction->id,
            $dystopian->id
        ]);
    }
}
