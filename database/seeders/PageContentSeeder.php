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
            'about_hero_badge' => 'WELCOME TO',
            'about_hero_title' => 'A Premier CBSE School with a',
            'about_hero_highlight' => 'Stronger Purpose.',
            'about_hero_subtitle' => 'At Advaita School of Excellence, Parbhani, we believe education extends far beyond classrooms. We build individuals of curiosity, empathy, and resilience.',
            'about_story_eyebrow' => 'BUILT ON A STRONG FOUNDATION',
            'about_story_title' => 'Built on Values.',
            'about_story_highlight' => 'Academic Excellence.',
            'about_story_p1' => 'At Advaita School of Excellence, we blend academic rigor, character development, and future-focused learning to help every child grow into a confident, compassionate, and capable individual.',
            'about_story_p2' => "Our focus on NEET/IIT foundation and various competitive exams, along with a strong CBSE curriculum, ensures that students are well-prepared for higher education and life's opportunities.",
            'about_stat_students' => '5,000+',
            'about_stat_years' => '25+',
            'about_stat_satisfaction' => '95%',
            'about_story_badge_title' => 'Best CBSE',
            'about_story_badge_sub' => 'Result Producer',
            'about_story_badge_tag' => 'Year after Year',
            'about_vmv_vision' => 'To nurture confident, curious and responsible global citizens equipped to excel in academics and life.',
            'about_vmv_mission' => 'To provide a safe, value-based learning environment with academic excellence, modern facilities and holistic growth opportunities.',
            'about_philosophy_eyebrow' => 'PREPARING FOR A BRIGHTER TOMORROW',
            'about_philosophy_title' => 'Education for Life,',
            'about_philosophy_highlight' => 'Not Just Exams.',
            'about_philosophy_desc' => 'We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.',
            'about_campus_eyebrow' => 'A SPACE TO GROW',
            'about_campus_title' => 'A Space to Learn,',
            'about_campus_highlight' => 'Explore and Excel.',
            'about_campus_desc' => 'Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.',
            'about_cta_eyebrow' => 'BE A PART OF ADVAITA',
            'about_cta_headline' => "Together, let's build brighter tomorrows.",
            'about_cta_subtext' => 'Admissions are open for CBSE, NEET/IIT Foundation & Competitive Exam Programmes.',

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
