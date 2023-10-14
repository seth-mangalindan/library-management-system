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
            'title' => fake()->company(),
            'authors' => fake()->name(),
            'average_rating' => fake()->randomFloat($nbMaxDecimals = 2),
            'isbn' => fake()->numberBetween($min = 1000000000, $max = 9999999999),
            'isbn13' => fake()->numberBetween($min = 1000000000000, $max = 9999999999999),
            'language_code' => fake()->languageCode(),
            'num_pages' => fake()->randomNumber(),
            'ratings_count' => fake()->randomNumber($nbDigits = 7),
            'text_reviews_count' => fake()->randomNumber($nbDigits = 5),
            'publication_date' => fake()->dateTime(),
            'publisher' => fake()->name(),
        ];
    }
}