<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LogBook>
 */
class LogBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id' => fake()->randomDigit(),
            'serial_id' => fake()->randomDigit(),
            'user_id' => fake()->randomDigit(),
            'return_date' => fake()->dateTime(),
            'borrow_date' => fake()->dateTime(),




        ];
    }
}