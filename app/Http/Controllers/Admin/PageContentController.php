<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageContentController extends Controller
{
    /**
     * Map of supported school content pages.
     *
     * @var array<string, array<string, mixed>>
     */
    protected array $sectionsMap = [
        'about' => [
            'name' => 'About Us Page',
            'url' => '/about-us',
            'seo_key' => 'about_us',
            'icon' => 'fa-solid fa-school',
            'category' => 'Leadership & Story',
            'fields' => [
                // Hero Section
                'about_hero_eyebrow' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'About Us'],
                'about_hero_title' => ['label' => 'Hero Main Title Prefix', 'type' => 'text', 'default' => 'Advaita School of Excellence,'],
                'about_hero_highlight' => ['label' => 'Hero Title Highlight', 'type' => 'text', 'default' => 'Parbhani'],
                'about_hero_tagline' => ['label' => 'Hero Tagline (Bold)', 'type' => 'textarea', 'default' => "Nurturing Excellence. Inspiring Innovation.\nShaping Futures."],
                'about_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'Established in 2016 under the visionary leadership of Mr. Vishal Vattamwar, Chairman of Sanmati Sevabhavi Sanstha, Advaita School of Excellence, Parbhani, was founded to bring quality education to every student in Parbhani.'],
                'about_hero_image' => ['label' => 'Hero Campus Building Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],

                // Our Vision Section
                'about_vision_eyebrow' => ['label' => 'Vision Eyebrow', 'type' => 'text', 'default' => 'Our Vision'],
                'about_vision_title' => ['label' => 'Vision Heading Prefix', 'type' => 'text', 'default' => 'A Vision Beyond Conventional'],
                'about_vision_highlight' => ['label' => 'Vision Heading Highlight', 'type' => 'text', 'default' => 'Schooling.'],
                'about_vision_desc' => ['label' => 'Vision Description', 'type' => 'textarea', 'default' => 'At Advaita, education goes beyond textbooks and examinations. We aim to nurture curious minds, develop strong conceptual foundations, and prepare students for a competitive future.'],
                'about_vision_btn_text' => ['label' => 'Vision Button Label', 'type' => 'text', 'default' => 'Learn More'],
                'about_vision_btn_url' => ['label' => 'Vision Button URL', 'type' => 'text', 'default' => '/vision-mission'],
                'about_vision_image' => ['label' => 'Vision Students Image', 'type' => 'image', 'default' => 'assets/images/about-vision-students.jpg'],

                // Our Pillars Section
                'about_pillars_eyebrow' => ['label' => 'Pillars Eyebrow', 'type' => 'text', 'default' => 'Our Pillars'],
                'about_pillars_title' => ['label' => 'Pillars Heading Prefix', 'type' => 'text', 'default' => 'Built on Values. Driven by'],
                'about_pillars_highlight' => ['label' => 'Pillars Heading Highlight', 'type' => 'text', 'default' => 'Excellence.'],

                // Our Journey Section
                'about_journey_eyebrow' => ['label' => 'Journey Eyebrow', 'type' => 'text', 'default' => 'Our Journey'],
                'about_journey_title' => ['label' => 'Journey Heading', 'type' => 'text', 'default' => 'From Roots to Remarkable Achievements.'],
                'about_journey_desc' => ['label' => 'Journey Description', 'type' => 'textarea', 'default' => 'Affiliated with CBSE since 2019, Advaita School of Excellence achieved the No. 1 position in Parbhani in Class X Board Results in 2026 — a milestone of collective effort.'],
                'about_journey_image' => ['label' => 'Journey Trophy Graphic', 'type' => 'image', 'default' => 'assets/images/about-journey-trophy.png'],

                // Academic Stages Section
                'about_stages_eyebrow' => ['label' => 'Academic Journey Eyebrow', 'type' => 'text', 'default' => 'Our Academic Journey'],
                'about_stages_title' => ['label' => 'Academic Journey Title', 'type' => 'text', 'default' => 'Learning at Every Stage.'],
                'about_stages_desc' => ['label' => 'Academic Journey Description', 'type' => 'textarea', 'default' => 'From Foundational to Secondary Stage, we provide a structured and engaging learning path for every child.'],

                // Our Commitment Section
                'about_commitment_eyebrow' => ['label' => 'Commitment Eyebrow', 'type' => 'text', 'default' => 'Our Commitment'],
                'about_commitment_title' => ['label' => 'Commitment Heading Prefix', 'type' => 'text', 'default' => 'Empowering Every Child for a'],
                'about_commitment_highlight' => ['label' => 'Commitment Heading Highlight', 'type' => 'text', 'default' => 'Brighter Tomorrow.'],
                'about_commitment_desc' => ['label' => 'Commitment Description', 'type' => 'textarea', 'default' => 'With visionary leadership and dedicated educators, we are committed to empowering students with the knowledge, values and skills to succeed in life.'],
                'about_commitment_btn_text' => ['label' => 'Commitment Button Label', 'type' => 'text', 'default' => 'Join Our Journey'],
                'about_commitment_btn_url' => ['label' => 'Commitment Button URL', 'type' => 'text', 'default' => '/online-registration'],
                'about_commitment_image' => ['label' => 'Commitment Students Photo', 'type' => 'image', 'default' => 'assets/images/about-commitment-students.jpg'],
            ],
        ],
        'vision' => [
            'name' => 'Vision & Mission',
            'url' => '/vision-mission',
            'seo_key' => 'vision_mission',
            'icon' => 'fa-solid fa-bullseye',
            'category' => 'Leadership & Story',
            'fields' => [
                'vision_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'OUR VISION & MISSION'],
                'vision_hero_title' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'Guiding Young Minds Towards a'],
                'vision_hero_highlight' => ['label' => 'Hero Highlight Heading', 'type' => 'text', 'default' => 'Brighter Tomorrow.'],
                'vision_hero_desc' => ['label' => 'Hero Subtitle Description', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, our vision and mission reflect our unwavering commitment to academic excellence, strong values and the all-round development of every child.'],
                'vision_title' => ['label' => 'Vision Card Heading', 'type' => 'text', 'default' => 'To nurture confident, creative and responsible global citizens.'],
                'vision_text' => ['label' => 'Vision Card Statement', 'type' => 'textarea', 'default' => 'We envision a progressive learning community where every child discovers their unique potential, builds a strong character and contributes positively to a brighter and better world.'],
                'mission_title' => ['label' => 'Mission Card Heading', 'type' => 'text', 'default' => 'To provide a holistic, value-based education with strong academic foundations.'],
                'mission_text' => ['label' => 'Mission Card Statement', 'type' => 'textarea', 'default' => 'Through innovative teaching, individual attention, world-class infrastructure and strong NEET/IIT foundation programmes, we empower students to achieve excellence in competitive exams and life.'],
                'vision_cta_eyebrow' => ['label' => 'Bottom CTA Eyebrow', 'type' => 'text', 'default' => 'TOGETHER TOWARDS A BRIGHTER TOMORROW'],
                'vision_cta_headline' => ['label' => 'Bottom CTA Headline', 'type' => 'text', 'default' => 'Be a Part of the Advaita Journey'],
                'vision_cta_subtext' => ['label' => 'Bottom CTA Subtext', 'type' => 'textarea', 'default' => 'Give your child the right start with strong academics, values and endless opportunities.'],

                // Imagery
                'vision_hero_image' => ['label' => 'Hero Campus Background Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
                'vision_card_image' => ['label' => 'Vision Card Mountain Peak Image', 'type' => 'image', 'default' => 'assets/images/vision-mountain-peak.jpg'],
                'mission_card_image' => ['label' => 'Mission Card Student Image', 'type' => 'image', 'default' => 'assets/images/mission-student-inspirational.jpg'],
                'vision_cta_image' => ['label' => 'Bottom CTA Students Trio Image', 'type' => 'image', 'default' => 'assets/images/about-cta-students-trio.png'],
            ],
        ],
        'chairman' => [
            'name' => "Chairman's Desk",
            'url' => '/chairmans-desk',
            'seo_key' => 'chairmans_desk',
            'icon' => 'fa-solid fa-user-tie',
            'category' => 'Leadership & Story',
            'fields' => [
                'chairman_hero_eyebrow' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'FROM THE CHAIRMAN'],
                'chairman_hero_title' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'Building Stronger Foundations for'],
                'chairman_hero_highlight' => ['label' => 'Hero Highlight Heading', 'type' => 'text', 'default' => 'Brighter Tomorrows.'],
                'chairman_name' => ['label' => 'Chairman Full Name', 'type' => 'text', 'default' => 'Dr. Sureshji Jain'],
                'chairman_designation' => ['label' => 'Official Designation', 'type' => 'text', 'default' => 'Chairman, Sanmati Sevabhavi Sanstha'],
                'chairman_quote' => ['label' => 'Inspirational Quote Box', 'type' => 'textarea', 'default' => 'True education is not mere accumulation of facts; it is the ignition of the human spirit to serve society and seek excellence in every endeavor.'],
                'chairman_welcome' => ['label' => 'Message Heading', 'type' => 'text', 'default' => 'A Message of Hope and Ambition'],
                'chairman_message_p1' => ['label' => 'Message Paragraph 1', 'type' => 'textarea', 'default' => 'Advaita School of Excellence was born from a deep conviction that children in Parbhani deserve the finest educational opportunities — matching the best in the nation while staying rooted in our timeless cultural values.'],
                'chairman_message_p2' => ['label' => 'Message Paragraph 2', 'type' => 'textarea', 'default' => 'Over the years, our campus has flourished into a vibrant sanctuary of learning, discovery, and sportsmanship. We invest continuously in modern labs, world-class teachers, and a secure environment so parents can entrust us with their children with utmost confidence.'],

                // Imagery
                'chairman_image' => ['label' => 'Chairman Portrait Photo', 'type' => 'image', 'default' => 'assets/images/chairman-real.png'],
                'chairman_hero_image' => ['label' => 'Hero Campus Background Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
            ],
        ],
        'principal' => [
            'name' => "Principal's Desk",
            'url' => '/principals-desk',
            'seo_key' => 'principals_desk',
            'icon' => 'fa-solid fa-user-graduate',
            'category' => 'Leadership & Story',
            'fields' => [
                'principal_hero_eyebrow' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'FROM THE PRINCIPAL'],
                'principal_hero_title' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'Nurturing Potential for a'],
                'principal_hero_highlight' => ['label' => 'Hero Highlight Heading', 'type' => 'text', 'default' => 'Brighter Tomorrow.'],
                'principal_name' => ['label' => 'Principal Full Name', 'type' => 'text', 'default' => 'Mrs. Sunita S. Deshmukh'],
                'principal_designation' => ['label' => 'Official Designation', 'type' => 'text', 'default' => 'Principal, Advaita School of Excellence'],
                'principal_quote' => ['label' => 'Featured Quote Box', 'type' => 'textarea', 'default' => 'Every child enters our gates with unique curiosity. Our privilege and sacred duty is to nurture that spark into an unshakeable flame of confidence.'],
                'principal_welcome' => ['label' => 'Welcome Heading', 'type' => 'text', 'default' => 'Welcoming You to Our Family'],
                'principal_message_p1' => ['label' => 'Message Paragraph 1', 'type' => 'textarea', 'default' => 'It is with immense joy that I welcome you to Advaita School of Excellence. As educators, our primary purpose is to provide a joyful, safe, and academically rigorous space where children are excited to come every single morning.'],
                'principal_message_p2' => ['label' => 'Message Paragraph 2', 'type' => 'textarea', 'default' => 'With the integration of CBSE modern learning guidelines, robotics, and co-curricular programs, our students excel not only in exams but also in teamwork, public speaking, and problem solving.'],

                // Imagery
                'principal_image' => ['label' => 'Principal Portrait Photo', 'type' => 'image', 'default' => 'assets/images/principal-desk.jpg'],
                'principal_hero_image' => ['label' => 'Hero Campus Background Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
            ],
        ],
        'academics' => [
            'name' => 'Academics Overview & Pedagogy',
            'url' => '/academics',
            'seo_key' => 'academics',
            'icon' => 'fa-solid fa-book-open',
            'category' => 'Academics & Programmes',
            'fields' => [
                'academics_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'OUR ACADEMICS'],
                'academics_hero_title' => ['label' => 'Hero Main Heading', 'type' => 'text', 'default' => 'A Strong Foundation for a Brighter Tomorrow.'],
                'academics_hero_desc' => ['label' => 'Hero Subtitle Description', 'type' => 'textarea', 'default' => 'A thoughtfully designed curriculum that nurtures curiosity, builds strong concepts and prepares students for lifelong success.'],
                'academics_curriculum_affiliation' => ['label' => 'Board Affiliation Line', 'type' => 'text', 'default' => 'Affiliated with the Central Board of Secondary Education (CBSE), New Delhi. Affiliation No: 1130920.'],
                'academics_cta_headline' => ['label' => 'Admissions Banner Headline', 'type' => 'text', 'default' => 'Give Your Child the Advaita Advantage.'],
                'academics_cta_subtext' => ['label' => 'Admissions Banner Subtext', 'type' => 'textarea', 'default' => 'A strong academic foundation today, for a brighter and bolder tomorrow.'],

                // Imagery
                'academics_hero_image' => ['label' => 'Hero Top Students Image', 'type' => 'image', 'default' => 'assets/images/about-cta-students-clean.png'],
                'academics_stream_image' => ['label' => 'Learning Streams Student Photo', 'type' => 'image', 'default' => 'assets/images/about-philosophy-student.jpg'],
                'academics_activity_image' => ['label' => 'Beyond Classroom Activity Photo', 'type' => 'image', 'default' => 'assets/images/about-story-student.jpg'],
            ],
        ],
        'pre_primary' => [
            'name' => 'Pre-Primary Wing (Nursery – UKG)',
            'url' => '/academics/pre-primary',
            'seo_key' => 'pre_primary',
            'icon' => 'fa-solid fa-shapes',
            'category' => 'Academics & Programmes',
            'fields' => [
                'pre_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'PRE-PRIMARY WING (NURSERY · LKG · UKG)'],
                'pre_hero_title' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'Nurturing Curiosity in their'],
                'pre_hero_highlight' => ['label' => 'Hero Highlight Line 2', 'type' => 'text', 'default' => 'Most Wonder-Filled Years.'],
                'pre_hero_subtitle' => ['label' => 'Hero Subtitle Paragraph', 'type' => 'textarea', 'default' => 'A joyful, play-based early childhood environment blending Montessori methods, sensory learning, and creative discovery.'],
                'pre_new_building_badge' => ['label' => 'Upcoming Building Badge', 'type' => 'text', 'default' => 'COMING SOON · SESSION 2026'],
                'pre_new_building_title' => ['label' => 'Upcoming Building Title', 'type' => 'text', 'default' => 'Our State-of-the-Art New Pre-Primary Wing'],
                'pre_new_building_desc' => ['label' => 'Upcoming Building Details', 'type' => 'textarea', 'default' => 'Designed specifically for early learners with air-conditioned thematic classrooms, splash pool, indoor sensory play stations, and child-safe infrastructure.'],
                'pre_new_building_status' => ['label' => 'New Building Construction Status', 'type' => 'text', 'default' => 'Under Construction · Opening for Next Academic Session'],
                'pre_play_facilities_desc' => ['label' => 'Indoor & Outdoor Play Description', 'type' => 'textarea', 'default' => 'Spacious outdoor lawn playgrounds, splash pool, ball pool, crawl tunnels, and soft play areas engineered for safe motor skill development.'],
                'pre_safety_hygiene_desc' => ['label' => 'Child Safety & Hygiene Statement', 'type' => 'textarea', 'default' => 'Round-the-clock CCTV surveillance, child-safe rounded furniture, sanitized play equipment, and dedicated female caretakers for compassionate supervision.'],
                'pre_cta_headline' => ['label' => 'Admission CTA Headline', 'type' => 'text', 'default' => 'Give Your Child the Best Start in Life.'],
                'pre_cta_subtext' => ['label' => 'Admission CTA Subtext', 'type' => 'textarea', 'default' => 'Admissions are now open for Nursery, LKG, and UKG for the upcoming session.'],

                // Imagery
                'pre_hero_image' => ['label' => 'Hero Early Childhood Image', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-painted-hands-girl.jpg'],
                'pre_building_image' => ['label' => 'Upcoming Building Showcase Image', 'type' => 'image', 'default' => 'assets/images/gallery/campus-building.png'],
                'pre_play_image' => ['label' => 'Play Area & Splash Pool Image', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-splash-pool-kids-play.jpg'],
                'pre_classroom_image' => ['label' => 'Thematic Classroom Image', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-art-circle-kids.jpg'],
            ],
        ],
        'primary' => [
            'name' => 'Primary School (Classes 1 to 5)',
            'url' => '/academics/primary',
            'seo_key' => 'primary',
            'icon' => 'fa-solid fa-book-open-reader',
            'category' => 'Academics & Programmes',
            'fields' => [
                'primary_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'PRIMARY WING (CLASSES 1 TO 5)'],
                'primary_hero_title' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'Building Strong Fundamentals in'],
                'primary_hero_highlight' => ['label' => 'Hero Highlight Line 2', 'type' => 'text', 'default' => 'Young Inquiring Minds.'],
                'primary_hero_desc' => ['label' => 'Hero Subtitle Paragraph', 'type' => 'textarea', 'default' => 'Empowering primary students with deep conceptual clarity, linguistic confidence, and competitive exam readiness through joyful learning.'],
                'primary_abacus_title' => ['label' => 'Abacus Programme Title', 'type' => 'text', 'default' => 'Abacus & Mental Arithmetic Programme'],
                'primary_abacus_desc' => ['label' => 'Abacus Description', 'type' => 'textarea', 'default' => 'Integrated into the weekly curriculum to stimulate both brain hemispheres, enhance concentration, and build lightning-fast numerical calculation skills.'],
                'primary_olympiad_title' => ['label' => 'Olympiad Mentorship Title', 'type' => 'text', 'default' => 'National & International Olympiad Mentorship'],
                'primary_olympiad_desc' => ['label' => 'Olympiad Description', 'type' => 'textarea', 'default' => 'Structured training for SOF NSO, IMO, NCO, and IEO competitions with regular mock tests, concept worksheets, and state/national awards.'],

                // Imagery
                'primary_hero_image' => ['label' => 'Hero Primary Students Image', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-classroom-learning.jpg'],
                'primary_abacus_image' => ['label' => 'Abacus & Math Lab Image', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-math-science-lab.jpg'],
                'primary_activity_image' => ['label' => 'Olympiad & Achievers Image', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-foundation-achievers.jpg'],
            ],
        ],
        'secondary' => [
            'name' => 'Secondary School (Classes 6 to 10)',
            'url' => '/academics/secondary',
            'seo_key' => 'secondary',
            'icon' => 'fa-solid fa-graduation-cap',
            'category' => 'Academics & Programmes',
            'fields' => [
                'secondary_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'SECONDARY WING (CLASSES 6 TO 10)'],
                'secondary_hero_title' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'CBSE Excellence & NEET / IIT'],
                'secondary_hero_highlight' => ['label' => 'Hero Highlight Line 2', 'type' => 'text', 'default' => 'Foundation Pathways.'],
                'secondary_hero_desc' => ['label' => 'Hero Subtitle Paragraph', 'type' => 'textarea', 'default' => 'A rigorous secondary programme designed to build top board scores and instill early competitive mastery for India\'s premier entrance examinations.'],
                'secondary_iit_title' => ['label' => 'IIT Foundation Title', 'type' => 'text', 'default' => 'Dedicated NEET / IIT Foundation Programme'],
                'secondary_iit_desc' => ['label' => 'IIT Foundation Description', 'type' => 'textarea', 'default' => 'Integrated coaching with CBSE academics, focusing on advanced conceptual problem solving, higher-order thinking skills (HOTS), and diagnostic testing.'],
                'secondary_board_title' => ['label' => 'Board Excellence Title', 'type' => 'text', 'default' => '100% Board Pass Record with District Toppers'],
                'secondary_board_desc' => ['label' => 'Board Excellence Description', 'type' => 'textarea', 'default' => 'Class 10 CBSE Board Examinations delivered with 100% pass rates, over 35% students scoring above 90%, and district first rank triumphs.'],

                // Imagery
                'secondary_hero_image' => ['label' => 'Hero Secondary Students Image', 'type' => 'image', 'default' => 'assets/images/fac-science-lab.jpg'],
                'secondary_iit_image' => ['label' => 'IIT Foundation Class Image', 'type' => 'image', 'default' => 'assets/images/gallery/academic-learning.png'],
                'secondary_lab_image' => ['label' => 'Robotics & Science Lab Image', 'type' => 'image', 'default' => 'assets/images/gallery/robotics-lab.png'],
            ],
        ],
        'results' => [
            'name' => 'Board Results & Toppers',
            'url' => '/results',
            'seo_key' => 'results',
            'icon' => 'fa-solid fa-square-poll-vertical',
            'category' => 'Academics & Results',
            'fields' => [
                'results_hero_badge' => ['label' => 'Badge / Eyebrow Text', 'type' => 'text', 'default' => 'OUR PERFORMANCE'],
                'results_hero_title' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'Results that'],
                'results_hero_subtitle' => ['label' => 'Hero Highlight Subtitle', 'type' => 'text', 'default' => 'speak for themselves.'],
                'results_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'Year after year, our students continue to excel, making us proud with outstanding academic results.'],
                'results_stat_pass_rate' => ['label' => 'Overall Pass Percentage', 'type' => 'text', 'default' => '100%'],
                'results_stat_90_plus' => ['label' => 'Students Scored 90%+', 'type' => 'text', 'default' => '35%'],
                'results_stat_80_plus' => ['label' => 'Students Scored 80%+', 'type' => 'text', 'default' => '~33%'],
                'results_stat_top_percentage' => ['label' => 'Highest District Score', 'type' => 'text', 'default' => '98.40%'],
                'results_excellence_title' => ['label' => 'Excellence Banner Title', 'type' => 'text', 'default' => 'Consistent Academic Excellence'],
                'results_excellence_desc' => ['label' => 'Excellence Banner Description', 'type' => 'textarea', 'default' => 'Our results reflect the hard work of our students, the guidance of our teachers and the trust of our parents. Together, we continue to set higher benchmarks.'],

                // Imagery
                'results_hero_image' => ['label' => 'Hero Campus Facade Image', 'type' => 'image', 'default' => 'assets/images/results-hero-campus-right.jpg'],
                'results_poster_toppers' => ['label' => 'District Toppers Poster (Om Dhoot 98.40%)', 'type' => 'image', 'default' => 'assets/images/results-poster-toppers.jpg'],
                'results_poster_achievers' => ['label' => 'Class 10th 90%+ Achievers Poster', 'type' => 'image', 'default' => 'assets/images/results-poster-achievers.jpg'],
                'results_poster_full' => ['label' => 'Full Board Results Preview Poster', 'type' => 'image', 'default' => 'assets/images/results-posters-full.jpg'],
            ],
        ],
        'fee' => [
            'name' => 'Fee Structure & Policy',
            'url' => '/fee-structure',
            'seo_key' => 'fee_structure',
            'icon' => 'fa-solid fa-indian-rupee-sign',
            'category' => 'Admissions & Information',
            'fields' => [
                'fee_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'ADMISSIONS 2026–27'],
                'fee_hero_title' => ['label' => 'Hero Main Heading', 'type' => 'text', 'default' => 'Fees, paid in simple terms.'],
                'fee_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'A clear, transparent fee structure designed to make quality education accessible for every child.'],
                'fee_academic_year' => ['label' => 'Current Academic Year', 'type' => 'text', 'default' => '2026–27'],
                'fee_installments_note' => ['label' => 'Installments Policy Note', 'type' => 'textarea', 'default' => 'Fees can be conveniently paid in three term-wise installments or an annual one-time payment with special benefits.'],
                'fee_transparency_note' => ['label' => 'Transparency Policy Note', 'type' => 'textarea', 'default' => 'No hidden charges or mandatory surprise fees. Detailed receipts are issued for all transactions.'],

                // Imagery
                'fee_hero_image' => ['label' => 'Hero Top Students Image', 'type' => 'image', 'default' => 'assets/images/about-cta-students-clean.png'],
                'fee_cta_image' => ['label' => 'Admissions Questions Student Avatar', 'type' => 'image', 'default' => 'assets/images/about-story-student.jpg'],
            ],
        ],
        'admission_info' => [
            'name' => 'Admission Info Page',
            'url' => '/admission-info',
            'seo_key' => 'admission_info',
            'icon' => 'fa-solid fa-circle-info',
            'category' => 'Admissions & Information',
            'fields' => [
                'admission_academic_year' => ['label' => 'Academic Session', 'type' => 'text', 'default' => '2026–27'],
                'admission_counsellor_name' => ['label' => 'Admission Counsellor Name', 'type' => 'text', 'default' => 'Ms. Vaishnavi'],
                'admission_counsellor_phone' => ['label' => 'Counsellor Contact Phone', 'type' => 'text', 'default' => '9689898973'],

                // Hero
                'admission_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'ADMISSIONS'],
                'admission_hero_title' => ['label' => 'Hero Title Prefix', 'type' => 'text', 'default' => "Begin Your Child's Journey at"],
                'admission_hero_highlight' => ['label' => 'Hero Title Highlight', 'type' => 'text', 'default' => 'Advaita.'],
                'admission_hero_desc' => ['label' => 'Hero Description', 'type' => 'textarea', 'default' => 'A simple, transparent and supportive admission process designed to help your child take the right step towards a brighter future.'],
                'admission_hero_script' => ['label' => 'Hero Script Text', 'type' => 'text', 'default' => 'More Than A School'],
                'admission_hero_image' => ['label' => 'Hero Visual Image (from design)', 'type' => 'image', 'default' => 'assets/images/admission-hero-design.jpg'],
                'admission_hero_building_image' => ['label' => 'Hero Campus Building Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],

                // Process Section
                'admission_process_eyebrow' => ['label' => 'Process Section Eyebrow', 'type' => 'text', 'default' => '— THE ADMISSION PROCESS —'],
                'admission_process_title' => ['label' => 'Process Heading Prefix', 'type' => 'text', 'default' => 'From application to'],
                'admission_process_highlight' => ['label' => 'Process Heading Highlight', 'type' => 'text', 'default' => 'welcome,'],
                'admission_process_suffix' => ['label' => 'Process Heading Suffix', 'type' => 'text', 'default' => 'in five clear steps.'],
                'admission_process_desc' => ['label' => 'Process Section Description', 'type' => 'textarea', 'default' => 'Admission is open to all children, irrespective of caste, creed or community, and decisions are communicated transparently, on merit and fit.'],

                // Guidelines Section
                'admission_guidelines_eyebrow' => ['label' => 'Guidelines Eyebrow', 'type' => 'text', 'default' => '— ADMISSION INFORMATION —'],
                'admission_guidelines_title' => ['label' => 'Guidelines Heading Prefix', 'type' => 'text', 'default' => 'Guidelines for a smooth start at'],
                'admission_guidelines_highlight' => ['label' => 'Guidelines Heading Highlight', 'type' => 'text', 'default' => 'Advaita.'],
                'admission_guidelines_desc' => ['label' => 'Guidelines Description', 'type' => 'textarea', 'default' => 'We welcome applications from aspiring learners who are eager to grow in a nurturing and future-focused environment. Our admission process is fair, transparent and designed to ensure the best fit for every child.'],
                'admission_guidelines_image' => ['label' => 'Guidelines Student Photo (from design)', 'type' => 'image', 'default' => 'assets/images/admission-guidelines-student.jpg'],

                // Feature Cards
                'admission_feature1_title' => ['label' => 'Feature 1 Title', 'type' => 'text', 'default' => 'Classes Offered'],
                'admission_feature1_desc' => ['label' => 'Feature 1 Description', 'type' => 'text', 'default' => 'Nursery to Class X (As per availability)'],
                'admission_feature2_title' => ['label' => 'Feature 2 Title', 'type' => 'text', 'default' => 'Eligibility'],
                'admission_feature2_desc' => ['label' => 'Feature 2 Description', 'type' => 'text', 'default' => 'Age-appropriate as per class guidelines'],
                'admission_feature3_title' => ['label' => 'Feature 3 Title', 'type' => 'text', 'default' => 'Selection Process'],
                'admission_feature3_desc' => ['label' => 'Feature 3 Description', 'type' => 'text', 'default' => 'Based on interaction and assessment (as applicable)'],
                'admission_feature4_title' => ['label' => 'Feature 4 Title', 'type' => 'text', 'default' => 'Important Dates'],
                'admission_feature4_desc' => ['label' => 'Feature 4 Description', 'type' => 'text', 'default' => 'Admissions open for the academic session 2026–27'],

                // Documents Section
                'admission_docs_eyebrow' => ['label' => 'Documents Eyebrow', 'type' => 'text', 'default' => '— DOCUMENTS REQUIRED —'],
                'admission_docs_title' => ['label' => 'Documents Heading Prefix', 'type' => 'text', 'default' => 'Keep these ready for a'],
                'admission_docs_highlight' => ['label' => 'Documents Heading Highlight', 'type' => 'text', 'default' => 'faster process.'],
                'admission_docs_desc' => ['label' => 'Documents Description', 'type' => 'textarea', 'default' => 'Please carry self-attested photocopies of the following documents at the time of admission.'],
                'admission_docs_image' => ['label' => 'Documents Clipboard Image', 'type' => 'image', 'default' => 'assets/images/admission-required-documents.jpg'],

                // Action Cards
                'admission_qe_tag' => ['label' => 'Quick Enquiry Tag', 'type' => 'text', 'default' => 'QUICK ENQUIRY REGISTRATION'],
                'admission_qe_title' => ['label' => 'Quick Enquiry Title', 'type' => 'text', 'default' => "Share a few details and we'll get in touch."],
                'admission_qe_desc' => ['label' => 'Quick Enquiry Description', 'type' => 'textarea', 'default' => 'Fill in your basic details and our admissions team will connect with you shortly.'],
                'admission_qe_btn' => ['label' => 'Quick Enquiry Button Text', 'type' => 'text', 'default' => 'Quick Enquiry Form'],
                'admission_qe_graphic' => ['label' => 'Quick Enquiry Graphic (from design)', 'type' => 'image', 'default' => 'assets/images/admission-qe-graphic.png'],

                'admission_online_tag' => ['label' => 'Online Registration Tag', 'type' => 'text', 'default' => 'ONLINE ADMISSION REGISTRATION'],
                'admission_online_title' => ['label' => 'Online Registration Title', 'type' => 'text', 'default' => 'Ready to apply? Complete the online form.'],
                'admission_online_desc' => ['label' => 'Online Registration Description', 'type' => 'textarea', 'default' => 'Fill in the detailed application form to formally register your ward for admission.'],
                'admission_online_btn' => ['label' => 'Online Registration Button Text', 'type' => 'text', 'default' => 'Apply Online'],
                'admission_online_graphic' => ['label' => 'Online Registration Graphic (from design)', 'type' => 'image', 'default' => 'assets/images/admission-online-graphic.png'],

                // Fee Structure
                'admission_fee_eyebrow' => ['label' => 'Fee Eyebrow', 'type' => 'text', 'default' => '— FEE STRUCTURE —'],
                'admission_fee_title' => ['label' => 'Fee Heading Prefix', 'type' => 'text', 'default' => 'Fees, paid in'],
                'admission_fee_highlight' => ['label' => 'Fee Heading Highlight', 'type' => 'text', 'default' => 'simple terms.'],
                'admission_fee_desc' => ['label' => 'Fee Description', 'type' => 'textarea', 'default' => 'Our fee structure is designed to be fair, transparent and value-driven.'],
                'admission_fee_band1_title' => ['label' => 'Fee Band 1 Title', 'type' => 'text', 'default' => 'Classes I to V'],
                'admission_fee_band1_subtitle' => ['label' => 'Fee Band 1 Subtitle', 'type' => 'text', 'default' => 'Strong foundation for a bright future.'],
                'admission_fee_band2_title' => ['label' => 'Fee Band 2 Title', 'type' => 'text', 'default' => 'Classes VI to X'],
                'admission_fee_band2_subtitle' => ['label' => 'Fee Band 2 Subtitle', 'type' => 'text', 'default' => 'Empowering learners for higher goals.'],

                'admission_fee_info1_title' => ['label' => 'Fee Pill 1 Title', 'type' => 'text', 'default' => 'Annual Fee Details'],
                'admission_fee_info1_desc' => ['label' => 'Fee Pill 1 Description', 'type' => 'text', 'default' => 'Tuition, development and other charges'],
                'admission_fee_info2_title' => ['label' => 'Fee Pill 2 Title', 'type' => 'text', 'default' => 'Transport Charges'],
                'admission_fee_info2_desc' => ['label' => 'Fee Pill 2 Description', 'type' => 'text', 'default' => 'Route-wise transport facility details'],
                'admission_fee_info3_title' => ['label' => 'Fee Pill 3 Title', 'type' => 'text', 'default' => 'Payment Schedule'],
                'admission_fee_info3_desc' => ['label' => 'Fee Pill 3 Description', 'type' => 'text', 'default' => 'Term-wise / annual payment options'],
                'admission_fee_info4_title' => ['label' => 'Fee Pill 4 Title', 'type' => 'text', 'default' => 'Important Notes'],
                'admission_fee_info4_desc' => ['label' => 'Fee Pill 4 Description', 'type' => 'text', 'default' => 'Fees are subject to the school policy for the academic session.'],

                // Pre-Footer CTA
                'admission_cta_pill' => ['label' => 'Bottom CTA Tag', 'type' => 'text', 'default' => "LET'S BEGIN TOGETHER"],
                'admission_cta_title' => ['label' => 'Bottom CTA Heading', 'type' => 'text', 'default' => 'Ready to take the first step?'],
                'admission_cta_desc' => ['label' => 'Bottom CTA Description', 'type' => 'textarea', 'default' => 'Apply now and give your child the opportunity to grow, learn and excel at Advaita.'],
                'admission_cta_primary_btn' => ['label' => 'Primary Button Text', 'type' => 'text', 'default' => 'Apply for Admission'],
                'admission_cta_secondary_btn' => ['label' => 'Secondary Button Text', 'type' => 'text', 'default' => 'Schedule a Campus Visit'],
            ],
        ],
        'admission_guidelines' => [
            'name' => 'Admission Guidelines & Rules',
            'url' => '/admission-guidelines',
            'seo_key' => 'admission_guidelines',
            'icon' => 'fa-solid fa-book-bookmark',
            'category' => 'Admissions & Information',
            'fields' => [
                'admission_academic_year' => ['label' => 'Academic Session', 'type' => 'text', 'default' => '2026–27'],
                'admission_age_cutoff' => ['label' => 'Prescribed Age Cut-off Date', 'type' => 'text', 'default' => '30 June'],
                'admission_counsellor_name' => ['label' => 'Admission Counsellor Name', 'type' => 'text', 'default' => 'Ms. Vaishnavi'],
                'admission_counsellor_phone' => ['label' => 'Counsellor Contact Phone', 'type' => 'text', 'default' => '9689898973'],
                'admission_school_phone1' => ['label' => 'Official School Line 1', 'type' => 'text', 'default' => '9689898973'],
                'admission_school_phone2' => ['label' => 'Official School Line 2', 'type' => 'text', 'default' => '9146066216'],
                'guidelines_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'OFFICIAL ADMISSIONS PROTOCOL'],
                'guidelines_hero_title' => ['label' => 'Hero Main Title', 'type' => 'text', 'default' => 'Admission Guidelines &'],
                'guidelines_hero_highlight' => ['label' => 'Hero Highlight Title', 'type' => 'text', 'default' => 'Eligibility Criteria.'],
                'guidelines_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'Comprehensive guidelines, age criteria, document checklists, and CBSE/Maharashtra government compliance for admissions into Pre-Primary through Grade X.'],
                'guidelines_policy_notice' => ['label' => 'Government Policy & Phased Disclaimer', 'type' => 'textarea', 'default' => 'The age criteria and phased implementation schedule are subject to applicable government notifications (Government of Maharashtra School Education Department) and school policy.'],
                'guidelines_cbse_note' => ['label' => 'Grade X CBSE Transfer Note', 'type' => 'textarea', 'default' => 'Direct admission to Grade X is strictly NOT permitted except under specific exemptions prescribed by CBSE (e.g., interstate transfer of parent in government/defence service or certified relocation).'],
            ],
        ],
        'facilities' => [
            'name' => 'Campus Facilities',
            'url' => '/facilities',
            'seo_key' => 'facilities',
            'icon' => 'fa-solid fa-building-columns',
            'category' => 'Admissions & Information',
            'fields' => [
                'facilities_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'OUR CAMPUS'],
                'facilities_hero_title' => ['label' => 'Hero Heading', 'type' => 'text', 'default' => 'More than Classrooms, A Place to Grow.'],
                'facilities_hero_desc' => ['label' => 'Hero Description', 'type' => 'textarea', 'default' => 'Our campus is thoughtfully designed to provide a safe, modern and inspiring environment where every child can learn, explore and excel across 10,000 sq. mtrs. of dedicated infrastructure.'],
                'facilities_campus_area' => ['label' => 'Verified Campus Area', 'type' => 'text', 'default' => '10,000 Sq. Mtrs. (~2.47 Acres)'],
                'facilities_classrooms_count' => ['label' => 'Verified Classrooms Count', 'type' => 'text', 'default' => '25 Smart Classrooms'],
                'facilities_cta_headline' => ['label' => 'Campus Tour CTA Headline', 'type' => 'text', 'default' => 'Take a Campus Tour.'],
                'facilities_cta_desc' => ['label' => 'Campus Tour CTA Description', 'type' => 'textarea', 'default' => 'Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience.'],

                // Imagery for all verified facilities
                'facilities_hero_image' => ['label' => 'Campus Showcase Feature Photo', 'type' => 'image', 'default' => 'assets/images/about-campus-courtyard.jpg'],
                'facilities_card1_image' => ['label' => 'Smart Classrooms Photo', 'type' => 'image', 'default' => 'assets/images/fac-smart-class.jpg'],
                'facilities_card2_image' => ['label' => 'Science & Math Laboratories Photo', 'type' => 'image', 'default' => 'assets/images/gallery/science-lab.png'],
                'facilities_card3_image' => ['label' => 'Robotics & Technology Lab Photo', 'type' => 'image', 'default' => 'assets/images/gallery/robotics-lab.png'],
                'facilities_card4_image' => ['label' => 'Library & Resource Center Photo', 'type' => 'image', 'default' => 'assets/images/fac-library.jpg'],
                'facilities_card5_image' => ['label' => 'Green Sports Lawns & Playgrounds Photo', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-parachute-lawn-building.jpg'],
                'facilities_card6_image' => ['label' => 'Multi-Purpose Assembly Hall Photo', 'type' => 'image', 'default' => 'assets/images/gallery-assembly.jpg'],
                'facilities_card7_image' => ['label' => 'Safe Transport Fleet Photo', 'type' => 'image', 'default' => 'assets/images/fac-transport.jpg'],
                'facilities_card8_image' => ['label' => 'Safety & 24/7 CCTV Security Photo', 'type' => 'image', 'default' => 'assets/images/fac-security.jpg'],
                'facilities_card9_image' => ['label' => 'Hygienic Dining Space Photo', 'type' => 'image', 'default' => 'assets/images/gallery-day-1.jpg'],
                'facilities_card10_image' => ['label' => 'Medical Infirmary Photo', 'type' => 'image', 'default' => 'assets/images/prog-early-years.jpg'],
                'facilities_card11_image' => ['label' => 'Lush Green Campus Photo', 'type' => 'image', 'default' => 'assets/images/gallery/campus-building.png'],
                'facilities_card12_image' => ['label' => 'Arts & Creative Activity Studios Photo', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-art-circle-kids.jpg'],
            ],
        ],
        'disclosure' => [
            'name' => 'Mandatory Disclosure',
            'url' => '/mandatory-disclosure',
            'seo_key' => 'mandatory_disclosure',
            'icon' => 'fa-solid fa-file-shield',
            'category' => 'Compliance & Info',
            'fields' => [
                'disclosure_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'OUR COMMITMENT'],
                'disclosure_hero_title' => ['label' => 'Hero Main Heading', 'type' => 'text', 'default' => 'Mandatory Public Disclosure'],
                'disclosure_hero_desc' => ['label' => 'Hero Description', 'type' => 'textarea', 'default' => 'In compliance with CBSE guidelines, we provide the following mandatory information to ensure transparency and accuracy.'],
                'disclosure_affiliation_period' => ['label' => 'CBSE Affiliation Period', 'type' => 'text', 'default' => '2023 to 2028'],
                'disclosure_society_name' => ['label' => 'Registered Society Name', 'type' => 'text', 'default' => 'Sanmati Sevabhavi Sanstha, Parbhani'],
                'disclosure_trust_reg_no' => ['label' => 'Trust Registration No.', 'type' => 'text', 'default' => 'F-3420 (Parbhani)'],
                'disclosure_principal_qualification' => ['label' => 'Principal Qualification', 'type' => 'text', 'default' => 'M.Sc., M.Ed., Ph.D.'],

                // Imagery
                'disclosure_hero_image' => ['label' => 'Hero Campus Building Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
            ],
        ],
    ];

    /**
     * Display a listing of all school pages managed by the content system.
     */
    public function index(Request $request): View
    {
        // If a specific section is requested via query param, serve the dedicated edit page
        if ($request->has('section')) {
            return $this->edit((string) $request->query('section'));
        }

        $sections = [];
        $totalFields = 0;
        $totalImages = 0;

        foreach ($this->sectionsMap as $key => $sec) {
            $fieldCount = count($sec['fields']);
            $imageCount = 0;
            $fieldsWithValues = [];

            foreach ($sec['fields'] as $fKey => $fData) {
                if (($fData['type'] ?? '') === 'image') {
                    $imageCount++;
                }
                $fieldsWithValues[$fKey] = array_merge($fData, [
                    'value' => Setting::get($fKey, $fData['default']),
                ]);
            }

            $totalFields += $fieldCount;
            $totalImages += $imageCount;

            $sections[$key] = array_merge($sec, [
                'key' => $key,
                'fields' => $fieldsWithValues,
                'field_count' => $fieldCount,
                'image_count' => $imageCount,
            ]);
        }

        $totalPages = count($sections);

        return view('admin.pages.index', compact('sections', 'totalPages', 'totalFields', 'totalImages'));
    }

    /**
     * Display the dedicated content editor for a specific school page.
     */
    public function edit(string $section): View
    {
        $selectedKey = $section;
        if (! array_key_exists($selectedKey, $this->sectionsMap)) {
            $selectedKey = 'about';
        }

        $sections = [];
        foreach ($this->sectionsMap as $key => $sec) {
            $fieldsWithValues = [];
            foreach ($sec['fields'] as $fKey => $fData) {
                $fieldsWithValues[$fKey] = array_merge($fData, [
                    'value' => Setting::get($fKey, $fData['default']),
                ]);
            }
            $sections[$key] = array_merge($sec, [
                'key' => $key,
                'fields' => $fieldsWithValues,
            ]);
        }

        $currentSection = $sections[$selectedKey];

        return view('admin.pages.edit', compact('sections', 'selectedKey', 'currentSection'));
    }

    /**
     * Update page content settings.
     */
    public function update(Request $request, ?string $section = null): RedirectResponse
    {
        $sectionKey = $section ?: $request->input('section_key');
        if (! array_key_exists($sectionKey, $this->sectionsMap)) {
            return redirect()->route('admin.pages.index')->with('error', 'Invalid section specified.');
        }

        $fields = $this->sectionsMap[$sectionKey]['fields'];
        $uploadDir = public_path('assets/images/uploads');
        if (! file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        foreach ($fields as $fieldKey => $fConfig) {
            $fileInputKey = $fieldKey.'_file';
            if ($request->hasFile($fileInputKey)) {
                $file = $request->file($fileInputKey);
                $ext = $file->getClientOriginalExtension() ?: 'jpg';
                $cleanName = 'page_'.$sectionKey.'_'.str_replace($sectionKey.'_', '', $fieldKey).'_'.time().'_'.uniqid().'.'.$ext;
                $file->move($uploadDir, $cleanName);
                Setting::set($fieldKey, 'assets/images/uploads/'.$cleanName);
            } elseif ($request->hasFile($fieldKey)) {
                $file = $request->file($fieldKey);
                $ext = $file->getClientOriginalExtension() ?: 'jpg';
                $cleanName = 'page_'.$sectionKey.'_'.str_replace($sectionKey.'_', '', $fieldKey).'_'.time().'_'.uniqid().'.'.$ext;
                $file->move($uploadDir, $cleanName);
                Setting::set($fieldKey, 'assets/images/uploads/'.$cleanName);
            } elseif ($request->filled($fieldKey)) {
                Setting::set($fieldKey, trim((string) $request->input($fieldKey)));
            }
        }

        return redirect('/admin/pages-content?section='.$sectionKey)
            ->with('success', "Content for '{$this->sectionsMap[$sectionKey]['name']}' updated successfully!");
    }
}
