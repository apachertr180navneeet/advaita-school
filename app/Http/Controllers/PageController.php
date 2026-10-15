<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Get SEO metadata for a given page key.
     *
     * @return array<string, string>
     */
    protected function getPageSeo(string $key, string $defaultTitle, string $defaultDesc, string $defaultKeys): array
    {
        return [
            'title' => Setting::get("seo_{$key}_title", $defaultTitle),
            'description' => Setting::get("seo_{$key}_description", $defaultDesc),
            'keywords' => Setting::get("seo_{$key}_keywords", $defaultKeys),
        ];
    }

    /**
     * Get global site settings (contact numbers, emails, addresses, social links).
     *
     * @return array<string, string|null>
     */
    protected function getSiteSettings(): array
    {
        return [
            'school_name' => Setting::get('site_school_name', 'Advaita School of Excellence'),
            'affiliation_no' => Setting::get('site_affiliation_no', '1130920'),
            'phone_primary' => Setting::get('site_phone_primary', '094130 62851'),
            'phone_secondary' => Setting::get('site_phone_secondary', '+91 98765 43210'),
            'landline' => Setting::get('site_landline', '02452-224455'),
            'email_primary' => Setting::get('site_email_primary', 'info@advaitaschool.edu.in'),
            'email_admissions' => Setting::get('site_email_admissions', 'admissions@advaitaschool.edu.in'),
            'address' => Setting::get('site_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra - 431401'),
            'school_hours' => Setting::get('site_school_hours', 'Mon – Sat | 8:00 AM – 3:00 PM'),
            'whatsapp_number' => Setting::get('site_whatsapp_number', '919413062851'),
            'facebook_url' => Setting::get('site_facebook_url', 'https://facebook.com'),
            'instagram_url' => Setting::get('site_instagram_url', 'https://instagram.com'),
            'youtube_url' => Setting::get('site_youtube_url', 'https://youtube.com'),
            'linkedin_url' => Setting::get('site_linkedin_url', 'https://linkedin.com'),
            'google_map_embed' => Setting::get('site_google_map_embed', 'https://maps.google.com/maps?q=Advaita+School+of+Excellence,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed'),
            'google_map_link' => Setting::get('site_google_map_link', 'https://www.google.com/maps/place/Advaita+School+of+Excellence/@19.2634,76.7749,17z/'),
        ];
    }

    public function aboutUs(): View
    {
        $seo = $this->getPageSeo(
            'about_us',
            'About Us - Advaita School of Excellence, Parbhani',
            'Learn about Advaita School of Excellence, our history, leadership under Sanmati Sevabhavi Sanstha, pedagogy, infrastructure, and dedication to academic and moral excellence.',
            'About Advaita School, Parbhani CBSE school history, Sanmati Sevabhavi Sanstha, CBSE school management Parbhani'
        );

        $content = [
            'hero_badge' => Setting::get('about_hero_badge', 'ABOUT OUR SCHOOL'),
            'hero_title' => Setting::get('about_hero_title', 'Nurturing Potential.'),
            'hero_highlight' => Setting::get('about_hero_highlight', 'Building Character.'),
            'hero_subtitle' => Setting::get('about_hero_subtitle', 'At Advaita School of Excellence, Parbhani, we believe education extends far beyond classrooms. We build individuals of curiosity, empathy, and resilience.'),
            'stat_years' => Setting::get('about_stat_years', '12+'),
            'stat_students' => Setting::get('about_stat_students', '1,500+'),
            'stat_faculty' => Setting::get('about_stat_faculty', '75+'),
            'stat_acres' => Setting::get('about_stat_acres', '5+'),
        ];

        return view('pages.about-us', compact('seo', 'content'));
    }

    public function visionMission(): View
    {
        $seo = $this->getPageSeo(
            'vision_mission',
            'Vision & Mission - Advaita School of Excellence, Parbhani',
            'Explore the vision, mission, and core values of Advaita School of Excellence. Guiding young minds to achieve academic brilliance, ethical integrity, and global wisdom.',
            'Advaita vision, school mission, core values, holistic education philosophy, Parbhani school principles'
        );

        $content = [
            'vision_title' => Setting::get('vision_title', 'Our Guiding Vision'),
            'vision_text' => Setting::get('vision_text', 'To be a benchmark in quality education where every child discovers their intellectual, emotional, and social brilliance to lead with humility, integrity, and global wisdom.'),
            'mission_title' => Setting::get('mission_title', 'Our Core Mission'),
            'mission_text' => Setting::get('mission_text', 'To cultivate a stimulating, inclusive, and technologically advanced learning ecosystem that empowers students with critical thinking, ethical values, and holistic life skills.'),
        ];

        return view('pages.vision-mission', compact('seo', 'content'));
    }

    public function chairmansDesk(): View
    {
        $seo = $this->getPageSeo(
            'chairmans_desk',
            "Chairman's Desk - Advaita School of Excellence, Parbhani",
            'Message from the Chairman of Advaita School of Excellence, inspiring students, parents, and educators toward continuous learning and societal responsibility.',
            'Advaita Chairman message, Chairman desk, Sanmati Sanstha Chairman, school leadership message'
        );

        $content = [
            'chairman_name' => Setting::get('chairman_name', 'Dr. Sureshji Jain'),
            'chairman_designation' => Setting::get('chairman_designation', 'Chairman, Sanmati Sevabhavi Sanstha'),
            'chairman_quote' => Setting::get('chairman_quote', 'True education is not mere accumulation of facts; it is the ignition of the human spirit to serve society and seek excellence in every endeavor.'),
            'chairman_welcome' => Setting::get('chairman_welcome', 'A Message of Hope and Ambition'),
            'chairman_message_p1' => Setting::get('chairman_message_p1', 'Advaita School of Excellence was born from a deep conviction that children in Parbhani deserve the finest educational opportunities — matching the best in the nation while staying rooted in our timeless cultural values.'),
            'chairman_message_p2' => Setting::get('chairman_message_p2', 'Over the years, our campus has flourished into a vibrant sanctuary of learning, discovery, and sportsmanship. We invest continuously in modern labs, world-class teachers, and a secure environment so parents can entrust us with their children with utmost confidence.'),
        ];

        return view('pages.chairmans-desk', compact('seo', 'content'));
    }

    public function principalsDesk(): View
    {
        $seo = $this->getPageSeo(
            'principals_desk',
            "Principal's Desk - Advaita School of Excellence, Parbhani",
            'Message from the Principal of Advaita School of Excellence on academic innovation, student-centered learning, child safety, and creative growth.',
            'Principal message Advaita School, principal desk Parbhani, educational leadership'
        );

        $content = [
            'principal_name' => Setting::get('principal_name', 'Mrs. Sunita S. Deshmukh'),
            'principal_designation' => Setting::get('principal_designation', 'Principal, Advaita School of Excellence'),
            'principal_quote' => Setting::get('principal_quote', 'Every child enters our gates with unique curiosity. Our privilege and sacred duty is to nurture that spark into an unshakeable flame of confidence.'),
            'principal_welcome' => Setting::get('principal_welcome', 'Welcoming You to Our Family'),
            'principal_message_p1' => Setting::get('principal_message_p1', 'It is with immense joy that I welcome you to Advaita School of Excellence. As educators, our primary purpose is to provide a joyful, safe, and academically rigorous space where children are excited to come every single morning.'),
            'principal_message_p2' => Setting::get('principal_message_p2', 'With the integration of CBSE modern learning guidelines, robotics, and co-curricular programs, our students excel not only in exams but also in teamwork, public speaking, and problem solving.'),
        ];

        return view('pages.principals-desk', compact('seo', 'content'));
    }

    public function ourStaff(): View
    {
        $seo = $this->getPageSeo(
            'our_staff',
            'Our Faculty & Staff - Advaita School of Excellence, Parbhani',
            'Meet our dedicated, experienced, and compassionate teaching faculty and staff members committed to mentoring and nurturing every child at Advaita.',
            'Advaita school teachers, CBSE faculty Parbhani, qualified teachers, experienced school educators'
        );

        return view('pages.our-staff', compact('seo'));
    }

    public function academics(): View
    {
        $seo = $this->getPageSeo(
            'academics',
            'Academics & Curriculum - Advaita School of Excellence, Parbhani',
            'Explore the CBSE academic curriculum, pedagogical approach, STEAM education, language labs, and developmental stages from Kindergarten to Class 10.',
            'CBSE curriculum Parbhani, academic programs, STEAM labs, robotics education, school syllabus'
        );

        $content = [
            'hero_title' => Setting::get('academics_hero_title', 'Academic Rigor Meets Creative Expression'),
            'hero_desc' => Setting::get('academics_hero_desc', 'Our curriculum is meticulously planned from Foundation Years (Nursery to UKG) to Senior Secondary stages, fostering experiential learning and conceptual mastery.'),
            'affiliation_line' => Setting::get('academics_curriculum_affiliation', 'Affiliated with the Central Board of Secondary Education (CBSE), New Delhi. Affiliation No: 1130920.'),
        ];

        return view('pages.academics', compact('seo', 'content'));
    }

    public function results(): View
    {
        $seo = $this->getPageSeo(
            'results',
            'Board Results & Achievements - Advaita School of Excellence, Parbhani',
            'Discover the exemplary academic results, Class 10 CBSE board performance, 100% passing record, and national Olympiad achievements of Advaita students.',
            'Advaita board results, CBSE 10th result Parbhani, school toppers, 100% board passing record'
        );

        $content = [
            'badge' => Setting::get('results_hero_badge', 'PROUD MOMENTS'),
            'title' => Setting::get('results_hero_title', 'Consistent Academic Triumph'),
            'subtitle' => Setting::get('results_hero_subtitle', 'Celebrating the dedication of our students, mentorship of our faculty, and trust of our parents.'),
            'pass_rate' => Setting::get('results_stat_pass_rate', '100%'),
            'stat_90_plus' => Setting::get('results_stat_90_plus', '15+'),
            'stat_80_plus' => Setting::get('results_stat_80_plus', '8+'),
            'top_score' => Setting::get('results_stat_top_percentage', '97.8%'),
        ];

        return view('pages.results', compact('seo', 'content'));
    }

    public function admissionInfo(): View
    {
        $seo = $this->getPageSeo(
            'admission_info',
            'Admission Information (2026-27) - Advaita School of Excellence',
            'Comprehensive admission guidelines, eligibility criteria, document requirements, admission process, and campus visits for Nursery to Class 10.',
            'School admissions Parbhani, CBSE admission 2026-27, Nursery admission, Class 1 to 10 school admission'
        );

        return view('pages.admission-info', compact('seo'));
    }

    public function feeStructure(): View
    {
        $seo = $this->getPageSeo(
            'fee_structure',
            'Fee Structure (2026-27) - Advaita School of Excellence, Parbhani',
            'Transparent and affordable fee structure for Pre-Primary, Primary, Middle, and Secondary classes at Advaita School of Excellence with flexible payment terms.',
            'Advaita school fee structure, Parbhani school fees, CBSE school tuition fees, installment plans'
        );

        $content = [
            'academic_year' => Setting::get('fee_academic_year', '2026–27'),
            'installments_note' => Setting::get('fee_installments_note', 'Fees can be conveniently paid in three term-wise installments or an annual one-time payment with special benefits.'),
            'transparency_note' => Setting::get('fee_transparency_note', 'No hidden charges or mandatory surprise fees. Detailed receipts are issued for all transactions.'),
        ];

        return view('pages.fee-structure', compact('seo', 'content'));
    }

    public function facilities(): View
    {
        $seo = $this->getPageSeo(
            'facilities',
            'Campus Facilities & Infrastructure - Advaita School of Excellence',
            'Tour our state-of-the-art campus featuring digital smart classrooms, modern robotics & science labs, sports turf, library, splash pool, and CCTV security.',
            'School facilities Parbhani, robotics lab, smart classes, sports ground, library, campus infrastructure'
        );

        $content = [
            'hero_title' => Setting::get('facilities_hero_title', 'An Inspiring 5-Acre Smart Campus'),
            'hero_desc' => Setting::get('facilities_hero_desc', 'Designed with student well-being at its center — featuring spacious, airy classrooms, green sports lawns, robotics tech labs, and robust safety measures.'),
        ];

        return view('pages.facilities', compact('seo', 'content'));
    }

    public function gallery(): View
    {
        $seo = $this->getPageSeo(
            'gallery',
            'Photo Gallery & Life at Campus - Advaita School of Excellence',
            'Browse high-resolution photographs showcasing daily life, annual day celebrations, sports tournaments, science exhibitions, and cultural fests at Advaita.',
            'Advaita school photos, campus life pictures, school sports gallery, events and celebrations'
        );

        return view('pages.gallery', compact('seo'));
    }

    public function blog(): View
    {
        $seo = $this->getPageSeo(
            'blog',
            'Blog & School News - Advaita School of Excellence, Parbhani',
            'Stay updated with school announcements, upcoming events, parenting tips, student articles, and educational insights from Advaita School of Excellence.',
            'Advaita school blog, school news Parbhani, educational articles, student achievements'
        );

        return view('pages.blog', compact('seo'));
    }

    public function mandatoryDisclosure(): View
    {
        $seo = $this->getPageSeo(
            'mandatory_disclosure',
            'Mandatory Public Disclosure (CBSE) - Advaita School of Excellence',
            'Official CBSE mandatory disclosure details for Advaita School of Excellence (Affiliation No. 1130920), including certificates, society documents, and compliance records.',
            'CBSE mandatory disclosure, Affiliation 1130920, school NOC, recognition certificate, SARAS compliance'
        );

        $content = [
            'affiliation_period' => Setting::get('disclosure_affiliation_period', '2023 to 2028'),
            'society_name' => Setting::get('disclosure_society_name', 'Sanmati Sevabhavi Sanstha, Parbhani'),
            'trust_reg_no' => Setting::get('disclosure_trust_reg_no', 'F-3420 (Parbhani)'),
            'principal_qualification' => Setting::get('disclosure_principal_qualification', 'M.Sc., M.Ed., Ph.D.'),
        ];

        return view('pages.mandatory-disclosure', compact('seo', 'content'));
    }
}
