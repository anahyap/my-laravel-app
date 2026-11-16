<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['George Orwell', '1984', 1949],
            ['Toni Morrison', 'Beloved', 1987],
            ['Alice Walker', 'The Color Purple', 1982],
            ['F. Scott Fitzgerald', 'The Great Gatsby', 1925],
        ];

        foreach ($books as [$name, $title, $year]) {
            $author = Author::firstOrCreate([
                'name' => $name
            ]);

            Book::firstOrCreate([
                'title' => $title,
                'author_id' => $author->id,
            ], [
                'year' => $year
            ]);
        }
    }
}
