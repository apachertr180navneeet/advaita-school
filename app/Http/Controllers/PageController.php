<?php

namespace App\Http\Controllers;

use App\Models\AcademicProgramme;
use App\Models\AcademicResult;
use App\Models\FeeStructure;
use App\Models\Setting;
use App\Services\AdmissionGuidelinesPdfService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

        $prePrimaryProgrammes = AcademicProgramme::active()->byStage('pre_primary')->get();
        $primaryProgrammes = AcademicProgramme::active()->byStage('primary')->get();
        $secondaryProgrammes = AcademicProgramme::active()->byStage('secondary')->get();

        return view('pages.academics', compact('seo', 'content', 'prePrimaryProgrammes', 'primaryProgrammes', 'secondaryProgrammes'));
    }

    public function prePrimary(): View
    {
        $seo = $this->getPageSeo(
            'pre_primary',
            'Pre-Primary Wing (Nursery, LKG, UKG) - Advaita School of Excellence, Parbhani',
            'Dedicated Pre-Primary landing page showcasing our play-based early learning curriculum, child-friendly facilities, and upcoming state-of-the-art new school building.',
            'Pre-Primary school Parbhani, Nursery admission Parbhani, Kindergarten CBSE, play school, early childhood education'
        );

        $content = [
            'hero_badge' => Setting::get('pre_hero_badge', 'PRE-PRIMARY WING (NURSERY · LKG · UKG)'),
            'hero_title' => Setting::get('pre_hero_title', 'Nurturing Curiosity in their'),
            'hero_highlight' => Setting::get('pre_hero_highlight', 'Most Wonder-Filled Years.'),
            'hero_subtitle' => Setting::get('pre_hero_subtitle', 'A joyful, play-based early childhood environment blending Montessori methods, sensory learning, and creative discovery.'),

            // Upcoming New Building & Facilities
            'new_building_badge' => Setting::get('pre_new_building_badge', 'COMING SOON · SESSION 2026'),
            'new_building_title' => Setting::get('pre_new_building_title', 'Our State-of-the-Art New Pre-Primary Wing'),
            'new_building_desc' => Setting::get('pre_new_building_desc', 'Designed specifically for early learners with air-conditioned thematic classrooms, splash pool, indoor sensory play stations, and child-safe infrastructure.'),
            'new_building_status' => Setting::get('pre_new_building_status', 'Under Construction · Opening for Next Academic Session'),
            'play_facilities_desc' => Setting::get('pre_play_facilities_desc', 'Spacious outdoor lawn playgrounds, splash pool, ball pool, crawl tunnels, and soft play areas engineered for safe motor skill development.'),
            'safety_hygiene_desc' => Setting::get('pre_safety_hygiene_desc', 'Round-the-clock CCTV surveillance, child-safe rounded furniture, sanitized play equipment, and dedicated female caretakers for compassionate supervision.'),
            'cta_headline' => Setting::get('pre_cta_headline', 'Give Your Child the Best Start in Life.'),
            'cta_subtext' => Setting::get('pre_cta_subtext', 'Admissions are now open for Nursery, LKG, and UKG for the upcoming session.'),

            // Imagery
            'hero_image' => Setting::get('pre_hero_image', 'assets/images/gallery/gallery-painted-hands-girl.jpg'),
            'building_image' => Setting::get('pre_building_image', 'assets/images/gallery/campus-building.png'),
            'play_image' => Setting::get('pre_play_image', 'assets/images/gallery/gallery-splash-pool-kids-play.jpg'),
            'classroom_image' => Setting::get('pre_classroom_image', 'assets/images/gallery/gallery-art-circle-kids.jpg'),
        ];

        $programmes = AcademicProgramme::active()->byStage('pre_primary')->get();

        return view('pages.academics.pre-primary', compact('seo', 'content', 'programmes'));
    }

    public function primary(): View
    {
        $seo = $this->getPageSeo(
            'primary',
            'Primary School (Classes 1 to 5) - Advaita School of Excellence, Parbhani',
            'Explore our primary curriculum (Classes 1-5) featuring foundational CBSE academics, integrated Abacus & mental arithmetic, Olympiad mentorship, and experiential activities.',
            'Primary school Parbhani, CBSE Class 1 to 5, Abacus school Parbhani, Olympiad coaching school, primary academics'
        );

        $content = [
            'hero_badge' => Setting::get('primary_hero_badge', 'PRIMARY WING (CLASSES 1 TO 5)'),
            'hero_title' => Setting::get('primary_hero_title', 'Building Strong Fundamentals in'),
            'hero_highlight' => Setting::get('primary_hero_highlight', 'Young Inquiring Minds.'),
            'hero_desc' => Setting::get('primary_hero_desc', 'Empowering primary students with deep conceptual clarity, linguistic confidence, and competitive exam readiness through joyful learning.'),
            'abacus_title' => Setting::get('primary_abacus_title', 'Abacus & Mental Arithmetic Programme'),
            'abacus_desc' => Setting::get('primary_abacus_desc', 'Integrated into the weekly curriculum to stimulate both brain hemispheres, enhance concentration, and build lightning-fast numerical calculation skills.'),
            'olympiad_title' => Setting::get('primary_olympiad_title', 'National & International Olympiad Mentorship'),
            'olympiad_desc' => Setting::get('primary_olympiad_desc', 'Structured training for SOF NSO, IMO, NCO, and IEO competitions with regular mock tests, concept worksheets, and state/national awards.'),

            // Imagery
            'hero_image' => Setting::get('primary_hero_image', 'assets/images/gallery/gallery-classroom-learning.jpg'),
            'abacus_image' => Setting::get('primary_abacus_image', 'assets/images/gallery/gallery-math-science-lab.jpg'),
            'activity_image' => Setting::get('primary_activity_image', 'assets/images/gallery/gallery-foundation-achievers.jpg'),
        ];

        $programmes = AcademicProgramme::active()->byStage('primary')->get();

        return view('pages.academics.primary', compact('seo', 'content', 'programmes'));
    }

    public function secondary(): View
    {
        $seo = $this->getPageSeo(
            'secondary',
            'Secondary School (Classes 6 to 10) - Advaita School of Excellence, Parbhani',
            'Secondary CBSE education (Classes 6-10) with integrated NEET/IIT Foundation, advanced science laboratories, 100% board exam passing record, and competitive mentoring.',
            'Secondary school CBSE Parbhani, Class 6 to 10, IIT foundation school Parbhani, NEET foundation, CBSE board exam toppers'
        );

        $content = [
            'hero_badge' => Setting::get('secondary_hero_badge', 'SECONDARY WING (CLASSES 6 TO 10)'),
            'hero_title' => Setting::get('secondary_hero_title', 'CBSE Excellence & NEET / IIT'),
            'hero_highlight' => Setting::get('secondary_hero_highlight', 'Foundation Pathways.'),
            'hero_desc' => Setting::get('secondary_hero_desc', 'A rigorous secondary programme designed to build top board scores and instill early competitive mastery for India\'s premier entrance examinations.'),
            'iit_title' => Setting::get('secondary_iit_title', 'Dedicated NEET / IIT Foundation Programme'),
            'iit_desc' => Setting::get('secondary_iit_desc', 'Integrated coaching with CBSE academics, focusing on advanced conceptual problem solving, higher-order thinking skills (HOTS), and diagnostic testing.'),
            'board_title' => Setting::get('secondary_board_title', '100% Board Pass Record with District Toppers'),
            'board_desc' => Setting::get('secondary_board_desc', 'Class 10 CBSE Board Examinations delivered with 100% pass rates, over 35% students scoring above 90%, and district first rank triumphs.'),

            // Imagery
            'hero_image' => Setting::get('secondary_hero_image', 'assets/images/fac-science-lab.jpg'),
            'iit_image' => Setting::get('secondary_iit_image', 'assets/images/gallery/academic-learning.png'),
            'lab_image' => Setting::get('secondary_lab_image', 'assets/images/gallery/robotics-lab.png'),
        ];

        $programmes = AcademicProgramme::active()->byStage('secondary')->get();

        return view('pages.academics.secondary', compact('seo', 'content', 'programmes'));
    }

    public function results(Request $request): View
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

        $selectedCategory = $request->query('category', 'all');
        $selectedYear = $request->query('year', 'all');

        $query = AcademicResult::active();

        if ($selectedCategory !== 'all' && array_key_exists($selectedCategory, AcademicResult::CATEGORIES)) {
            $query->where('category', $selectedCategory);
        }

        if ($selectedYear !== 'all') {
            $query->where('academic_year', $selectedYear);
        }

        $results = $query->get();
        $categories = AcademicResult::CATEGORIES;
        $academicYears = AcademicResult::distinct()->pluck('academic_year')->sortDesc()->values()->all();
        if (empty($academicYears)) {
            $academicYears = ['2025-26', '2024-25'];
        }

        // Category counts for badges
        $categoryCounts = [
            'all' => AcademicResult::where('is_active', true)->count(),
        ];
        foreach (array_keys($categories) as $cat) {
            $categoryCounts[$cat] = AcademicResult::where('is_active', true)->where('category', $cat)->count();
        }

        $featuredResults = AcademicResult::active()->featured()->take(3)->get();

        return view('pages.results', compact(
            'seo',
            'content',
            'results',
            'categories',
            'academicYears',
            'selectedCategory',
            'selectedYear',
            'categoryCounts',
            'featuredResults'
        ));
    }

    public function admissionInfo(): View
    {
        $seo = $this->getPageSeo(
            'admission_info',
            'Admission Information (2026-27) - Advaita School of Excellence',
            'Comprehensive admission guidelines, eligibility criteria, document requirements, admission process, transport facilities, uniform guidelines, and quick enquiry for Nursery to Class 10.',
            'School admissions Parbhani, CBSE admission 2026-27, Nursery admission, Class 1 to 10 school admission, school transport Parbhani'
        );

        $academicYear = Setting::get('admission_academic_year', '2026–27');
        $counsellorName = Setting::get('admission_counsellor_name', 'Ms. Vaishnavi');
        $counsellorPhone = Setting::get('admission_counsellor_phone', '9689898973');
        $schoolPhone1 = Setting::get('admission_school_phone1', '9689898973');
        $schoolPhone2 = Setting::get('admission_school_phone2', '9146066216');
        $contactPhone = $counsellorPhone;
        $contactEmail = Setting::get('contact_email', 'admissions@advaita.edu.in');
        $campusAddress = Setting::get('school_official_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra – 431401');
        $whatsappNumber = Setting::get('admission_whatsapp_number', '9689898973');
        $whatsappMessage = Setting::get(
            'admission_whatsapp_message',
            'Hello, I would like to enquire about school admission. Please share the admission process, eligibility criteria, required documents, and fee structure.'
        );
        $whatsappUrl = 'https://wa.me/91'.preg_replace('/[^0-9]/', '', $whatsappNumber).'?text='.rawurlencode($whatsappMessage);
        $directionsUrl = Setting::get(
            'school_maps_directions_url',
            'https://www.google.com/maps/dir/?api=1&destination=Advaita+School+of+Excellence,+Jintur+Road,+Parbhani,+Maharashtra+431401'
        );

        $eligibilityList = [
            [
                'grade' => 'Nursery',
                'wing' => 'Pre-Primary Wing',
                'wing_type' => 'preprimary',
                'age' => '3 Years +',
                'age_badge' => 'Minimum 3 Years',
                'age_note' => 'Completed as on 31st Dec 2026',
                'criterion' => 'Child must have completed 3 years of age as of 31st December 2026.',
                'doc_req' => 'Birth Certificate Mandatory',
                'entry' => 'Direct Admission',
            ],
            [
                'grade' => 'LKG',
                'wing' => 'Pre-Primary Wing',
                'wing_type' => 'preprimary',
                'age' => '4 Years +',
                'age_badge' => 'Minimum 4 Years',
                'age_note' => 'Completed as on 31st Dec 2026',
                'criterion' => 'Child must have completed 4 years of age as of 31st December 2026.',
                'doc_req' => 'Birth Certificate Mandatory',
                'entry' => 'Direct Admission',
            ],
            [
                'grade' => 'UKG',
                'wing' => 'Pre-Primary Wing',
                'wing_type' => 'preprimary',
                'age' => '5 Years +',
                'age_badge' => 'Minimum 5 Years',
                'age_note' => 'Completed as on 31st Dec 2026',
                'criterion' => 'Child must have completed 5 years of age as of 31st December 2026.',
                'doc_req' => 'Foundation Readiness',
                'entry' => 'Direct Admission',
            ],
            [
                'grade' => 'Class 1',
                'wing' => 'Primary Wing',
                'wing_type' => 'primary',
                'age' => '6 Years +',
                'age_badge' => 'Minimum 6 Years',
                'age_note' => 'As per NEP 2020 Guidelines',
                'criterion' => 'Child must have completed 6 years as per NEP guidelines. Original Birth Certificate required.',
                'doc_req' => 'Original Birth Certificate',
                'entry' => 'Direct / Merit',
            ],
            [
                'grade' => 'Classes 2 to 5',
                'wing' => 'Primary Wing',
                'wing_type' => 'primary',
                'age' => 'Grade Appropriate',
                'age_badge' => 'Grade-Appropriate',
                'age_note' => 'Previous Class Completion',
                'criterion' => 'Promoted from previous recognized school. Original Transfer Certificate (TC) & previous mark sheet required.',
                'doc_req' => 'Original TC & Marksheet',
                'entry' => 'Merit & TC Review',
            ],
            [
                'grade' => 'Classes 6 to 10',
                'wing' => 'Secondary Wing',
                'wing_type' => 'secondary',
                'age' => 'Grade Appropriate',
                'age_badge' => 'Grade-Appropriate',
                'age_note' => 'CBSE Affiliation Norms',
                'criterion' => 'Transfer Certificate counter-signed by competent authority. Document verification & counseling interaction.',
                'doc_req' => 'Countersigned TC Mandatory',
                'entry' => 'Merit & Interaction',
            ],
        ];

        $documentsList = [
            [
                'number' => 1,
                'title' => "Photocopy of the Student's Birth Certificate",
                'desc' => 'Official birth certificate issued by Municipal Corporation, Gram Panchayat, or Registrar of Births. (Original to be shown during verification).',
                'icon' => 'fa-solid fa-cake-candles',
                'mandatory' => true,
                'badge' => 'Photocopy',
            ],
            [
                'number' => 2,
                'title' => "Photocopy of the Student's Aadhaar Card",
                'desc' => "Clear, legible copy of the student's 12-digit UIDAI Aadhaar Card.",
                'icon' => 'fa-solid fa-id-card',
                'mandatory' => true,
                'badge' => 'Photocopy',
            ],
            [
                'number' => 3,
                'title' => "Student's Aadhaar Card Number",
                'desc' => 'Valid 12-digit Aadhaar UID number recorded on application form for official student portal enrollment.',
                'icon' => 'fa-solid fa-fingerprint',
                'mandatory' => true,
                'badge' => 'UID Number',
            ],
            [
                'number' => 4,
                'title' => 'Original School Leaving Certificate (SLC)',
                'desc' => 'Original School Leaving Certificate (SLC) / Transfer Certificate (TC) counter-signed by the competent education officer for Class 2 and above.',
                'icon' => 'fa-solid fa-file-signature',
                'mandatory' => true,
                'badge' => 'Original Document',
            ],
            [
                'number' => 5,
                'title' => 'Photocopy of Any One Address Proof',
                'desc' => 'Photocopy of any one valid residential proof: Ration Card, Electricity Bill, Passport, or Aadhaar Card.',
                'icon' => 'fa-solid fa-house-chimney',
                'mandatory' => true,
                'badge' => 'Photocopy (Any 1)',
                'options' => ['Ration Card', 'Electricity Bill', 'Passport', 'Aadhaar Card'],
            ],
            [
                'number' => 6,
                'title' => 'Photocopy of Aadhaar Card of Either Parent / Guardian',
                'desc' => 'Photocopy of the Aadhaar card of either father, mother, or legal guardian.',
                'icon' => 'fa-solid fa-user-shield',
                'mandatory' => true,
                'badge' => 'Photocopy',
            ],
            [
                'number' => 7,
                'title' => 'Photocopy of PAN Card of Either Parent / Guardian',
                'desc' => 'Photocopy of the Permanent Account Number (PAN) card of either parent or legal guardian.',
                'icon' => 'fa-solid fa-credit-card',
                'mandatory' => true,
                'badge' => 'Photocopy',
            ],
            [
                'number' => 8,
                'title' => 'Three Passport-size Photographs of the Student',
                'desc' => '3 recent identical, colored passport-size photographs of the student in formal appearance.',
                'icon' => 'fa-solid fa-camera',
                'mandatory' => true,
                'badge' => '3 Photographs',
            ],
            [
                'number' => 9,
                'title' => 'Caste Certificate (If Applicable)',
                'desc' => 'Competent authority caste certificate for candidates belonging to SC, ST, VJNT, NT, or OBC categories.',
                'icon' => 'fa-solid fa-certificate',
                'mandatory' => false,
                'badge' => 'If Applicable',
            ],
            [
                'number' => 10,
                'title' => 'UDISE Number of the Previous / Current School',
                'desc' => '11-digit Unified District Information System for Education (UDISE) code of the previous or currently enrolled school.',
                'icon' => 'fa-solid fa-hashtag',
                'mandatory' => true,
                'badge' => 'UDISE Code',
            ],
        ];

        $transportRoutes = [
            [
                'route' => 'Route 1: Station & Shivaji Chowk Corridor',
                'coverage' => 'Railway Station · Shivaji Chowk · Old Pedgaon Road · Bus Stand · Gangakhed Road',
                'icon' => 'fa-solid fa-route',
            ],
            [
                'route' => 'Route 2: Stadium & Jintur Road Corridor',
                'coverage' => 'District Stadium · Subhash Road · Gandhi Park · Zilla Parishad · Jintur Road',
                'icon' => 'fa-solid fa-road',
            ],
            [
                'route' => 'Route 3: Collector Office & Vasmat Corridor',
                'coverage' => 'Vasmat Road · Collector Office · Gyaneshwar Nagar · Dnyanopasak Campus · School Gate',
                'icon' => 'fa-solid fa-map-location-dot',
            ],
            [
                'route' => 'Route 4: Sambhaji Nagar & Dhar Corridor',
                'coverage' => 'Dhar Road · Sambhaji Nagar · Shaniwar Bazar · Karegaon Naka · School Campus',
                'icon' => 'fa-solid fa-location-crosshairs',
            ],
        ];

        return view('pages.admission-info', compact(
            'seo',
            'academicYear',
            'counsellorName',
            'counsellorPhone',
            'schoolPhone1',
            'schoolPhone2',
            'whatsappNumber',
            'whatsappMessage',
            'whatsappUrl',
            'directionsUrl',
            'contactPhone',
            'contactEmail',
            'campusAddress',
            'eligibilityList',
            'documentsList',
            'transportRoutes'
        ));
    }

    /**
     * Display the official Admission Guidelines & Eligibility page.
     */
    public function admissionGuidelines(): View
    {
        $seo = $this->getPageSeo(
            'admission_guidelines',
            'Admission Guidelines (Pre-Primary to Grade X) - Advaita School of Excellence, Parbhani',
            'Official admission guidelines, age criteria, phased implementation schedule, document checklists, 5-step admission procedure, and CBSE eligibility requirements for Pre-Primary to Grade X at Advaita School of Excellence, Parbhani.',
            'Advaita school admission guidelines, age criteria 30 June, CBSE admission rules Grade 9 10, Parbhani school admission process, required documents'
        );

        $academicYear = Setting::get('admission_academic_year', '2026–27');
        $cutoffDate = Setting::get('admission_age_cutoff', '30 June');
        $counsellorName = Setting::get('admission_counsellor_name', 'Ms. Vaishnavi');
        $counsellorPhone = Setting::get('admission_counsellor_phone', '9689898973');
        $schoolPhone1 = Setting::get('admission_school_phone1', '9689898973');
        $schoolPhone2 = Setting::get('admission_school_phone2', '9146066216');
        $campusAddress = Setting::get('school_official_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra – 431401');
        $whatsappNumber = Setting::get('admission_whatsapp_number', '9689898973');
        $whatsappMessage = Setting::get(
            'admission_whatsapp_message',
            'Hello, I would like to enquire about school admission. Please share the admission process, eligibility criteria, required documents, and fee structure.'
        );
        $whatsappUrl = 'https://wa.me/91'.preg_replace('/[^0-9]/', '', $whatsappNumber).'?text='.rawurlencode($whatsappMessage);
        $directionsUrl = Setting::get(
            'school_maps_directions_url',
            'https://www.google.com/maps/dir/?api=1&destination=Advaita+School+of+Excellence,+Jintur+Road,+Parbhani,+Maharashtra+431401'
        );

        // Section A: Age Criteria Table
        $ageCriteria = [
            [
                'class' => 'Nursery',
                'eligibility' => 'Minimum 3 years',
                'phased_year' => 'Academic Year 2027–28',
                'notes' => 'Child must have completed minimum 3 years of age as on 30 June of the admission academic year.',
            ],
            [
                'class' => 'Junior KG',
                'eligibility' => 'Minimum 4 years',
                'phased_year' => 'Academic Year 2028–29',
                'notes' => 'Child must have completed minimum 4 years of age as on 30 June of the admission academic year.',
            ],
            [
                'class' => 'Senior KG',
                'eligibility' => 'Minimum 5 years',
                'phased_year' => 'Academic Year 2029–30',
                'notes' => 'Child must have completed minimum 5 years of age as on 30 June of the admission academic year.',
            ],
            [
                'class' => 'Grade I',
                'eligibility' => 'Minimum 6 years',
                'phased_year' => 'Academic Year 2030–31',
                'notes' => 'Child must have completed minimum 6 years of age as on 30 June as per NEP 2020 & state guidelines.',
            ],
            [
                'class' => 'Grades II–VIII',
                'eligibility' => 'As per applicable Maharashtra Government rules and previous class completion',
                'phased_year' => 'Currently Open for Enrollment',
                'notes' => 'Promoted from previous recognized school with certified transfer certificate and annual mark sheet.',
            ],
            [
                'class' => 'Grades IX–X',
                'eligibility' => 'As per applicable CBSE admission rules and eligibility requirements',
                'phased_year' => 'Currently Open for Enrollment',
                'notes' => 'Grade IX requires Class VIII pass from recognized board. Grade X strictly restricted to specific CBSE transfer exemptions.',
            ],
        ];

        // Phased Implementation Schedule Highlights
        $phasedSchedule = [
            ['grade' => 'Nursery', 'year' => 'Academic Year 2027–28', 'status' => 'Upcoming Phase'],
            ['grade' => 'Junior KG', 'year' => 'Academic Year 2028–29', 'status' => 'Upcoming Phase'],
            ['grade' => 'Senior KG', 'year' => 'Academic Year 2029–30', 'status' => 'Upcoming Phase'],
            ['grade' => 'Grade I', 'year' => 'Academic Year 2030–31', 'status' => 'Upcoming Phase'],
        ];

        // Section B: 7 Required Document Categories
        $requiredDocuments = [
            [
                'number' => 1,
                'name' => 'Birth Certificate',
                'description' => 'Original birth certificate issued by Municipal Corporation or Gram Panchayat (shown for verification) along with self-attested photocopy.',
                'icon' => 'fa-solid fa-cake-candles',
                'badge' => 'Mandatory for All',
            ],
            [
                'number' => 2,
                'name' => "Student's Passport-Size Photographs",
                'description' => '3 to 5 recent identical passport-size color photographs of the student in formal clothing against a plain background.',
                'icon' => 'fa-solid fa-camera',
                'badge' => '3-5 Color Photos',
            ],
            [
                'number' => 3,
                'name' => 'Aadhaar Details, Where Applicable',
                'description' => 'Clear photocopy of the student’s 12-digit Aadhaar Card along with UID recording on the official application form.',
                'icon' => 'fa-solid fa-id-card',
                'badge' => 'UIDAI Verified',
            ],
            [
                'number' => 4,
                'name' => 'Previous Class Report Card',
                'description' => 'Comprehensive progress card / annual mark sheet demonstrating successful completion of the preceding academic class from a recognised school.',
                'icon' => 'fa-solid fa-file-lines',
                'badge' => 'Class 2 and Above',
            ],
            [
                'number' => 5,
                'name' => 'Transfer Certificate (TC), Where Applicable',
                'description' => 'Original School Leaving Certificate (SLC) / Transfer Certificate countersigned by the competent Education Officer / CBSE authority.',
                'icon' => 'fa-solid fa-file-signature',
                'badge' => 'Original Document',
            ],
            [
                'number' => 6,
                'name' => "Parent's Identity and Address Proof, Where Required",
                'description' => 'Photocopy of identity and residential proof (Aadhaar Card, Passport, Electricity Bill, or Ration Card) of either parent/legal guardian.',
                'icon' => 'fa-solid fa-house-chimney-user',
                'badge' => 'Either Parent / Guardian',
            ],
            [
                'number' => 7,
                'name' => 'Additional Documents, If Prescribed by the Authorities',
                'description' => 'Caste Certificate (for SC/ST/VJNT/OBC categories), UDISE student number from previous school, or certified medical/disability records if applicable.',
                'icon' => 'fa-solid fa-folder-open',
                'badge' => 'As Applicable',
            ],
        ];

        // Section C: Admission Procedure (5-Step Sequence)
        $procedureSteps = [
            [
                'step' => 1,
                'title' => 'Submit Online Enquiry or Registration Form',
                'desc' => 'Begin by submitting either our Quick Admission Enquiry or the comprehensive Online Registration Form with applicant and academic details.',
                'icon' => 'fa-solid fa-laptop-file',
            ],
            [
                'step' => 2,
                'title' => 'Submit the Required Documents',
                'desc' => 'Submit copies of the prescribed documents (Birth Certificate, Photographs, Aadhaar, previous report cards) for administrative verification.',
                'icon' => 'fa-solid fa-clipboard-check',
            ],
            [
                'step' => 3,
                'title' => 'Attend an Interaction or Assessment, If Applicable',
                'desc' => 'Parents and applicant attend a friendly, supportive interaction with teachers/counsellors or grade-appropriate assessment of learning readiness.',
                'icon' => 'fa-solid fa-comments',
            ],
            [
                'step' => 4,
                'title' => 'Complete Prescribed Admission Formalities and Fee Payment',
                'desc' => 'Upon document verification and eligibility confirmation, complete admission formalities and fee installment payment via school fee counter/portal.',
                'icon' => 'fa-solid fa-receipt',
            ],
            [
                'step' => 5,
                'title' => 'Receive Admission Confirmation',
                'desc' => 'Receive formal admission confirmation letter, unique Student Enrollment ID, class & section allotment, and school commencement timetable.',
                'icon' => 'fa-solid fa-circle-check',
            ],
        ];

        // Section D: Class Eligibility Rules
        $classEligibility = [
            [
                'classes' => 'Grades II–VIII',
                'rule' => 'Successful completion of the previous class, subject to applicable rules.',
                'detail' => 'Candidates must have successfully cleared the preceding grade from a recognised school and present valid marksheets along with counter-signed Transfer Certificate.',
                'icon' => 'fa-solid fa-graduation-cap',
            ],
            [
                'classes' => 'Grade IX',
                'rule' => 'Successful completion of Grade VIII from a recognised school.',
                'detail' => 'Must have passed Class 8 from a CBSE or state-recognised school with fundamental proficiency in Mathematics, Science, and Languages.',
                'icon' => 'fa-solid fa-award',
            ],
            [
                'classes' => 'Grade X',
                'rule' => 'Direct admission is not permitted except under specific exceptions prescribed by CBSE.',
                'detail' => 'As per standard CBSE Examination Bye-Laws, direct admission in Class X is strictly prohibited except under verified transfer of parents in defence/government service, interstate relocation, or board-approved exceptional circumstances.',
                'icon' => 'fa-solid fa-shield-halved',
            ],
        ];

        // Section E: Important Instructions
        $importantInstructions = [
            'All information and documents must be accurate and authentic.',
            'Registration does not guarantee admission.',
            'Admissions are subject to seat availability and applicable rules.',
            'Admission to Grades IX and X is subject to applicable CBSE requirements.',
            'Parents must complete all formalities within the stipulated time.',
        ];

        return view('pages.admission-guidelines', compact(
            'seo',
            'academicYear',
            'cutoffDate',
            'counsellorName',
            'counsellorPhone',
            'schoolPhone1',
            'schoolPhone2',
            'campusAddress',
            'whatsappUrl',
            'directionsUrl',
            'ageCriteria',
            'phasedSchedule',
            'requiredDocuments',
            'procedureSteps',
            'classEligibility',
            'importantInstructions'
        ));
    }

    /**
     * Download the official Admission Guidelines PDF document.
     */
    public function downloadAdmissionGuidelinesPdf(AdmissionGuidelinesPdfService $pdfService): Response
    {
        $pdfContent = $pdfService->generate();

        return response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Admission_Guidelines_Advaita_School_Parbhani.pdf"',
            'Cache-Control' => 'no-cache, must-revalidate',
        ]);
    }

    /**
     * Display the print-optimized view of the Admission Guidelines.
     */
    public function printAdmissionGuidelines(): View
    {
        $academicYear = Setting::get('admission_academic_year', '2026–27');
        $cutoffDate = Setting::get('admission_age_cutoff', '30 June');
        $counsellorName = Setting::get('admission_counsellor_name', 'Ms. Vaishnavi');
        $counsellorPhone = Setting::get('admission_counsellor_phone', '9689898973');
        $schoolPhone1 = Setting::get('admission_school_phone1', '9689898973');
        $schoolPhone2 = Setting::get('admission_school_phone2', '9146066216');
        $campusAddress = Setting::get('school_official_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra – 431401');

        return view('pages.admission-guidelines-print', compact(
            'academicYear',
            'cutoffDate',
            'counsellorName',
            'counsellorPhone',
            'schoolPhone1',
            'schoolPhone2',
            'campusAddress'
        ));
    }

    public function feeStructure(): View
    {
        $seo = $this->getPageSeo(
            'fee_structure',
            'Fee Structure (2026-27) - Advaita School of Excellence, Parbhani',
            'Official fee structure and installment guidelines for Pre-Primary, Primary, and Secondary classes at Advaita School of Excellence, Parbhani.',
            'Advaita school fee structure, Parbhani school fees, CBSE school tuition fees, installment plans, CBSE fee schedule'
        );

        $isPublished = (bool) Setting::get('fee_structure_published', false);
        $academicYear = Setting::get('fee_academic_year', '2026–27');
        $lastUpdated = Setting::get('fee_last_updated', date('F Y'));
        $pendingNotice = Setting::get('fee_pending_notice', 'The class-wise fee structure for Academic Session 2026–27 is currently under final review and will be published shortly upon approval by school management. For provisional fee estimates or immediate admission counseling, please contact our admissions office or submit a Quick Enquiry.');

        $prePrimaryFees = FeeStructure::where('wing', 'pre_primary')->orderBy('order')->get();
        $primaryFees = FeeStructure::where('wing', 'primary')->orderBy('order')->get();
        $secondaryFees = FeeStructure::where('wing', 'secondary')->orderBy('order')->get();
        $allFees = FeeStructure::orderBy('order')->get();

        $content = [
            'hero_badge' => Setting::get('fee_hero_badge', 'ADMISSIONS 2026–27'),
            'hero_title' => Setting::get('fee_hero_title', 'Fees, paid in simple terms.'),
            'hero_desc' => Setting::get('fee_hero_desc', 'A clear, transparent fee structure designed to make quality education accessible for every child.'),
            'academic_year' => $academicYear,
            'installments_note' => Setting::get('fee_installments_note', 'Fees can be conveniently paid in three term-wise installments or an annual one-time payment with special benefits.'),
            'transparency_note' => Setting::get('fee_transparency_note', 'No hidden charges or mandatory surprise fees. Detailed receipts are issued for all transactions.'),
            'hero_image' => Setting::get('fee_hero_image', 'assets/images/about-cta-students-clean.png'),
            'cta_image' => Setting::get('fee_cta_image', 'assets/images/about-story-student.jpg'),
        ];

        return view('pages.fee-structure', compact(
            'seo',
            'content',
            'isPublished',
            'academicYear',
            'lastUpdated',
            'pendingNotice',
            'prePrimaryFees',
            'primaryFees',
            'secondaryFees',
            'allFees'
        ));
    }

    public function facilities(): View
    {
        $seo = $this->getPageSeo(
            'facilities',
            'Campus Facilities & Infrastructure - Advaita School of Excellence, Parbhani',
            'Explore verified facilities across our 10,000 sq. mtr. campus featuring smart classrooms, robotics and science laboratories, sports lawn, library, and 24x7 security.',
            'School facilities Parbhani, robotics lab, smart classes, sports ground, library, campus infrastructure, 10000 sq mtr campus'
        );

        $content = [
            'hero_badge' => Setting::get('facilities_hero_badge', 'OUR CAMPUS'),
            'hero_title' => Setting::get('facilities_hero_title', 'More than Classrooms, A Place to Grow.'),
            'hero_desc' => Setting::get('facilities_hero_desc', 'Our campus is thoughtfully designed to provide a safe, modern and inspiring environment where every child can learn, explore and excel across 10,000 sq. mtrs. of dedicated infrastructure.'),
            'campus_area' => Setting::get('facilities_campus_area', '10,000 Sq. Mtrs. (~2.47 Acres)'),
            'classrooms_count' => Setting::get('facilities_classrooms_count', '25 Smart Classrooms'),
            'labs_count' => Setting::get('facilities_labs_count', '3 Dedicated Labs'),
            'cta_headline' => Setting::get('facilities_cta_headline', 'Take a Campus Tour.'),
            'cta_desc' => Setting::get('facilities_cta_desc', 'Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience.'),

            // Verified Imagery
            'hero_image' => Setting::get('facilities_hero_image', 'assets/images/about-campus-courtyard.jpg'),
            'card1_image' => Setting::get('facilities_card1_image', 'assets/images/fac-smart-class.jpg'),
            'card2_image' => Setting::get('facilities_card2_image', 'assets/images/gallery/science-lab.png'),
            'card3_image' => Setting::get('facilities_card3_image', 'assets/images/gallery/robotics-lab.png'),
            'card4_image' => Setting::get('facilities_card4_image', 'assets/images/fac-library.jpg'),
            'card5_image' => Setting::get('facilities_card5_image', 'assets/images/gallery/gallery-parachute-lawn-building.jpg'),
            'card6_image' => Setting::get('facilities_card6_image', 'assets/images/gallery-assembly.jpg'),
            'card7_image' => Setting::get('facilities_card7_image', 'assets/images/fac-transport.jpg'),
            'card8_image' => Setting::get('facilities_card8_image', 'assets/images/fac-security.jpg'),
            'card9_image' => Setting::get('facilities_card9_image', 'assets/images/gallery-day-1.jpg'),
            'card10_image' => Setting::get('facilities_card10_image', 'assets/images/prog-early-years.jpg'),
            'card11_image' => Setting::get('facilities_card11_image', 'assets/images/gallery/campus-building.png'),
            'card12_image' => Setting::get('facilities_card12_image', 'assets/images/gallery/gallery-art-circle-kids.jpg'),
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
