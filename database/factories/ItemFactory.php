<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'release_date' => fake()->dateTime(),
            'format_id' => 1,
            'release_type' => fake()->randomElement(['single', 'album', 'ep', 'compilation', 'miscellaneous']),
            'image_url' => 'https://i.discogs.com/LhHZB5sxQAMxxH1Hj6ECcWGkb0a6A0lrNmoZC9drXNw/rs:fit/g:sm/q:90/h:598/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTI3NjM5/MDU0LTE2ODkwMjY5/MTAtMjMwMC5qcGVn.jpeg'
        ];
    }
}
