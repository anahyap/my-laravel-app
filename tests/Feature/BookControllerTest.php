<?php

namespace Tests\Feature;

use Tests\TestCase;

class BookControllerTest extends TestCase
{
    public function test_books_can_be_listed(): void
    {
        $response = $this->get('/books');

        $response->assertStatus(200);

        $response->assertSee('Beloved');
        $response->assertSee('The Color Purple');
        $response->assertSee('The Great Gatsby');
    }

    public function test_single_book_can_be_retrieved_by_id(): void
    {
        $response = $this->get('/books/1');

        $response->assertStatus(200);

        $response->assertSee('Beloved by Toni Morrison (1987)');
    }

    public function test_invalid_book_id_returns_404(): void
    {
        $response = $this->get('/books/999');

        $response->assertStatus(404);
    }
}