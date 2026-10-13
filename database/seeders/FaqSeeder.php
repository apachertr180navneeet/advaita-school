<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What curriculum does Advaita follow?',
                'answer' => 'Advaita is a CBSE affiliated school (Affiliation No. 1130920) and follows a holistic, future-focused curriculum. Our approach blends academic excellence with co-curricular, value-based, and experiential learning to help every child grow into a confident, compassionate, and capable individual.',
                'order' => 1,
            ],
            [
                'question' => 'What is the admission process for new students?',
                'answer' => 'Our admission process is straightforward and supportive. It begins with submitting an enquiry or registration form online or at our school campus, followed by an interactive meeting and guided campus tour. After verification of previous academic records and essential documents, admission is finalized upon confirmation of enrolment and fee completion.',
                'order' => 2,
            ],
            [
                'question' => 'What are the age criteria for admission to pre-primary and primary classes?',
                'answer' => 'In accordance with CBSE and state education regulatory standards, minimum age requirements as of the commencement of the academic year are: Nursery (3+ years), LKG (4+ years), UKG (5+ years), and Grade 1 (6+ years). For higher grades, admissions are based on successful completion of the preceding class.',
                'order' => 3,
            ],
            [
                'question' => 'What extracurricular activities does the school offer?',
                'answer' => 'Advaita offers an expansive spectrum of co-curricular opportunities designed to foster creativity, teamwork, and athletic skills. These include robotics & AI lab projects, coding clubs, vocal & instrumental music, classical and contemporary dance, theatre, public speaking & debates, martial arts, cricket, football, basketball, badminton, table tennis, and yoga.',
                'order' => 4,
            ],
            [
                'question' => 'How does Advaita ensure the safety of its students?',
                'answer' => 'Student safety is our foremost priority. Our campus features 24/7 high-resolution CCTV monitoring, controlled access entry gates with security personnel, GPS-enabled school transport with certified drivers and female attendants, an equipped medical infirmary with qualified nursing care, and rigorous child protection policies across all premises.',
                'order' => 5,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
