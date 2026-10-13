<?php

namespace Database\Seeders;

use App\Models\Pillar;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class PillarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Section Header Settings
        $defaults = [
            'pillar_section_eyebrow' => 'WHAT MAKES ADVAITA SPECIAL',
            'pillar_section_title_1' => 'Three pillars that shape',
            'pillar_section_title_2' => 'brighter futures.',
            'pillar_section_subtitle' => 'At Advaita, everything we do is driven by a clear purpose — to create an environment where children learn, grow, and discover their unique potential.',
            'pillar_section_cta_text' => 'Discover the Advaita Difference',
            'pillar_section_cta_url' => '#why-choose',
        ];

        foreach ($defaults as $key => $value) {
            Setting::firstOrCreate(['key' => $key], ['value' => $value]);
        }

        // 2. Seed 3 Pillars
        if (Pillar::count() === 0) {
            Pillar::create([
                'order' => 1,
                'badge_number' => '01',
                'theme_color' => 'orange',
                'title' => 'Future-ready Labs & Smart Classrooms',
                'description' => 'From robotics for the youngest to digital language for senior school — learning that comes alive when you can touch it.',
                'image' => 'assets/images/pillar-card-1.jpg',
                'tags' => [
                    ['label' => 'Robotics Lab', 'icon' => 'fa-solid fa-robot'],
                    ['label' => 'Computer Lab', 'icon' => 'fa-solid fa-display'],
                    ['label' => 'Science Lab', 'icon' => 'fa-solid fa-flask'],
                    ['label' => 'Digital Maths Lab', 'icon' => 'fa-solid fa-calculator'],
                    ['label' => 'Language Lab', 'icon' => 'fa-solid fa-earth-americas'],
                ],
                'is_active' => true,
            ]);

            Pillar::create([
                'order' => 2,
                'badge_number' => '02',
                'theme_color' => 'blue',
                'title' => 'A Vibrant Year-round Calendar',
                'description' => 'Beyond books — the sports, music, art and travel that turn a school into a community.',
                'image' => 'assets/images/pillar-card-2.jpg',
                'tags' => [
                    ['label' => 'Sports & Games', 'icon' => 'fa-solid fa-trophy'],
                    ['label' => 'Cultural Programs', 'icon' => 'fa-solid fa-music'],
                    ['label' => 'Co-Curricular', 'icon' => 'fa-solid fa-palette'],
                    ['label' => 'Educational Tours', 'icon' => 'fa-solid fa-bus'],
                    ['label' => 'Night Camps', 'icon' => 'fa-solid fa-campground'],
                    ['label' => 'Inter-School Competitions', 'icon' => 'fa-solid fa-medal'],
                ],
                'is_active' => true,
            ]);

            Pillar::create([
                'order' => 3,
                'badge_number' => '03',
                'theme_color' => 'teal',
                'title' => 'Five Quiet Promises',
                'description' => 'The things parents tell us make the difference — small in description, big in daily impact.',
                'image' => 'assets/images/pillar-card-3.jpg',
                'tags' => [
                    ['label' => 'Experienced Faculty', 'icon' => 'fa-solid fa-chalkboard-user'],
                    ['label' => 'Smart Classes', 'icon' => 'fa-solid fa-display'],
                    ['label' => 'Safe Environment', 'icon' => 'fa-solid fa-shield'],
                    ['label' => 'Value-Based Education', 'icon' => 'fa-solid fa-heart'],
                    ['label' => 'All-in-One Campus', 'icon' => 'fa-solid fa-school'],
                ],
                'is_active' => true,
            ]);
        }
    }
}
