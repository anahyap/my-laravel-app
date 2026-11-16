<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }

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
        $book = Book::where('title', 'Beloved')->firstOrFail();

        $response = $this->get('/books/' . $book->id);

        $response->assertStatus(200);

        $response->assertSee('Beloved by Toni Morrison (1987)');
    }

    public function test_invalid_book_id_returns_404(): void
    {
        $response = $this->get('/books/999999');

        $response->assertStatus(404);
    }
}