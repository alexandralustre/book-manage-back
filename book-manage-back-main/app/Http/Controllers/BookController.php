<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // List all books
    public function index()
    {
        return Book::all();
    }

    // Show details of a specific book
    public function show($id)
    {
        return Book::findOrFail($id);
    }

    // Create a new book
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'published_year' => 'required|integer',
            'genre' => 'required|string',
            'description' => 'required|string',
        ]);

        return Book::create($request->all());
    }

    // Update an existing book
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
            'title' => 'string',
            'author' => 'string',
            'published_year' => 'integer',
            'genre' => 'string',
            'description' => 'string',
        ]);

        $book->update($request->all());
        return $book;
    }

    // Delete a book
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(['message' => 'Book deleted successfully']);
    }
}
