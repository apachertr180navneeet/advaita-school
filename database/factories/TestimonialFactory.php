<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'parent_name' => fake()->name(),
            'child_info' => 'Parent of '.fake()->firstName().' | Class '.fake()->numberBetween(1, 10),
            'content' => fake()->paragraph(),
            'rating' => 5,
            'avatar' => 'assets/images/testimonial-parent-1.jpg',
            'theme_color' => fake()->randomElement(['orange', 'blue']),
            'order' => fake()->numberBetween(1, 10),
            'is_active' => true,
        ];
    }
}
