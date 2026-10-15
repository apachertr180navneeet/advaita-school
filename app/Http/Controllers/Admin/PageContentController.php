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
                'about_hero_badge' => ['label' => 'Hero Badge Text', 'type' => 'text', 'default' => 'WELCOME TO'],
                'about_hero_title' => ['label' => 'Hero Main Title', 'type' => 'text', 'default' => 'A Premier CBSE School with a'],
                'about_hero_highlight' => ['label' => 'Hero Highlight Title', 'type' => 'text', 'default' => 'Stronger Purpose.'],
                'about_hero_subtitle' => ['label' => 'Hero Subtitle Paragraph', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, Parbhani, we believe education extends far beyond classrooms. We build individuals of curiosity, empathy, and resilience.'],

                // Story Section ("Built on Values")
                'about_story_eyebrow' => ['label' => 'Story Eyebrow', 'type' => 'text', 'default' => 'BUILT ON A STRONG FOUNDATION'],
                'about_story_title' => ['label' => 'Story Title', 'type' => 'text', 'default' => 'Built on Values.'],
                'about_story_highlight' => ['label' => 'Story Highlight Title', 'type' => 'text', 'default' => 'Academic Excellence.'],
                'about_story_p1' => ['label' => 'Story Description Paragraph 1', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, we blend academic rigor, character development, and future-focused learning to help every child grow into a confident, compassionate, and capable individual.'],
                'about_story_p2' => ['label' => 'Story Description Paragraph 2', 'type' => 'textarea', 'default' => "Our focus on NEET/IIT foundation and various competitive exams, along with a strong CBSE curriculum, ensures that students are well-prepared for higher education and life's opportunities."],
                'about_stat_students' => ['label' => 'Statistic: Happy Students', 'type' => 'text', 'default' => '5,000+'],
                'about_stat_years' => ['label' => 'Statistic: Years of Legacy', 'type' => 'text', 'default' => '25+'],
                'about_stat_satisfaction' => ['label' => 'Statistic: Parent Satisfaction', 'type' => 'text', 'default' => '95%'],
                'about_story_badge_title' => ['label' => 'Student Photo Badge Line 1', 'type' => 'text', 'default' => 'Best CBSE'],
                'about_story_badge_sub' => ['label' => 'Student Photo Badge Line 2', 'type' => 'text', 'default' => 'Result Producer'],
                'about_story_badge_tag' => ['label' => 'Student Photo Badge Tag', 'type' => 'text', 'default' => 'Year after Year'],

                // Core Philosophy
                'about_philosophy_eyebrow' => ['label' => 'Philosophy Eyebrow', 'type' => 'text', 'default' => 'PREPARING FOR A BRIGHTER TOMORROW'],
                'about_philosophy_title' => ['label' => 'Philosophy Heading Line 1', 'type' => 'text', 'default' => 'Education for Life,'],
                'about_philosophy_highlight' => ['label' => 'Philosophy Heading Line 2', 'type' => 'text', 'default' => 'Not Just Exams.'],
                'about_philosophy_desc' => ['label' => 'Philosophy Paragraph', 'type' => 'textarea', 'default' => 'We integrate CBSE academics with a focused NEET/IIT foundation and training for various competitive exams. Our student-centric approach ensures conceptual clarity, critical thinking, and real-world application — helping students achieve success in academics and beyond.'],

                // Campus Showcase
                'about_campus_eyebrow' => ['label' => 'Campus Showcase Eyebrow', 'type' => 'text', 'default' => 'A SPACE TO GROW'],
                'about_campus_title' => ['label' => 'Campus Showcase Title', 'type' => 'text', 'default' => 'A Space to Learn,'],
                'about_campus_highlight' => ['label' => 'Campus Showcase Highlight', 'type' => 'text', 'default' => 'Explore and Excel.'],
                'about_campus_desc' => ['label' => 'Campus Showcase Description', 'type' => 'textarea', 'default' => 'Our modern campus is designed to inspire curiosity, encourage collaboration, and provide the best learning experience. From spacious classrooms to advanced labs and vibrant activity spaces, every corner of Advaita nurtures growth and opportunity.'],

                // Admission CTA Banner
                'about_cta_eyebrow' => ['label' => 'Admission CTA Eyebrow', 'type' => 'text', 'default' => 'BE A PART OF ADVAITA'],
                'about_cta_headline' => ['label' => 'Admission CTA Headline', 'type' => 'text', 'default' => "Together, let's build brighter tomorrows."],
                'about_cta_subtext' => ['label' => 'Admission CTA Subtext', 'type' => 'textarea', 'default' => 'Admissions are open for CBSE, NEET/IIT Foundation & Competitive Exam Programmes.'],

                // Section Imagery
                'about_hero_image' => ['label' => 'Hero Campus Building Image', 'type' => 'image', 'default' => 'assets/images/about-hero-building.jpg'],
                'about_story_image' => ['label' => 'Student Photo (Built on Values)', 'type' => 'image', 'default' => 'assets/images/about-philosophy-student.jpg'],
                'about_philosophy_image' => ['label' => 'Classroom Learning Photo (Education for Life)', 'type' => 'image', 'default' => 'assets/images/about-story-student.jpg'],
                'about_campus_image' => ['label' => 'Campus Courtyard Photo (Campus Showcase)', 'type' => 'image', 'default' => 'assets/images/about-campus-courtyard.jpg'],
                'about_cta_image' => ['label' => 'Admissions Banner Students Image', 'type' => 'image', 'default' => 'assets/images/about-cta-students-trio.png'],
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
            'name' => 'Academics & Pedagogy',
            'url' => '/academics',
            'seo_key' => 'academics',
            'icon' => 'fa-solid fa-book-open',
            'category' => 'Academics & Results',
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
        'facilities' => [
            'name' => 'Campus Facilities',
            'url' => '/facilities',
            'seo_key' => 'facilities',
            'icon' => 'fa-solid fa-building-columns',
            'category' => 'Admissions & Information',
            'fields' => [
                'facilities_hero_badge' => ['label' => 'Hero Eyebrow Badge', 'type' => 'text', 'default' => 'OUR CAMPUS'],
                'facilities_hero_title' => ['label' => 'Hero Heading', 'type' => 'text', 'default' => 'More than Classrooms, A Place to Grow.'],
                'facilities_hero_desc' => ['label' => 'Hero Description', 'type' => 'textarea', 'default' => 'Our campus is thoughtfully designed to provide a safe, modern and inspiring environment where every child can learn, explore and excel.'],
                'facilities_cta_headline' => ['label' => 'Campus Tour CTA Headline', 'type' => 'text', 'default' => 'Take a Campus Tour.'],
                'facilities_cta_desc' => ['label' => 'Campus Tour CTA Description', 'type' => 'textarea', 'default' => 'Visit our campus and explore the facilities that make learning at Advaita a truly enriching experience.'],

                // Imagery
                'facilities_hero_image' => ['label' => 'Campus Showcase Feature Photo', 'type' => 'image', 'default' => 'assets/images/about-campus-courtyard.jpg'],
                'facilities_card1_image' => ['label' => 'Smart Classrooms Photo', 'type' => 'image', 'default' => 'assets/images/fac-smart-class.jpg'],
                'facilities_card2_image' => ['label' => 'Science Laboratories Photo', 'type' => 'image', 'default' => 'assets/images/fac-science-lab.jpg'],
                'facilities_card3_image' => ['label' => 'Computer Lab Photo', 'type' => 'image', 'default' => 'assets/images/fac-computer.jpg'],
                'facilities_card4_image' => ['label' => 'Library Photo', 'type' => 'image', 'default' => 'assets/images/fac-library.jpg'],
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
     * Display the page content editor.
     */
    public function index(Request $request): View
    {
        $selectedKey = $request->query('section', 'about');
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

        return view('admin.pages.index', compact('sections', 'selectedKey', 'currentSection'));
    }

    /**
     * Update page content settings.
     */
    public function update(Request $request): RedirectResponse
    {
        $sectionKey = $request->input('section_key');
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

        return redirect()
            ->route('admin.pages.index', ['section' => $sectionKey])
            ->with('success', "Content for '{$this->sectionsMap[$sectionKey]['name']}' updated successfully!");
    }
}
