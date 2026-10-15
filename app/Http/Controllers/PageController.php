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
            'hero_badge' => Setting::get('about_hero_badge', 'WELCOME TO'),
            'hero_title' => Setting::get('about_hero_title', 'A Premier CBSE School with a'),
            'hero_highlight' => Setting::get('about_hero_highlight', 'Stronger Purpose.'),
            'hero_subtitle' => Setting::get('about_hero_subtitle', 'At Advaita School of Excellence, we go beyond textbooks to create a learning environment where curiosity is encouraged, confidence is built, and every child is empowered to achieve their true potential.'),

            // Story Section
            'story_eyebrow' => Setting::get('about_story_eyebrow', 'BUILT ON A STRONG FOUNDATION'),
            'story_title' => Setting::get('about_story_title', 'Built on Values.'),
            'story_highlight' => Setting::get('about_story_highlight', 'Academic Excellence.'),
            'story_p1' => Setting::get('about_story_p1', 'At Advaita School of Excellence, we blend academic rigor, character development, and future-focused learning to help every child grow into a confident, compassionate, and capable individual.'),
            'story_p2' => Setting::get('about_story_p2', "Our focus on NEET/IIT foundation and various competitive exams, along with a strong CBSE curriculum, ensures that students are well-prepared for higher education and life's opportunities."),
            'stat_students' => Setting::get('about_stat_students', '5000+'),
            'stat_years' => Setting::get('about_stat_years', '25+'),
            'stat_satisfaction' => Setting::get('about_stat_satisfaction', '95%'),
            'story_badge_title' => Setting::get('about_story_badge_title', 'Best CBSE'),
            'story_badge_sub' => Setting::get('about_story_badge_sub', 'Result Producer'),
            'story_badge_tag' => Setting::get('about_story_badge_tag', 'Year after Year'),

            // Vision, Mission, Values
            'vision_text' => Setting::get('about_vmv_vision', 'To nurture confident, curious and responsible global citizens equipped to excel in academics and life.'),
            'mission_text' => Setting::get('about_vmv_mission', 'To provide a safe, value-based learning environment with academic excellence, modern facilities and holistic growth opportunities.'),

            // Philosophy Section
            'philosophy_eyebrow' => Setting::get('about_philosophy_eyebrow', 'PREPARING FOR A BRIGHTER TOMORROW'),
            'philosophy_title' => Setting::get('about_philosophy_title', 'Education for Life,'),
            'philosophy_highlight' => Setting::get('about_philosophy_highlight', 'Not Just Exams.'),
            'philosophy_desc' => Setting::get('about_philosophy_desc', 'We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.'),

            // Campus Showcase
            'campus_eyebrow' => Setting::get('about_campus_eyebrow', 'A SPACE TO GROW'),
            'campus_title' => Setting::get('about_campus_title', 'A Space to Learn,'),
            'campus_highlight' => Setting::get('about_campus_highlight', 'Explore and Excel.'),
            'campus_desc' => Setting::get('about_campus_desc', 'Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.'),

            // CTA Banner
            'cta_eyebrow' => Setting::get('about_cta_eyebrow', 'BE A PART OF ADVAITA'),
            'cta_headline' => Setting::get('about_cta_headline', "Together, let's build brighter tomorrows."),
            'cta_subtext' => Setting::get('about_cta_subtext', 'Admissions are open for CBSE, NEET/IIT Foundation & Competitive Exam Programmes.'),

            // Section Images
            'hero_image' => Setting::get('about_hero_image', 'assets/images/about-hero-building.jpg'),
            'story_image' => Setting::get('about_story_image', 'assets/images/about-philosophy-student.jpg'),
            'philosophy_image' => Setting::get('about_philosophy_image', 'assets/images/about-story-student.jpg'),
            'campus_image' => Setting::get('about_campus_image', 'assets/images/about-campus-courtyard.jpg'),
            'cta_image' => Setting::get('about_cta_image', 'assets/images/about-cta-students-trio.png'),
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
            'hero_badge' => Setting::get('vision_hero_badge', 'OUR VISION & MISSION'),
            'hero_title' => Setting::get('vision_hero_title', 'Guiding Young Minds Towards a'),
            'hero_highlight' => Setting::get('vision_hero_highlight', 'Brighter Tomorrow.'),
            'hero_desc' => Setting::get('vision_hero_desc', 'At Advaita School of Excellence, our vision and mission reflect our unwavering commitment to academic excellence, strong values and the all-round development of every child.'),
            'vision_title' => Setting::get('vision_title', 'To nurture confident, creative and responsible global citizens.'),
            'vision_text' => Setting::get('vision_text', 'We envision a progressive learning community where every child discovers their unique potential, builds a strong character and contributes positively to a brighter and better world.'),
            'mission_title' => Setting::get('mission_title', 'To provide a holistic, value-based education with strong academic foundations.'),
            'mission_text' => Setting::get('mission_text', 'Through innovative teaching, individual attention, world-class infrastructure and strong NEET/IIT foundation programmes, we empower students to achieve excellence in competitive exams and life.'),
            'cta_eyebrow' => Setting::get('vision_cta_eyebrow', 'TOGETHER TOWARDS A BRIGHTER TOMORROW'),
            'cta_headline' => Setting::get('vision_cta_headline', 'Be a Part of the Advaita Journey'),
            'cta_subtext' => Setting::get('vision_cta_subtext', 'Give your child the right start with strong academics, values and endless opportunities.'),

            // Imagery
            'hero_image' => Setting::get('vision_hero_image', 'assets/images/about-hero-building.jpg'),
            'vision_card_image' => Setting::get('vision_card_image', 'assets/images/vision-mountain-peak.jpg'),
            'mission_card_image' => Setting::get('mission_card_image', 'assets/images/mission-student-inspirational.jpg'),
            'cta_image' => Setting::get('vision_cta_image', 'assets/images/about-cta-students-trio.png'),
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
            'hero_eyebrow' => Setting::get('chairman_hero_eyebrow', 'FROM THE CHAIRMAN'),
            'hero_title' => Setting::get('chairman_hero_title', 'Building Stronger Foundations for'),
            'hero_highlight' => Setting::get('chairman_hero_highlight', 'Brighter Tomorrows.'),
            'chairman_name' => Setting::get('chairman_name', 'Dr. Sureshji Jain'),
            'chairman_designation' => Setting::get('chairman_designation', 'Chairman, Sanmati Sevabhavi Sanstha'),
            'chairman_quote' => Setting::get('chairman_quote', 'True education is not mere accumulation of facts; it is the ignition of the human spirit to serve society and seek excellence in every endeavor.'),
            'chairman_welcome' => Setting::get('chairman_welcome', 'A Message of Hope and Ambition'),
            'chairman_message_p1' => Setting::get('chairman_message_p1', 'Advaita School of Excellence was born from a deep conviction that children in Parbhani deserve the finest educational opportunities — matching the best in the nation while staying rooted in our timeless cultural values.'),
            'chairman_message_p2' => Setting::get('chairman_message_p2', 'Over the years, our campus has flourished into a vibrant sanctuary of learning, discovery, and sportsmanship. We invest continuously in modern labs, world-class teachers, and a secure environment so parents can entrust us with their children with utmost confidence.'),

            // Imagery
            'chairman_image' => Setting::get('chairman_image', 'assets/images/chairman-real.png'),
            'hero_image' => Setting::get('chairman_hero_image', 'assets/images/about-hero-building.jpg'),
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
            'hero_eyebrow' => Setting::get('principal_hero_eyebrow', 'FROM THE PRINCIPAL'),
            'hero_title' => Setting::get('principal_hero_title', 'Nurturing Potential for a'),
            'hero_highlight' => Setting::get('principal_hero_highlight', 'Brighter Tomorrow.'),
            'principal_name' => Setting::get('principal_name', 'Mrs. Sunita S. Deshmukh'),
            'principal_designation' => Setting::get('principal_designation', 'Principal, Advaita School of Excellence'),
            'principal_quote' => Setting::get('principal_quote', 'Every child enters our gates with unique curiosity. Our privilege and sacred duty is to nurture that spark into an unshakeable flame of confidence.'),
            'principal_welcome' => Setting::get('principal_welcome', 'Welcoming You to Our Family'),
            'principal_message_p1' => Setting::get('principal_message_p1', 'It is with immense joy that I welcome you to Advaita School of Excellence. As educators, our primary purpose is to provide a joyful, safe, and academically rigorous space where children are excited to come every single morning.'),
            'principal_message_p2' => Setting::get('principal_message_p2', 'With the integration of CBSE modern learning guidelines, robotics, and co-curricular programs, our students excel not only in exams but also in teamwork, public speaking, and problem solving.'),

            // Imagery
            'principal_image' => Setting::get('principal_image', 'assets/images/principal-desk.jpg'),
            'hero_image' => Setting::get('principal_hero_image', 'assets/images/about-hero-building.jpg'),
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
            'hero_badge' => Setting::get('academics_hero_badge', 'OUR ACADEMICS'),
            'hero_title' => Setting::get('academics_hero_title', 'A Strong Foundation for a Brighter Tomorrow.'),
            'hero_desc' => Setting::get('academics_hero_desc', 'A thoughtfully designed curriculum that nurtures curiosity, builds strong concepts and prepares students for lifelong success.'),
            'affiliation_line' => Setting::get('academics_curriculum_affiliation', 'Affiliated with the Central Board of Secondary Education (CBSE), New Delhi. Affiliation No: 1130920.'),
            'cta_headline' => Setting::get('academics_cta_headline', 'Give Your Child the Advaita Advantage.'),
            'cta_subtext' => Setting::get('academics_cta_subtext', 'A strong academic foundation today, for a brighter and bolder tomorrow.'),

            // Imagery
            'hero_image' => Setting::get('academics_hero_image', 'assets/images/about-cta-students-clean.png'),
            'stream_image' => Setting::get('academics_stream_image', 'assets/images/about-philosophy-student.jpg'),
            'activity_image' => Setting::get('academics_activity_image', 'assets/images/about-story-student.jpg'),
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
            'badge' => Setting::get('results_hero_badge', 'OUR PERFORMANCE'),
            'title' => Setting::get('results_hero_title', 'Results that'),
            'subtitle' => Setting::get('results_hero_subtitle', 'speak for themselves.'),
            'hero_desc' => Setting::get('results_hero_desc', 'Year after year, our students continue to excel, making us proud with outstanding academic results.'),
            'pass_rate' => Setting::get('results_stat_pass_rate', '100%'),
            'stat_90_plus' => Setting::get('results_stat_90_plus', '35%'),
            'stat_80_plus' => Setting::get('results_stat_80_plus', '~33%'),
            'top_score' => Setting::get('results_stat_top_percentage', '98.40%'),
            'excellence_title' => Setting::get('results_excellence_title', 'Consistent Academic Excellence'),
            'excellence_desc' => Setting::get('results_excellence_desc', 'Our results reflect the hard work of our students, the guidance of our teachers and the trust of our parents. Together, we continue to set higher benchmarks.'),

            // Imagery
            'hero_image' => Setting::get('results_hero_image', 'assets/images/results-hero-campus-right.jpg'),
            'poster_toppers' => Setting::get('results_poster_toppers', 'assets/images/results-poster-toppers.jpg'),
            'poster_achievers' => Setting::get('results_poster_achievers', 'assets/images/results-poster-achievers.jpg'),
            'poster_full' => Setting::get('results_poster_full', 'assets/images/results-posters-full.jpg'),
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
            'hero_badge' => Setting::get('fee_hero_badge', 'ADMISSIONS 2026–27'),
            'hero_title' => Setting::get('fee_hero_title', 'Fees, paid in simple terms.'),
            'hero_desc' => Setting::get('fee_hero_desc', 'A clear, transparent fee structure designed to make quality education accessible for every child.'),
            'academic_year' => Setting::get('fee_academic_year', '2026–27'),
            'installments_note' => Setting::get('fee_installments_note', 'Fees can be conveniently paid in three term-wise installments or an annual one-time payment with special benefits.'),
            'transparency_note' => Setting::get('fee_transparency_note', 'No hidden charges or mandatory surprise fees. Detailed receipts are issued for all transactions.'),

            // Imagery
            'hero_image' => Setting::get('fee_hero_image', 'assets/images/about-cta-students-clean.png'),
            'cta_image' => Setting::get('fee_cta_image', 'assets/images/about-story-student.jpg'),
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
            'hero_badge' => Setting::get('facilities_hero_badge', 'OUR CAMPUS'),
            'hero_title' => Setting::get('facilities_hero_title', 'More than Classrooms, A Place to Grow.'),
            'hero_desc' => Setting::get('facilities_hero_desc', 'Our campus is thoughtfully designed to provide a safe, modern and inspiring environment where every child can learn, explore and excel.'),
            'cta_headline' => Setting::get('facilities_cta_headline', 'Take a Campus Tour.'),
            'cta_desc' => Setting::get('facilities_cta_desc', 'Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience.'),

            // Imagery
            'hero_image' => Setting::get('facilities_hero_image', 'assets/images/about-campus-courtyard.jpg'),
            'card1_image' => Setting::get('facilities_card1_image', 'assets/images/fac-smart-class.jpg'),
            'card2_image' => Setting::get('facilities_card2_image', 'assets/images/fac-science-lab.jpg'),
            'card3_image' => Setting::get('facilities_card3_image', 'assets/images/fac-computer.jpg'),
            'card4_image' => Setting::get('facilities_card4_image', 'assets/images/fac-library.jpg'),
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
            'hero_badge' => Setting::get('disclosure_hero_badge', 'OUR COMMITMENT'),
            'hero_title' => Setting::get('disclosure_hero_title', 'Mandatory Public Disclosure'),
            'hero_desc' => Setting::get('disclosure_hero_desc', 'In compliance with CBSE guidelines, we provide the following mandatory information to ensure transparency and accuracy.'),
            'affiliation_period' => Setting::get('disclosure_affiliation_period', '2023 to 2028'),
            'society_name' => Setting::get('disclosure_society_name', 'Sanmati Sevabhavi Sanstha, Parbhani'),
            'trust_reg_no' => Setting::get('disclosure_trust_reg_no', 'F-3420 (Parbhani)'),
            'principal_qualification' => Setting::get('disclosure_principal_qualification', 'M.Sc., M.Ed., Ph.D.'),

            // Imagery
            'hero_image' => Setting::get('disclosure_hero_image', 'assets/images/about-hero-building.jpg'),
        ];

        return view('pages.mandatory-disclosure', compact('seo', 'content'));
    }
}
