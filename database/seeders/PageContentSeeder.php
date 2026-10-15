<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seed dynamic content for inner school pages.
     */
    public function run(): void
    {
        $content = [
            // About Us
            'about_hero_badge' => 'ABOUT OUR SCHOOL',
            'about_hero_title' => 'Nurturing Potential.',
            'about_hero_highlight' => 'Building Character.',
            'about_hero_subtitle' => 'At Advaita School of Excellence, Parbhani, we believe education extends far beyond classrooms. We build individuals of curiosity, empathy, and resilience.',
            'about_stat_years' => '12+',
            'about_stat_students' => '1,500+',
            'about_stat_faculty' => '75+',
            'about_stat_acres' => '5+',
            'about_founding_year' => '2014',

            // Vision & Mission
            'vision_title' => 'Our Guiding Vision',
            'vision_text' => 'To be a benchmark in quality education where every child discovers their intellectual, emotional, and social brilliance to lead with humility, integrity, and global wisdom.',
            'mission_title' => 'Our Core Mission',
            'mission_text' => 'To cultivate a stimulating, inclusive, and technologically advanced learning ecosystem that empowers students with critical thinking, ethical values, and holistic life skills.',

            // Chairman's Desk
            'chairman_name' => 'Shri. Vishal Vishal Wattamwar',
            'chairman_designation' => 'Chairman, Sanmati Sevabhavi Sansthan, Parbhani',
            'chairman_quote' => 'With a strong foundation in education, ethics and innovation, we aim to develop responsible individuals who contribute positively to society.',
            'chairman_welcome' => 'A Few Words from Our Chairman',
            'chairman_message_p1' => 'At Advaita School of Excellence, our vision has always been to create an education ecosystem that goes beyond textbooks. We believe in nurturing young minds with the right blend of knowledge, values, discipline and life skills, so that they grow into confident, compassionate and responsible global citizens.',
            'chairman_message_p2' => 'In today\'s rapidly evolving world, academic excellence alone is not enough. That is why Advaita is committed to providing a strong foundation for NEET, IIT and various competitive exams along with holistic development in a supportive and inspiring environment.',

            // Principal's Desk
            'principal_name' => 'Divine Mam',
            'principal_designation' => 'Principal, Advaita School of Excellence, Parbhani',
            'principal_quote' => 'With the support of dedicated teachers, modern teaching methodologies and a student-centric approach, we strive to make learning meaningful and enjoyable.',
            'principal_welcome' => 'A Few Words from Our Principal',
            'principal_message_p1' => 'At Advaita School of Excellence, we are committed to providing a nurturing and inspiring environment where every child is encouraged to learn, grow, and succeed. Our aim is to create a strong academic foundation with a focus on overall personality development.',
            'principal_message_p2' => 'Education, in today\'s world, is not limited to textbooks. It is about building character, developing critical thinking, and preparing students to face real-life challenges with confidence.',

            // Academics
            'academics_hero_title' => 'Academic Rigor Meets Creative Expression',
            'academics_hero_desc' => 'Our curriculum is meticulously planned from Foundation Years (Nursery to UKG) to Senior Secondary stages, fostering experiential learning and conceptual mastery.',
            'academics_curriculum_affiliation' => 'Affiliated with the Central Board of Secondary Education (CBSE), New Delhi. Affiliation No: 1130920.',

            // Results
            'results_hero_badge' => 'PROUD MOMENTS',
            'results_hero_title' => 'Consistent Academic Triumph',
            'results_hero_subtitle' => 'Celebrating the dedication of our students, mentorship of our faculty, and trust of our parents.',
            'results_stat_pass_rate' => '100%',
            'results_stat_90_plus' => '15+',
            'results_stat_80_plus' => '8+',
            'results_stat_top_percentage' => '97.8%',

            // Fee Structure
            'fee_academic_year' => '2026–27',
            'fee_installments_note' => 'Fees can be conveniently paid in three term-wise installments or an annual one-time payment with special benefits.',
            'fee_transparency_note' => 'No hidden charges or mandatory surprise fees. Detailed receipts are issued for all transactions.',

            // Facilities
            'facilities_hero_title' => 'An Inspiring 5-Acre Smart Campus',
            'facilities_hero_desc' => 'Designed with student well-being at its center — featuring spacious, airy classrooms, green sports lawns, robotics tech labs, and robust safety measures.',

            // Mandatory Disclosure
            'disclosure_affiliation_period' => '2023 to 2028',
            'disclosure_society_name' => 'Sanmati Sevabhavi Sanstha, Parbhani',
            'disclosure_trust_reg_no' => 'F-3420 (Parbhani)',
            'disclosure_principal_qualification' => 'M.Sc., M.Ed., Ph.D.',
        ];

        foreach ($content as $key => $value) {
            Setting::firstOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
