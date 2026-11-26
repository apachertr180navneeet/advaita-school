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
                // 1. Hero Section
                'about_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'ABOUT OUR SCHOOL'],
                'about_hero_title' => ['label' => 'Hero Main Title Prefix', 'type' => 'text', 'default' => 'Nurturing Potential.'],
                'about_hero_highlight' => ['label' => 'Hero Title Highlight', 'type' => 'text', 'default' => 'Building Character.'],
                'about_hero_subtitle' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, Parbhani, we believe education extends far beyond classrooms. We build individuals of curiosity, empathy, and resilience.'],
                'about_hero_image' => ['label' => 'Hero Campus Building Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],

                // 2. Built on Values (Story) Section
                'about_story_image' => ['label' => 'Built on Values Student Image', 'type' => 'image', 'default' => 'assets/images/student-girl-thumbsup.jpg'],
                'about_story_eyebrow' => ['label' => 'Story Eyebrow', 'type' => 'text', 'default' => 'BUILT ON A STRONG FOUNDATION'],
                'about_story_title' => ['label' => 'Story Heading Prefix', 'type' => 'text', 'default' => 'Built on Values.'],
                'about_story_highlight' => ['label' => 'Story Heading Highlight', 'type' => 'text', 'default' => 'Academic Excellence.'],
                'about_story_p1' => ['label' => 'Story Description Paragraph 1', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, we blend academic rigor, character development, and future-focused learning to help every child grow into a confident, compassionate, and capable individual.'],
                'about_story_p2' => ['label' => 'Story Description Paragraph 2', 'type' => 'textarea', 'default' => "Our focus on NEET/IIT foundation and various competitive exams, along with a strong CBSE curriculum, ensures that students are well-prepared for higher education and life's opportunities."],
                'about_story_badge_title' => ['label' => 'Story Badge Line 1', 'type' => 'text', 'default' => 'Best CBSE'],
                'about_story_badge_sub' => ['label' => 'Story Badge Line 2', 'type' => 'text', 'default' => 'Result Producer'],
                'about_story_badge_tag' => ['label' => 'Story Badge Tagline', 'type' => 'text', 'default' => 'Year after Year'],
                'about_stat_students' => ['label' => 'Stat: Happy Students', 'type' => 'text', 'default' => '5000+'],
                'about_stat_years' => ['label' => 'Stat: Years of Legacy', 'type' => 'text', 'default' => '25+'],
                'about_stat_satisfaction' => ['label' => 'Stat: Parent Satisfaction', 'type' => 'text', 'default' => '95%'],

                // 3. Vision & Mission Cards
                'about_vmv_vision' => ['label' => 'Our Vision Statement', 'type' => 'textarea', 'default' => 'To nurture confident, curious and responsible global citizens equipped to excel in academics and life.'],
                'about_vmv_mission' => ['label' => 'Our Mission Statement', 'type' => 'textarea', 'default' => 'To provide a safe, value-based learning environment with academic excellence, modern facilities and holistic growth opportunities.'],

                // 4. Education for Life (Philosophy) Section
                'about_philosophy_image' => ['label' => 'Education for Life Classroom Image', 'type' => 'image', 'default' => 'assets/images/student-science-lab.jpg'],
                'about_philosophy_eyebrow' => ['label' => 'Philosophy Eyebrow', 'type' => 'text', 'default' => 'PREPARING FOR A BRIGHTER TOMORROW'],
                'about_philosophy_title' => ['label' => 'Philosophy Heading Prefix', 'type' => 'text', 'default' => 'Education for'],
                'about_philosophy_highlight' => ['label' => 'Philosophy Heading Highlight', 'type' => 'text', 'default' => 'Not Just Exams.'],
                'about_philosophy_desc' => ['label' => 'Philosophy Description', 'type' => 'textarea', 'default' => 'We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.'],
                'about_philosophy_badge_title' => ['label' => 'Classroom Badge Title', 'type' => 'text', 'default' => 'Interactive Learning'],
                'about_philosophy_badge_sub' => ['label' => 'Classroom Badge Subtitle', 'type' => 'text', 'default' => 'Conceptual Clarity & Beyond Textbooks'],

                // 5. Campus Showcase Section
                'about_campus_image' => ['label' => 'Campus Showcase Image', 'type' => 'image', 'default' => 'assets/images/about-campus-courtyard.jpg'],
                'about_campus_eyebrow' => ['label' => 'Campus Eyebrow', 'type' => 'text', 'default' => 'A SPACE TO GROW'],
                'about_campus_title' => ['label' => 'Campus Heading Prefix', 'type' => 'text', 'default' => 'A Space to Learn,'],
                'about_campus_highlight' => ['label' => 'Campus Heading Highlight', 'type' => 'text', 'default' => 'Explore and Excel.'],
                'about_campus_desc' => ['label' => 'Campus Description', 'type' => 'textarea', 'default' => 'Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.'],

                // 6. Admission Banner Section
                'about_cta_image' => ['label' => 'Bottom CTA Students Trio Image', 'type' => 'image', 'default' => 'assets/images/about-cta-students-trio.png'],
                'about_cta_eyebrow' => ['label' => 'Bottom CTA Eyebrow', 'type' => 'text', 'default' => 'BE A PART OF ADVAITA'],
                'about_cta_headline' => ['label' => 'Bottom CTA Headline', 'type' => 'text', 'default' => "Together, let's build brighter tomorrows."],
                'about_cta_subtext' => ['label' => 'Bottom CTA Subtext', 'type' => 'textarea', 'default' => 'Admissions are open for CBSE, NEET/IIT Foundation & Competitive Exam Programmes.'],
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

                // Bottom CTA Banner
                'chairman_cta_eyebrow' => ['label' => 'CTA Banner Eyebrow', 'type' => 'text', 'default' => 'BE A PART OF ADVAITA'],
                'chairman_cta_headline' => ['label' => 'CTA Banner Heading Prefix', 'type' => 'text', 'default' => 'Together, let’s build'],
                'chairman_cta_highlight' => ['label' => 'CTA Banner Heading Highlight (Orange)', 'type' => 'text', 'default' => 'brighter tomorrows.'],
                'chairman_cta_subtext' => ['label' => 'CTA Banner Description', 'type' => 'textarea', 'default' => 'Give your child the right start with strong academics, values and endless opportunities.'],
                'chairman_cta_btn1_text' => ['label' => 'CTA Button 1 Text', 'type' => 'text', 'default' => 'Book a Campus Visit'],
                'chairman_cta_btn1_url' => ['label' => 'CTA Button 1 URL (Optional)', 'type' => 'text', 'default' => ''],
                'chairman_cta_btn2_text' => ['label' => 'CTA Button 2 Text', 'type' => 'text', 'default' => 'Enquire Now'],
                'chairman_cta_btn2_url' => ['label' => 'CTA Button 2 URL (Optional)', 'type' => 'text', 'default' => ''],
                'chairman_cta_image' => ['label' => 'CTA Banner Students Image', 'type' => 'image', 'default' => 'assets/images/about-cta-students-trio.png'],
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
                'principal_hero_desc' => ['label' => 'Hero Description', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, we are committed to providing a nurturing and inspiring environment where every child is encouraged to learn, grow, and succeed.'],
                'principal_name' => ['label' => 'Principal Full Name', 'type' => 'text', 'default' => 'Mrs. Sunita S. Deshmukh'],
                'principal_designation' => ['label' => 'Official Designation', 'type' => 'text', 'default' => 'Principal, Advaita School of Excellence, Parbhani'],
                'principal_message_eyebrow' => ['label' => 'Message Section Eyebrow', 'type' => 'text', 'default' => "PRINCIPAL'S MESSAGE"],
                'principal_message_title_prefix' => ['label' => 'Message Heading Prefix', 'type' => 'text', 'default' => 'A Few Words from'],
                'principal_message_title_highlight' => ['label' => 'Message Heading Highlight', 'type' => 'text', 'default' => 'Our Principal'],
                'principal_salutation' => ['label' => 'Message Salutation', 'type' => 'text', 'default' => 'Dear Students, Parents and Well-wishers,'],
                'principal_quote' => ['label' => 'Featured Quote Box', 'type' => 'textarea', 'default' => 'Every child enters our gates with unique curiosity. Our privilege and sacred duty is to nurture that spark into an unshakeable flame of confidence.'],
                'principal_welcome' => ['label' => 'Welcome Heading', 'type' => 'text', 'default' => 'Welcoming You to Our Family'],
                'principal_message_p1' => ['label' => 'Message Paragraph 1', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, we are committed to providing a nurturing and inspiring environment where every child is encouraged to learn, grow, and succeed. Our aim is to create a strong academic foundation with a focus on overall personality development.'],
                'principal_message_p2' => ['label' => 'Message Paragraph 2', 'type' => 'textarea', 'default' => "Education, in today's world, is not limited to textbooks. It is about building character, developing critical thinking, and preparing students to face real-life challenges with confidence. Along with CBSE academics, we provide integrated NEET/IIT foundation and preparation for various competitive exams, ensuring that students are well-prepared for the future."],
                'principal_message_p3' => ['label' => 'Message Paragraph 3', 'type' => 'textarea', 'default' => 'We believe in encouraging curiosity, creativity, and participation in academics, sports, arts and co-curricular activities. Our goal is to guide every student towards excellence and help them realize their true potential.'],
                'principal_message_p4' => ['label' => 'Message Paragraph 4', 'type' => 'textarea', 'default' => 'I extend my best wishes to all our students and parents for a successful and enriching journey with us.'],

                // Imagery
                'principal_image' => ['label' => 'Principal Portrait Photo', 'type' => 'image', 'default' => 'assets/images/principal-desk.jpg'],
                'principal_hero_image' => ['label' => 'Hero Campus Background Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
            ],
        ],
        'our_staff' => [
            'name' => 'Our Faculty & Staff',
            'url' => '/our-staff',
            'seo_key' => 'our_staff',
            'icon' => 'fa-solid fa-chalkboard-user',
            'category' => 'Leadership & Story',
            'fields' => [
                'staff_hero_eyebrow' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'OUR FACULTY'],
                'staff_hero_title_line1' => ['label' => 'Hero Heading Line 1', 'type' => 'text', 'default' => 'Meet the Educators'],
                'staff_hero_title_line2' => ['label' => 'Hero Heading Line 2', 'type' => 'text', 'default' => 'Who Inspire Every'],
                'staff_hero_title_highlight' => ['label' => 'Hero Highlight Word', 'type' => 'text', 'default' => 'Advaita'],
                'staff_hero_title_suffix' => ['label' => 'Hero Heading Suffix', 'type' => 'text', 'default' => 'Learner.'],
                'staff_hero_desc' => ['label' => 'Hero Description', 'type' => 'textarea', 'default' => 'Our teachers are more than subject experts — they are mentors, role models and lifelong guides who nurture curiosity, build confidence and inspire every child to excel in academics and in life.'],
                'staff_hero_image' => ['label' => 'Hero Campus Background Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],

                // Stats Strip
                'staff_stat1_num' => ['label' => 'Stat 1 Number', 'type' => 'text', 'default' => '80+'],
                'staff_stat1_label' => ['label' => 'Stat 1 Label', 'type' => 'text', 'default' => 'Total Faculty'],
                'staff_stat2_num' => ['label' => 'Stat 2 Number', 'type' => 'text', 'default' => '12+'],
                'staff_stat2_label' => ['label' => 'Stat 2 Label', 'type' => 'text', 'default' => 'Departments'],
                'staff_stat3_num' => ['label' => 'Stat 3 Number', 'type' => 'text', 'default' => '10+'],
                'staff_stat3_label' => ['label' => 'Stat 3 Label', 'type' => 'text', 'default' => 'Avg. Years Experience'],
                'staff_stat4_num' => ['label' => 'Stat 4 Number', 'type' => 'text', 'default' => '100%'],
                'staff_stat4_label' => ['label' => 'Stat 4 Label', 'type' => 'text', 'default' => 'Postgraduate Trained'],

                // Educators Section Header
                'staff_section_eyebrow' => ['label' => 'Educators Section Eyebrow', 'type' => 'text', 'default' => 'OUR EDUCATORS'],
                'staff_section_title_prefix' => ['label' => 'Educators Heading Prefix', 'type' => 'text', 'default' => 'The Teachers Behind Every'],
                'staff_section_title_highlight' => ['label' => 'Educators Heading Highlight', 'type' => 'text', 'default' => 'Advaita Learner.'],
                'staff_section_description' => ['label' => 'Educators Section Description', 'type' => 'textarea', 'default' => 'Each one is here because they love what they teach — and because they care deeply about how every child grows. Our faculty bring expertise, experience and a genuine passion for guiding students towards academic and personal excellence.'],

                // Join Our Team CTA Banner
                'staff_cta_eyebrow' => ['label' => 'CTA Eyebrow', 'type' => 'text', 'default' => 'JOIN OUR TEAM'],
                'staff_cta_title_prefix' => ['label' => 'CTA Heading Prefix', 'type' => 'text', 'default' => 'Want to Teach with'],
                'staff_cta_title_highlight' => ['label' => 'CTA Heading Highlight', 'type' => 'text', 'default' => 'Us?'],
                'staff_cta_desc' => ['label' => 'CTA Description', 'type' => 'textarea', 'default' => 'We are always looking for passionate educators who believe in creating brighter futures. Explore open roles or share your CV with us.'],
                'staff_cta_btn1_text' => ['label' => 'CTA Primary Button Text', 'type' => 'text', 'default' => 'See Open Roles'],
                'staff_cta_btn1_url' => ['label' => 'CTA Primary Button URL (Optional)', 'type' => 'text', 'default' => ''],
                'staff_cta_btn2_text' => ['label' => 'CTA Secondary Button Text', 'type' => 'text', 'default' => 'Send Your CV'],
                'staff_cta_btn2_email' => ['label' => 'CTA Secondary Button Email / URL', 'type' => 'text', 'default' => 'admissions.advaita@gmail.com'],
                'staff_cta_image' => ['label' => 'CTA Students Image', 'type' => 'image', 'default' => 'assets/images/about-cta-students-trio.png'],

                // Campus Showcase Strip
                'staff_showcase_title_line1' => ['label' => 'Showcase Heading Line 1', 'type' => 'text', 'default' => 'Take a closer look'],
                'staff_showcase_title_prefix' => ['label' => 'Showcase Heading Line 2 Prefix', 'type' => 'text', 'default' => 'at life at'],
                'staff_showcase_title_highlight' => ['label' => 'Showcase Heading Highlight', 'type' => 'text', 'default' => 'Advaita.'],
                'staff_showcase_desc' => ['label' => 'Showcase Description', 'type' => 'textarea', 'default' => 'Visit our campus to meet our faculty, experience our learning environment and see how we shape brighter futures.'],
                'staff_showcase_img1' => ['label' => 'Showcase Thumbnail 1', 'type' => 'image', 'default' => 'assets/images/staff-thumb-1.jpg'],
                'staff_showcase_img2' => ['label' => 'Showcase Thumbnail 2', 'type' => 'image', 'default' => 'assets/images/staff-thumb-2.jpg'],
                'staff_showcase_img3' => ['label' => 'Showcase Thumbnail 3', 'type' => 'image', 'default' => 'assets/images/staff-thumb-3.jpg'],
                'staff_showcase_btn1_text' => ['label' => 'Showcase Button 1 Text', 'type' => 'text', 'default' => 'Book a Campus Visit'],
                'staff_showcase_btn1_url' => ['label' => 'Showcase Button 1 URL (Optional)', 'type' => 'text', 'default' => ''],
                'staff_showcase_btn2_text' => ['label' => 'Showcase Button 2 Text', 'type' => 'text', 'default' => 'Watch Campus Video'],
                'staff_showcase_btn2_url' => ['label' => 'Showcase Button 2 URL (Optional)', 'type' => 'text', 'default' => ''],
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
                'fee_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'ADMISSIONS 2027–28'],
                'fee_hero_title' => ['label' => 'Hero Main Heading', 'type' => 'text', 'default' => 'Fees, paid in simple terms.'],
                'fee_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'A clear, transparent fee structure designed to make quality education accessible for every child.'],
                'fee_academic_year' => ['label' => 'Current Academic Year', 'type' => 'text', 'default' => '2027–28'],
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
                'admission_academic_year' => ['label' => 'Academic Session', 'type' => 'text', 'default' => '2027–28'],
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
                'admission_feature4_desc' => ['label' => 'Feature 4 Description', 'type' => 'text', 'default' => 'Admissions open for the academic session 2027–28'],

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
                // Hero Section
                'guidelines_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'PRE-PRIMARY TO GRADE X · SESSION 2027–28'],
                'guidelines_hero_title' => ['label' => 'Hero Main Title Prefix', 'type' => 'text', 'default' => 'Admission Guidelines &'],
                'guidelines_hero_highlight' => ['label' => 'Hero Title Highlight', 'type' => 'text', 'default' => 'Eligibility Protocol.'],
                'guidelines_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'Official, transparent guidelines covering minimum age criteria, phased implementation schedules, required documents, 5-step admission procedure, and CBSE regulatory compliance for Advaita School of Excellence, Parbhani.'],
                'guidelines_hero_script_tag' => ['label' => 'Floating Script Badge Text', 'type' => 'text', 'default' => "Official\nGuidelines"],
                'guidelines_hero_image' => ['label' => 'Hero Students Cutout Image', 'type' => 'image', 'default' => 'assets/images/student-group-reading.jpg'],
                'guidelines_hero_btn1_text' => ['label' => 'Hero Button 1 Label', 'type' => 'text', 'default' => 'Download Guidelines PDF'],
                'guidelines_hero_btn1_url' => ['label' => 'Hero Button 1 URL (empty = default PDF route)', 'type' => 'text', 'default' => ''],
                'guidelines_hero_btn2_text' => ['label' => 'Hero Button 2 Label', 'type' => 'text', 'default' => 'Online Registration'],
                'guidelines_hero_btn2_url' => ['label' => 'Hero Button 2 URL (empty = default registration route)', 'type' => 'text', 'default' => ''],
                'guidelines_hero_btn3_text' => ['label' => 'Hero Button 3 Label', 'type' => 'text', 'default' => 'Check Required Documents'],
                'guidelines_hero_btn3_url' => ['label' => 'Hero Button 3 URL', 'type' => 'text', 'default' => '#documents-required'],

                // General Admissions Settings
                'admission_academic_year' => ['label' => 'Academic Session', 'type' => 'text', 'default' => '2027–28'],
                'admission_age_cutoff' => ['label' => 'Prescribed Age Cut-off Date', 'type' => 'text', 'default' => '30 June'],
                'admission_counsellor_name' => ['label' => 'Admission Counsellor Name', 'type' => 'text', 'default' => 'Ms. Vaishnavi'],
                'admission_counsellor_phone' => ['label' => 'Counsellor Contact Phone', 'type' => 'text', 'default' => '9689898973'],
                'admission_school_phone1' => ['label' => 'Official School Line 1', 'type' => 'text', 'default' => '9689898973'],
                'admission_school_phone2' => ['label' => 'Official School Line 2', 'type' => 'text', 'default' => '9146066216'],

                // Policy Notices
                'guidelines_policy_notice' => ['label' => 'Government Policy & Phased Disclaimer', 'type' => 'textarea', 'default' => 'The age criteria and phased implementation schedule are subject to applicable government notifications (Government of Maharashtra School Education Department) and school policy.'],
                'guidelines_cbse_note' => ['label' => 'Grade X CBSE Transfer Note', 'type' => 'textarea', 'default' => 'Direct admission to Grade X is strictly NOT permitted except under specific exemptions prescribed by CBSE (e.g., interstate transfer of parent in government/defence service or certified relocation).'],
            ],
        ],
        'online_registration' => [
            'name' => 'Online Registration Form',
            'url' => '/online-registration',
            'seo_key' => 'online_registration',
            'icon' => 'fa-solid fa-file-signature',
            'category' => 'Admissions & Information',
            'fields' => [
                // Hero Section
                'reg_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'ADMISSIONS 2027–28'],
                'reg_hero_title' => ['label' => 'Hero Main Title Prefix', 'type' => 'text', 'default' => 'Online'],
                'reg_hero_highlight' => ['label' => 'Hero Title Highlight (Serif/Orange)', 'type' => 'text', 'default' => 'Registration'],
                'reg_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'Complete the form in a few simple steps — our admissions counselor will reach out to you within a working day.'],
                'reg_hero_script_tag' => ['label' => 'Floating Script Badge Text', 'type' => 'text', 'default' => "More\nThan A School"],
                'reg_hero_image' => ['label' => 'Hero Students Visual Photo', 'type' => 'image', 'default' => 'assets/images/about-cta-students-clean.png'],
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
                'facilities_dance_image' => ['label' => 'Dance Studio Photo', 'type' => 'image', 'default' => 'assets/images/gallery/dance.jpg'],
                'facilities_computer_image' => ['label' => 'Computer Lab Photo', 'type' => 'image', 'default' => 'assets/images/gallery/computer-lab.png'],
                'facilities_music_image' => ['label' => 'Music Room & Band Studio Photo', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-school-band.jpg'],
                'facilities_cricket_image' => ['label' => 'Cricket Field & Nets Photo', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-sports-field-agility.jpg'],
                'facilities_courts_image' => ['label' => 'Basketball & Volleyball Courts Photo', 'type' => 'image', 'default' => 'assets/images/fac-sports.jpg'],
                'facilities_football_image' => ['label' => 'Football Ground Photo', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-football-match-sprint.jpg'],
                'facilities_math_image' => ['label' => 'Mathematics & Abacus Lab Photo', 'type' => 'image', 'default' => 'assets/images/gallery/academic-learning.png'],
                'facilities_card9_image' => ['label' => 'Hygienic Dining Space Photo', 'type' => 'image', 'default' => 'assets/images/gallery-day-1.jpg'],
                'facilities_card10_image' => ['label' => 'Medical Infirmary Photo', 'type' => 'image', 'default' => 'assets/images/prog-early-years.jpg'],
                'facilities_card11_image' => ['label' => 'Lush Green Campus Photo', 'type' => 'image', 'default' => 'assets/images/gallery/campus-building.png'],
                'facilities_card12_image' => ['label' => 'Arts & Creative Activity Studios Photo', 'type' => 'image', 'default' => 'assets/images/gallery/gallery-art-circle-kids.jpg'],

                // 15 Facility Cards Text Content
                'facilities_f1_title' => ['label' => 'Card 1 (Library) Title', 'type' => 'text', 'default' => 'Well-Equipped Futuristic Library'],
                'facilities_f1_badge' => ['label' => 'Card 1 Badge', 'type' => 'text', 'default' => 'Futuristic Library'],
                'facilities_f1_tag' => ['label' => 'Card 1 Tag', 'type' => 'text', 'default' => 'CBSE Curriculum'],
                'facilities_f1_spec' => ['label' => 'Card 1 Spec', 'type' => 'text', 'default' => '10,000+ Volumes'],
                'facilities_f1_desc' => ['label' => 'Card 1 Description', 'type' => 'textarea', 'default' => "A peaceful, high-tech reading sanctuary housing 10,000+ curated volumes, children's literature, encyclopedias, journals, and digital research bays that nurture lifelong inquisitive minds."],
                'facilities_f1_btn' => ['label' => 'Card 1 Button Text', 'type' => 'text', 'default' => 'Explore Library'],

                'facilities_f2_title' => ['label' => 'Card 2 (Dance) Title', 'type' => 'text', 'default' => 'Dedicated Dance Room'],
                'facilities_f2_badge' => ['label' => 'Card 2 Badge', 'type' => 'text', 'default' => 'Dance Studio'],
                'facilities_f2_tag' => ['label' => 'Card 2 Tag', 'type' => 'text', 'default' => 'Performing Arts'],
                'facilities_f2_spec' => ['label' => 'Card 2 Spec', 'type' => 'text', 'default' => 'Mirrored Floor'],
                'facilities_f2_desc' => ['label' => 'Card 2 Description', 'type' => 'textarea', 'default' => 'Spacious performing arts studio designed for Indian classical dance, Bharatnatyam, folk choreography, and rhythm movement under specialized instructors to develop poise and grace.'],
                'facilities_f2_btn' => ['label' => 'Card 2 Button Text', 'type' => 'text', 'default' => 'View Dance Performances'],

                'facilities_f3_title' => ['label' => 'Card 3 (Computer Lab) Title', 'type' => 'text', 'default' => 'High-Tech Computer Lab'],
                'facilities_f3_badge' => ['label' => 'Card 3 Badge', 'type' => 'text', 'default' => 'Computer Lab'],
                'facilities_f3_tag' => ['label' => 'Card 3 Tag', 'type' => 'text', 'default' => '56 m² IT Arena'],
                'facilities_f3_spec' => ['label' => 'Card 3 Spec', 'type' => 'text', 'default' => '1:1 Student Ratio'],
                'facilities_f3_desc' => ['label' => 'Card 3 Description', 'type' => 'textarea', 'default' => 'State-of-the-art computer workstations connected to high-speed fiber internet for AI coding, Python programming, Typing Master, and foundational digital literacy in a secure environment.'],
                'facilities_f3_btn' => ['label' => 'Card 3 Button Text', 'type' => 'text', 'default' => 'Explore Digital Skills'],

                'facilities_f4_title' => ['label' => 'Card 4 (Music) Title', 'type' => 'text', 'default' => 'Music Room & Band Studio'],
                'facilities_f4_badge' => ['label' => 'Card 4 Badge', 'type' => 'text', 'default' => 'Music Studio'],
                'facilities_f4_tag' => ['label' => 'Card 4 Tag', 'type' => 'text', 'default' => 'Vocal & Band'],
                'facilities_f4_spec' => ['label' => 'Card 4 Spec', 'type' => 'text', 'default' => 'Marching Troupe'],
                'facilities_f4_desc' => ['label' => 'Card 4 Description', 'type' => 'textarea', 'default' => 'Acoustically optimized practice studio for classical vocal training, harmonium, keyboards, tabla, and ceremonial school marching band brass and percussion troupes.'],
                'facilities_f4_btn' => ['label' => 'Card 4 Button Text', 'type' => 'text', 'default' => 'View Music Gallery'],

                'facilities_f5_title' => ['label' => 'Card 5 (Auditorium) Title', 'type' => 'text', 'default' => 'Auditorium & Assembly Hall'],
                'facilities_f5_badge' => ['label' => 'Card 5 Badge', 'type' => 'text', 'default' => 'Auditorium'],
                'facilities_f5_tag' => ['label' => 'Card 5 Tag', 'type' => 'text', 'default' => 'Central Space'],
                'facilities_f5_spec' => ['label' => 'Card 5 Spec', 'type' => 'text', 'default' => 'Acoustic Sound & Lights'],
                'facilities_f5_desc' => ['label' => 'Card 5 Description', 'type' => 'textarea', 'default' => 'Magnificent multi-purpose indoor auditorium equipped with theatrical stage lighting, modern acoustic sound systems, and seating for annual gatherings, debates, seminars, and fests.'],
                'facilities_f5_btn' => ['label' => 'Card 5 Button Text', 'type' => 'text', 'default' => 'View Cultural Events'],

                'facilities_f6_title' => ['label' => 'Card 6 (Green Lawn) Title', 'type' => 'text', 'default' => 'Big Playing Green Lawn'],
                'facilities_f6_badge' => ['label' => 'Card 6 Badge', 'type' => 'text', 'default' => 'Big Green Lawn'],
                'facilities_f6_tag' => ['label' => 'Card 6 Tag', 'type' => 'text', 'default' => 'Lush Turf'],
                'facilities_f6_spec' => ['label' => 'Card 6 Spec', 'type' => 'text', 'default' => 'Campus Frontage'],
                'facilities_f6_desc' => ['label' => 'Card 6 Description', 'type' => 'textarea', 'default' => 'Expansive, manicured natural grass lawn in front of the main campus building dedicated to morning community bonding, parachute activities, open-air physical training, and free play.'],
                'facilities_f6_btn' => ['label' => 'Card 6 Button Text', 'type' => 'text', 'default' => 'View Lawn Activities'],

                'facilities_f7_title' => ['label' => 'Card 7 (Cricket) Title', 'type' => 'text', 'default' => 'Cricket Field & Practice Nets'],
                'facilities_f7_badge' => ['label' => 'Card 7 Badge', 'type' => 'text', 'default' => 'Cricket Arena'],
                'facilities_f7_tag' => ['label' => 'Card 7 Tag', 'type' => 'text', 'default' => 'Cricket Nets'],
                'facilities_f7_spec' => ['label' => 'Card 7 Spec', 'type' => 'text', 'default' => 'Turf Pitch'],
                'facilities_f7_desc' => ['label' => 'Card 7 Description', 'type' => 'textarea', 'default' => 'Dedicated cricket ground with practice turf nets for batting drills, bowling run-ups, and fielding reflexes under the expert supervision of qualified cricket mentors.'],
                'facilities_f7_btn' => ['label' => 'Card 7 Button Text', 'type' => 'text', 'default' => 'View Cricket Drills'],

                'facilities_f8_title' => ['label' => 'Card 8 (Courts) Title', 'type' => 'text', 'default' => 'Basketball & Volleyball Courts'],
                'facilities_f8_badge' => ['label' => 'Card 8 Badge', 'type' => 'text', 'default' => 'Court Sports'],
                'facilities_f8_tag' => ['label' => 'Card 8 Tag', 'type' => 'text', 'default' => 'Hardcourt Surface'],
                'facilities_f8_spec' => ['label' => 'Card 8 Spec', 'type' => 'text', 'default' => 'Standard Marking'],
                'facilities_f8_desc' => ['label' => 'Card 8 Description', 'type' => 'textarea', 'default' => 'Professionally surfaced outdoor multi-sport courts for basketball and volleyball, fostering quick agility, vertical jumping, hand-eye coordination, and tournament-ready teamwork.'],
                'facilities_f8_btn' => ['label' => 'Card 8 Button Text', 'type' => 'text', 'default' => 'View Court Sports'],

                'facilities_f9_title' => ['label' => 'Card 9 (Football) Title', 'type' => 'text', 'default' => 'Full-Sized Football Ground'],
                'facilities_f9_badge' => ['label' => 'Card 9 Badge', 'type' => 'text', 'default' => 'Football Ground'],
                'facilities_f9_tag' => ['label' => 'Card 9 Tag', 'type' => 'text', 'default' => 'Lush Grass Pitch'],
                'facilities_f9_spec' => ['label' => 'Card 9 Spec', 'type' => 'text', 'default' => 'Regulation Posts'],
                'facilities_f9_desc' => ['label' => 'Card 9 Description', 'type' => 'textarea', 'default' => 'Lush natural grass football ground with regulation goalposts where students train in competitive sprint stamina, passing precision, and inter-house football championship matches.'],
                'facilities_f9_btn' => ['label' => 'Card 9 Button Text', 'type' => 'text', 'default' => 'View Football Matches'],

                'facilities_f10_title' => ['label' => 'Card 10 (Science Lab) Title', 'type' => 'text', 'default' => 'Composite Science Laboratories'],
                'facilities_f10_badge' => ['label' => 'Card 10 Badge', 'type' => 'text', 'default' => 'Science Labs'],
                'facilities_f10_tag' => ['label' => 'Card 10 Tag', 'type' => 'text', 'default' => 'Physics · Chem · Bio'],
                'facilities_f10_spec' => ['label' => 'Card 10 Spec', 'type' => 'text', 'default' => '56 m² CBSE Lab'],
                'facilities_f10_desc' => ['label' => 'Card 10 Description', 'type' => 'textarea', 'default' => 'Fully equipped composite science laboratory for hands-on experimentation across Physics, Chemistry, and Biology with high-grade optical microscopes and strict safety protocols.'],
                'facilities_f10_btn' => ['label' => 'Card 10 Button Text', 'type' => 'text', 'default' => 'Explore Science Labs'],

                'facilities_f11_title' => ['label' => 'Card 11 (Robotics) Title', 'type' => 'text', 'default' => 'Robotics & STEAM Innovation Lab'],
                'facilities_f11_badge' => ['label' => 'Card 11 Badge', 'type' => 'text', 'default' => 'Robotics & STEAM'],
                'facilities_f11_tag' => ['label' => 'Card 11 Tag', 'type' => 'text', 'default' => 'Microcontrollers & AI'],
                'facilities_f11_spec' => ['label' => 'Card 11 Spec', 'type' => 'text', 'default' => 'Hands-On Kits'],
                'facilities_f11_desc' => ['label' => 'Card 11 Description', 'type' => 'textarea', 'default' => 'Experiential robotics arena with microcontrollers, motorized building kits, sensors, and coding puzzles where young innovators build automated projects and computational logic.'],
                'facilities_f11_btn' => ['label' => 'Card 11 Button Text', 'type' => 'text', 'default' => 'Explore Robotics Track'],

                'facilities_f12_title' => ['label' => 'Card 12 (Math & Abacus) Title', 'type' => 'text', 'default' => 'Mathematics & Abacus Lab'],
                'facilities_f12_badge' => ['label' => 'Card 12 Badge', 'type' => 'text', 'default' => 'Math & Abacus'],
                'facilities_f12_tag' => ['label' => 'Card 12 Tag', 'type' => 'text', 'default' => 'Speed Arithmetic'],
                'facilities_f12_spec' => ['label' => 'Card 12 Spec', 'type' => 'text', 'default' => '47 m² Lab'],
                'facilities_f12_desc' => ['label' => 'Card 12 Description', 'type' => 'textarea', 'default' => 'Dedicated math activity space featuring Abacus apparatus, tactile geometric kits, 3D solids, and mental math tools making arithmetic intuitive and engaging for all age groups.'],
                'facilities_f12_btn' => ['label' => 'Card 12 Button Text', 'type' => 'text', 'default' => 'Explore Abacus Track'],

                'facilities_f13_title' => ['label' => 'Card 13 (Smart Classrooms) Title', 'type' => 'text', 'default' => 'Interactive Smart Classrooms'],
                'facilities_f13_badge' => ['label' => 'Card 13 Badge', 'type' => 'text', 'default' => 'Smart Classrooms'],
                'facilities_f13_tag' => ['label' => 'Card 13 Tag', 'type' => 'text', 'default' => '25 Classrooms'],
                'facilities_f13_spec' => ['label' => 'Card 13 Spec', 'type' => 'text', 'default' => '47.08 m² each'],
                'facilities_f13_desc' => ['label' => 'Card 13 Description', 'type' => 'textarea', 'default' => 'Well-ventilated, spacious air-cooled classrooms adhering to CBSE spatial norms, equipped with interactive multimedia panels, natural airflow, and child-safe ergonomic furniture.'],
                'facilities_f13_btn' => ['label' => 'Card 13 Button Text', 'type' => 'text', 'default' => 'Explore Classrooms'],

                'facilities_f14_title' => ['label' => 'Card 14 (Transport) Title', 'type' => 'text', 'default' => 'GPS-Enabled School Transport'],
                'facilities_f14_badge' => ['label' => 'Card 14 Badge', 'type' => 'text', 'default' => 'GPS Fleet'],
                'facilities_f14_tag' => ['label' => 'Card 14 Tag', 'type' => 'text', 'default' => 'Third Party'],
                'facilities_f14_spec' => ['label' => 'Card 14 Spec', 'type' => 'text', 'default' => 'Head: Shakir Bhai'],
                'facilities_f14_desc' => ['label' => 'Card 14 Description', 'type' => 'textarea', 'default' => 'Dedicated school transport provided via a verified third party, managed by Transport Head Shakir Bhai (+91 99237 47775) with GPS tracking, speed governors, and female attendants.'],
                'facilities_f14_btn' => ['label' => 'Card 14 Button Text', 'type' => 'text', 'default' => 'View Bus Routes'],

                'facilities_f15_title' => ['label' => 'Card 15 (Security) Title', 'type' => 'text', 'default' => '24/7 CCTV Campus Safety & Infirmary'],
                'facilities_f15_badge' => ['label' => 'Card 15 Badge', 'type' => 'text', 'default' => '24/7 Monitored'],
                'facilities_f15_tag' => ['label' => 'Card 15 Tag', 'type' => 'text', 'default' => 'CCTV Network'],
                'facilities_f15_spec' => ['label' => 'Card 15 Spec', 'type' => 'text', 'default' => 'Full-Time Nurse'],
                'facilities_f15_desc' => ['label' => 'Card 15 Description', 'type' => 'textarea', 'default' => 'Full perimeter boundary wall, round-the-clock CCTV cameras across checkpoints and corridors, guarded gates, campus sick bay with full-time nurse, and pure RO drinking water stations.'],
                'facilities_f15_btn' => ['label' => 'Card 15 Button Text', 'type' => 'text', 'default' => 'View Safety Certifications'],
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
        'gallery' => [
            'name' => 'Gallery Page',
            'url' => '/gallery',
            'seo_key' => 'gallery',
            'icon' => 'fa-solid fa-images',
            'category' => 'Campus & Media',
            'fields' => [
                'gallery_hero_image' => ['label' => 'Gallery Hero Curved Campus Photo', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
            ],
        ],
        'blog' => [
            'name' => 'Blog & Chronicles (Our Story)',
            'url' => '/blog',
            'seo_key' => 'blog',
            'icon' => 'fa-solid fa-newspaper',
            'category' => 'Campus & Media',
            'fields' => [
                // Hero Section
                'blog_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'ADVAITA CHRONICLES & BLOG'],
                'blog_hero_title' => ['label' => 'Hero Main Title Prefix', 'type' => 'text', 'default' => 'Our'],
                'blog_hero_highlight' => ['label' => 'Hero Title Highlight (Serif/Orange)', 'type' => 'text', 'default' => 'Story'],
                'blog_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'Discover the latest news, achievements, events, and inspiring stories from Advaita School of Excellence.'],
                'blog_hero_script_tag' => ['label' => 'Floating Script Badge Text', 'type' => 'text', 'default' => "More\nThan A School"],
                'blog_hero_image' => ['label' => 'Blog Hero Curved Campus Photo', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
            ],
        ],
        'contact' => [
            'name' => 'Contact Us',
            'url' => '/contact',
            'seo_key' => 'contact',
            'icon' => 'fa-solid fa-envelope-open-text',
            'category' => 'Campus & Media',
            'fields' => [
                // Hero Section
                'contact_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'GET IN TOUCH'],
                'contact_hero_title' => ['label' => 'Hero Main Title Prefix', 'type' => 'text', 'default' => "We'd love to"],
                'contact_hero_highlight' => ['label' => 'Hero Title Highlight (Serif/Orange)', 'type' => 'text', 'default' => 'hear from you.'],
                'contact_hero_desc' => ['label' => 'Hero Description Paragraph', 'type' => 'textarea', 'default' => 'Admissions, academics, or just a friendly hello — our team is always here to help.'],
                'contact_hero_script_tag' => ['label' => 'Floating Script Badge Text', 'type' => 'text', 'default' => "More\nThan A School"],
                'contact_hero_image' => ['label' => 'Contact Hero Curved Campus Photo', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],

                // Bottom Orange CTA Banner
                'contact_cta_eyebrow' => ['label' => 'Bottom CTA Eyebrow', 'type' => 'text', 'default' => 'STILL HAVE QUESTIONS?'],
                'contact_cta_title_prefix' => ['label' => 'Bottom CTA Heading Prefix', 'type' => 'text', 'default' => 'Need more'],
                'contact_cta_title_highlight' => ['label' => 'Bottom CTA Heading Highlight', 'type' => 'text', 'default' => 'information?'],
                'contact_cta_desc' => ['label' => 'Bottom CTA Description', 'type' => 'textarea', 'default' => 'Our admissions team is happy to help you with any queries regarding admissions, fee structure, or campus visit.'],
                'contact_cta_btn1_text' => ['label' => 'Bottom CTA Button 1 Text', 'type' => 'text', 'default' => 'Call the Admissions Team'],
                'contact_cta_btn2_text' => ['label' => 'Bottom CTA Button 2 Text', 'type' => 'text', 'default' => 'Chat on WhatsApp'],
                'contact_cta_image' => ['label' => 'Bottom CTA Student Cutout Image', 'type' => 'image', 'default' => 'assets/images/contact-student-pointing-transparent.png'],
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
