<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class AllPageSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seed default SEO meta settings for all pages.
     */
    public function run(): void
    {
        $pages = [
            'home' => [
                'title' => 'Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)',
                'description' => 'Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs, holistic sports, and values-based learning from Pre-Primary to Class 10.',
                'keywords' => 'Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani, CBSE Affiliated School 1130920, Robotics Lab School, English Medium School Parbhani',
            ],
            'about_us' => [
                'title' => 'About Us - Advaita School of Excellence, Parbhani',
                'description' => 'Learn about Advaita School of Excellence, our history, leadership under Sanmati Sevabhavi Sanstha, pedagogy, infrastructure, and dedication to academic and moral excellence.',
                'keywords' => 'About Advaita School, Parbhani CBSE school history, Sanmati Sevabhavi Sanstha, CBSE school management Parbhani',
            ],
            'vision_mission' => [
                'title' => 'Vision & Mission - Advaita School of Excellence, Parbhani',
                'description' => 'Explore the vision, mission, and core values of Advaita School of Excellence. Guiding young minds to achieve academic brilliance, ethical integrity, and global perspectives.',
                'keywords' => 'Advaita vision, school mission, core values, holistic education philosophy, Parbhani school principles',
            ],
            'chairmans_desk' => [
                'title' => "Chairman's Desk - Advaita School of Excellence, Parbhani",
                'description' => 'Message from the Chairman of Advaita School of Excellence, inspiring students, parents, and educators toward continuous learning and societal responsibility.',
                'keywords' => 'Advaita Chairman message, Chairman desk, Sanmati Sanstha Chairman, school leadership message',
            ],
            'principals_desk' => [
                'title' => "Principal's Desk - Advaita School of Excellence, Parbhani",
                'description' => 'Message from the Principal of Advaita School of Excellence on academic innovation, student-centered learning, child safety, and creative growth.',
                'keywords' => 'Principal message Advaita School, principal desk Parbhani, educational leadership',
            ],
            'our_staff' => [
                'title' => 'Our Faculty & Staff - Advaita School of Excellence, Parbhani',
                'description' => 'Meet our dedicated, experienced, and compassionate teaching faculty and staff members committed to mentoring and nurturing every child at Advaita.',
                'keywords' => 'Advaita school teachers, CBSE faculty Parbhani, qualified teachers, experienced school educators',
            ],
            'academics' => [
                'title' => 'Academics & Curriculum - Advaita School of Excellence, Parbhani',
                'description' => 'Explore the CBSE academic curriculum, pedagogical approach, STEAM education, language labs, and developmental stages from Kindergarten to Class 10.',
                'keywords' => 'CBSE curriculum Parbhani, academic programs, STEAM labs, robotics education, school syllabus',
            ],
            'results' => [
                'title' => 'Board Results & Achievements - Advaita School of Excellence, Parbhani',
                'description' => 'Discover the exemplary academic results, Class 10 CBSE board performance, 100% passing record, and national Olympiad achievements of Advaita students.',
                'keywords' => 'Advaita board results, CBSE 10th result Parbhani, school toppers, 100% board passing record',
            ],
            'admission_info' => [
                'title' => 'Admission Information (2026-27) - Advaita School of Excellence',
                'description' => 'Comprehensive admission guidelines, eligibility criteria, document requirements, admission process, and campus visits for Nursery to Class 10.',
                'keywords' => 'School admissions Parbhani, CBSE admission 2026-27, Nursery admission, Class 1 to 10 school admission',
            ],
            'fee_structure' => [
                'title' => 'Fee Structure (2026-27) - Advaita School of Excellence, Parbhani',
                'description' => 'Transparent and affordable fee structure for Pre-Primary, Primary, Middle, and Secondary classes at Advaita School of Excellence with flexible payment terms.',
                'keywords' => 'Advaita school fee structure, Parbhani school fees, CBSE school tuition fees, installment plans',
            ],
            'online_registration' => [
                'title' => 'Online Student Registration (2026-27) - Advaita School of Excellence',
                'description' => 'Apply online for student admission at Advaita School of Excellence, Parbhani. Fast, secure, and hassle-free registration form for academic year 2026-27.',
                'keywords' => 'Online school admission form, student registration Parbhani, Advaita online admission',
            ],
            'facilities' => [
                'title' => 'Campus Facilities & Infrastructure - Advaita School of Excellence',
                'description' => 'Tour our state-of-the-art campus featuring digital smart classrooms, modern robotics & science labs, sports turf, library, splash pool, and CCTV security.',
                'keywords' => 'School facilities Parbhani, robotics lab, smart classes, sports ground, library, campus infrastructure',
            ],
            'gallery' => [
                'title' => 'Photo Gallery & Life at Campus - Advaita School of Excellence',
                'description' => 'Browse high-resolution photographs showcasing daily life, annual day celebrations, sports tournaments, science exhibitions, and cultural fests at Advaita.',
                'keywords' => 'Advaita school photos, campus life pictures, school sports gallery, events and celebrations',
            ],
            'blog' => [
                'title' => 'Blog & School News - Advaita School of Excellence, Parbhani',
                'description' => 'Stay updated with school announcements, upcoming events, parenting tips, student articles, and educational insights from Advaita School of Excellence.',
                'keywords' => 'Advaita school blog, school news Parbhani, educational articles, student achievements',
            ],
            'contact' => [
                'title' => 'Contact Us - Advaita School of Excellence, Parbhani',
                'description' => 'Get in touch with Advaita School of Excellence, Parbhani. Find our address, phone numbers, email, interactive Google map, and visit hours.',
                'keywords' => 'Contact Advaita School, Parbhani school phone number, school address, admission contact',
            ],
            'mandatory_disclosure' => [
                'title' => 'Mandatory Public Disclosure (CBSE) - Advaita School of Excellence',
                'description' => 'Official CBSE mandatory disclosure details for Advaita School of Excellence (Affiliation No. 1130920), including certificates, society documents, and compliance records.',
                'keywords' => 'CBSE mandatory disclosure, Affiliation 1130920, school NOC, recognition certificate, SARAS compliance',
            ],
        ];

        foreach ($pages as $key => $meta) {
            Setting::firstOrCreate(
                ['key' => "seo_{$key}_title"],
                ['value' => $meta['title']]
            );
            Setting::firstOrCreate(
                ['key' => "seo_{$key}_description"],
                ['value' => $meta['description']]
            );
            Setting::firstOrCreate(
                ['key' => "seo_{$key}_keywords"],
                ['value' => $meta['keywords']]
            );
        }

        // Backward compatibility sync with existing home_seo_* keys
        Setting::firstOrCreate(
            ['key' => 'home_seo_title'],
            ['value' => $pages['home']['title']]
        );
        Setting::firstOrCreate(
            ['key' => 'home_seo_description'],
            ['value' => $pages['home']['description']]
        );
        Setting::firstOrCreate(
            ['key' => 'home_seo_keywords'],
            ['value' => $pages['home']['keywords']]
        );
    }
}
