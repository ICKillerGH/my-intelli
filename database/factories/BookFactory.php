<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'isbn' => $this->faker->isbn13(),
            'front_page' => "/books/front_page_example.jpg",
            'synopsis' => $this->faker->paragraphs(5, true),
            'number_of_pages' => $this->faker->numberBetween(100, 1000),
            'published_at' => $this->faker->date('Y-m-d'),
        ];
    }
}
