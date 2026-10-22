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
                'btn_1_text' => 'Apply for Admission',
                'btn_1_url' => '/online-registration',
                'btn_2_text' => 'Explore Our School',
                'btn_2_url' => '/about-us',
                'image' => 'assets/images/hero-slider-campus.png',
                'order' => 1,
                'is_active' => true,
            ]);

            Slider::create([
                'title_1' => 'Nurturing Global Thinkers.',
                'title_2' => 'CBSE Accredited Excellence.',
                'description' => 'Empowering students through innovative STEAM labs, holistic sports academy, and world-class faculty dedicated to individualized growth.',
                'btn_1_text' => 'Apply for Admission',
                'btn_1_url' => '/online-registration',
                'btn_2_text' => 'Explore Our School',
                'btn_2_url' => '/about-us',
                'image' => 'assets/images/hero-slider-excellence-banner.png',
                'order' => 2,
                'is_active' => true,
            ]);

            Slider::create([
                'title_1' => 'Empowering Young Leaders.',
                'title_2' => 'Holistic Values & Character.',
                'description' => 'Fostering innovation through robotics, sports excellence, and creative arts from Pre-Primary to Class 10.',
                'btn_1_text' => 'Apply for Admission',
                'btn_1_url' => '/online-registration',
                'btn_2_text' => 'Explore Our School',
                'btn_2_url' => '/about-us',
                'image' => 'assets/images/about-advaita-banner.jpg',
                'order' => 3,
                'is_active' => true,
            ]);
        }
    }
}
