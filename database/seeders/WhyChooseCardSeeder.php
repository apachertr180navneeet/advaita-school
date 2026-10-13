<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\WhyChooseCard;
use Illuminate\Database\Seeder;

class WhyChooseCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Default section header settings
        Setting::set('why_choose_eyebrow', Setting::get('why_choose_eyebrow', 'WHY CHOOSE ADVAITA?'));
        Setting::set('why_choose_title_1', Setting::get('why_choose_title_1', 'Why Choose'));
        Setting::set('why_choose_title_2', Setting::get('why_choose_title_2', 'Advaita?'));
        Setting::set('why_choose_subtitle', Setting::get('why_choose_subtitle', 'A nurturing and future-focused ecosystem designed to ignite curiosity, instill integrity, and inspire every child to excel.'));
        Setting::set('why_choose_cta_text', Setting::get('why_choose_cta_text', 'Discover the Advaita Difference'));
        Setting::set('why_choose_cta_url', Setting::get('why_choose_cta_url', '#admissions'));

        $cards = [
            [
                'order' => 1,
                'badge_number' => '01',
                'theme_color' => 'orange',
                'title' => 'Holistic Education',
                'description' => 'A balanced integration of academic excellence, cultural arts, athletic fitness, and moral leadership for all-round personality development.',
                'image' => 'assets/images/adv-choose-1.jpg',
                'is_active' => true,
            ],
            [
                'order' => 2,
                'badge_number' => '02',
                'theme_color' => 'blue',
                'title' => 'Experienced Faculty',
                'description' => "Dedicated, compassionate, and highly qualified educators focused on personalized attention and nurturing every learner's individual strengths.",
                'image' => 'assets/images/adv-choose-2.jpg',
                'is_active' => true,
            ],
            [
                'order' => 3,
                'badge_number' => '03',
                'theme_color' => 'teal',
                'title' => 'Smart Learning',
                'description' => 'Interactive digital classrooms, modern audio-visual learning tools, and specialized STEM laboratories that bring concepts to life.',
                'image' => 'assets/images/adv-choose-3.jpg',
                'is_active' => true,
            ],
            [
                'order' => 4,
                'badge_number' => '04',
                'theme_color' => 'purple',
                'title' => 'Safe & Secure Campus',
                'description' => '24/7 CCTV surveillance, verified support staff, emergency response protocols, and a caring, supportive atmosphere where every child feels safe.',
                'image' => 'assets/images/adv-choose-4.jpg',
                'is_active' => true,
            ],
            [
                'order' => 5,
                'badge_number' => '05',
                'theme_color' => 'coral',
                'title' => 'Future-Ready Skills',
                'description' => "Inquiry-driven learning, robotics, coding, public speaking, critical reasoning, and entrepreneurial mindset tailored for tomorrow's world.",
                'image' => 'assets/images/adv-choose-5.jpg',
                'is_active' => true,
            ],
            [
                'order' => 6,
                'badge_number' => '06',
                'theme_color' => 'cyan',
                'title' => 'Strong Academic Results',
                'description' => 'Consistent 100% board examination pass records, state & national Olympiad ranks, and successful career placements in premier universities.',
                'image' => 'assets/images/adv-choose-6.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($cards as $data) {
            WhyChooseCard::updateOrCreate(
                ['title' => $data['title']],
                $data
            );
        }
    }
}
