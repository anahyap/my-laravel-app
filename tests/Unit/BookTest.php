<?php

namespace Tests\Unit;

use App\Models\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    public function test_book_to_string_method(): void
    {
        $book = new Book(
            "Beloved",
            "Toni Morrison",
            1987
        );

        $result = $book->toString();

        $this->assertEquals(
            "Beloved by Toni Morrison (1987)",
            $result
        );
    }
}