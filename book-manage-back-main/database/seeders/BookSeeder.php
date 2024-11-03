<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // At least 10 sample data
        Book::create([
            'title' => 'Sample Book 1',
            'author' => 'Author One',
            'published_year' => 2001,
            'genre' => 'Fiction',
            'description' => 'Description of Sample Book 1'
        ]);

        Book::create([
            'title' => 'Sample Book 2',
            'author' => 'Author Two',
            'published_year' => 2002,
            'genre' => 'Non-Fiction',
            'description' => 'Description of Sample Book 2'
        ]);

        Book::create([
            'title' => 'Sample Book 3',
            'author' => 'Author three',
            'published_year' => 2003,
            'genre' => 'Fiction',
            'description' => 'Description of Sample Book 3'
        ]);

        Book::create([
            'title' => 'Sample Book 4',
            'author' => 'Author Four',
            'published_year' => 2004,
            'genre' => 'Non-Fiction',
            'description' => 'Description of Sample Book 4'
        ]);

        Book::create([
            'title' => 'Sample Book 5',
            'author' => 'Author five',
            'published_year' => 2005,
            'genre' => 'Fiction',
            'description' => 'Description of Sample Book 5'
        ]);

        Book::create([
            'title' => 'Sample Book 6',
            'author' => 'Author Six',
            'published_year' => 2006,
            'genre' => 'Non-Fiction',
            'description' => 'Description of Sample Book 6'
        ]);

        Book::create([
            'title' => 'Sample Book 7',
            'author' => 'Author Seven',
            'published_year' => 2007,
            'genre' => 'Fiction',
            'description' => 'Description of Sample Book 7'
        ]);

        Book::create([
            'title' => 'Sample Book 8',
            'author' => 'Author Eight',
            'published_year' => 2008,
            'genre' => 'Non-Fiction',
            'description' => 'Description of Sample Book 8'
        ]);

        Book::create([
            'title' => 'Sample Book 9',
            'author' => 'Author Nine',
            'published_year' => 2009,
            'genre' => 'Fiction',
            'description' => 'Description of Sample Book 9'
        ]);

        Book::create([
            'title' => 'Sample Book 10',
            'author' => 'Author Ten',
            'published_year' => 2010,
            'genre' => 'Non-Fiction',
            'description' => 'Description of Sample Book 10'
        ]);
        
    }
}
