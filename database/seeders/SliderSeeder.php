<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Slider::count() === 0) {
            Slider::create([
                'title_1' => 'Building Curious Minds.',
                'title_2' => 'Shaping Confident Futures.',
                'description' => 'Where knowledge meets values, creativity meets opportunity, and every child is encouraged to discover their true potential.',
                'image' => 'assets/images/hero-slider-campus.png',
                'image_on_image' => 'assets/images/contact-student-pointing-transparent.png',
                'order' => 1,
                'is_active' => true,
            ]);

            Slider::create([
                'title_1' => 'Nurturing Global Thinkers.',
                'title_2' => 'CBSE Accredited Excellence.',
                'description' => 'Empowering students through innovative STEAM labs, holistic sports academy, and world-class faculty dedicated to individualized growth.',
                'image' => 'assets/images/hero-slider-excellence-banner.png',
                'image_on_image' => 'assets/images/about-cta-students-trio.png',
                'order' => 2,
                'is_active' => true,
            ]);
        }
    }
}
