<?php

namespace Database\Factories;

use App\Models\GalleryItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GalleryItem>
 */
class GalleryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => 'assets/images/gallery/gallery-school-band.jpg',
            'category' => fake()->words(2, true),
            'icon' => 'fa-solid fa-camera',
            'caption' => fake()->sentence(),
            'custom_class' => null,
            'order' => fake()->numberBetween(1, 20),
            'is_active' => true,
        ];
    }
}
