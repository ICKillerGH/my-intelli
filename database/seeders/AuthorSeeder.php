<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    use WithoutModelEvents;
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::factory(20)->create();

        foreach ($authors as $author) {
            $booksCount = random_int(1, 5);
            
            Book::factory($booksCount)->for($author)->create();

            $author->books_count = $booksCount;
            $author->save();
        }
    }
}
