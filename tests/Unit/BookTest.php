<?php

namespace Tests\Unit;

use App\Models\Book;
use App\Models\Author;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function test_book_to_string_method(): void
    {
        $author = new Author([
            'name' => 'Toni Morrison'
        ]);

        $book = new Book([
            'title' => 'Beloved',
            'year' => 1987
        ]);

        $book->setRelation('author', $author);

        $result = $book->toString();

        $this->assertEquals(
            'Beloved by Toni Morrison (1987)',
            $result
        );
    }
}