<?php

namespace Database\Factories;

use App\Models\WhyChooseCard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WhyChooseCard>
 */
class WhyChooseCardFactory extends Factory
{
    protected $model = WhyChooseCard::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order' => fake()->numberBetween(1, 10),
            'badge_number' => sprintf('%02d', fake()->numberBetween(1, 10)),
            'theme_color' => fake()->randomElement(['orange', 'blue', 'teal', 'purple', 'coral', 'cyan']),
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(2),
            'image' => 'assets/images/adv-choose-1.jpg',
            'is_active' => true,
        ];
    }
}
