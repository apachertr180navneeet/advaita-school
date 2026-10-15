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
                'about_hero_badge' => ['label' => 'Hero Badge Text', 'type' => 'text', 'default' => 'ABOUT OUR SCHOOL'],
                'about_hero_title' => ['label' => 'Hero Main Title', 'type' => 'text', 'default' => 'Nurturing Potential.'],
                'about_hero_highlight' => ['label' => 'Hero Highlight Title', 'type' => 'text', 'default' => 'Building Character.'],
                'about_hero_subtitle' => ['label' => 'Hero Subtitle Paragraph', 'type' => 'textarea', 'default' => 'At Advaita School of Excellence, Parbhani, we believe education extends far beyond classrooms. We build individuals of curiosity, empathy, and resilience.'],
                'about_stat_years' => ['label' => 'Statistic: Years of Excellence', 'type' => 'text', 'default' => '12+'],
                'about_stat_students' => ['label' => 'Statistic: Happy Students', 'type' => 'text', 'default' => '1,500+'],
                'about_stat_faculty' => ['label' => 'Statistic: Expert Teachers', 'type' => 'text', 'default' => '75+'],
                'about_stat_acres' => ['label' => 'Statistic: Campus Acres', 'type' => 'text', 'default' => '5+'],
            ],
        ],
        'vision' => [
            'name' => 'Vision & Mission',
            'url' => '/vision-mission',
            'seo_key' => 'vision_mission',
            'icon' => 'fa-solid fa-bullseye',
            'category' => 'Leadership & Story',
            'fields' => [
                'vision_title' => ['label' => 'Vision Title', 'type' => 'text', 'default' => 'Our Guiding Vision'],
                'vision_text' => ['label' => 'Vision Statement', 'type' => 'textarea', 'default' => 'To be a benchmark in quality education where every child discovers their intellectual, emotional, and social brilliance to lead with humility, integrity, and global wisdom.'],
                'mission_title' => ['label' => 'Mission Title', 'type' => 'text', 'default' => 'Our Core Mission'],
                'mission_text' => ['label' => 'Mission Statement', 'type' => 'textarea', 'default' => 'To cultivate a stimulating, inclusive, and technologically advanced learning ecosystem that empowers students with critical thinking, ethical values, and holistic life skills.'],
            ],
        ],
        'chairman' => [
            'name' => "Chairman's Desk",
            'url' => '/chairmans-desk',
            'seo_key' => 'chairmans_desk',
            'icon' => 'fa-solid fa-user-tie',
            'category' => 'Leadership & Story',
            'fields' => [
                'chairman_name' => ['label' => 'Chairman Full Name', 'type' => 'text', 'default' => 'Dr. Sureshji Jain'],
                'chairman_designation' => ['label' => 'Official Designation', 'type' => 'text', 'default' => 'Chairman, Sanmati Sevabhavi Sanstha'],
                'chairman_quote' => ['label' => 'Inspirational Quote Box', 'type' => 'textarea', 'default' => 'True education is not mere accumulation of facts; it is the ignition of the human spirit to serve society and seek excellence in every endeavor.'],
                'chairman_welcome' => ['label' => 'Message Heading', 'type' => 'text', 'default' => 'A Message of Hope and Ambition'],
                'chairman_message_p1' => ['label' => 'Message Paragraph 1', 'type' => 'textarea', 'default' => 'Advaita School of Excellence was born from a deep conviction that children in Parbhani deserve the finest educational opportunities — matching the best in the nation while staying rooted in our timeless cultural values.'],
                'chairman_message_p2' => ['label' => 'Message Paragraph 2', 'type' => 'textarea', 'default' => 'Over the years, our campus has flourished into a vibrant sanctuary of learning, discovery, and sportsmanship. We invest continuously in modern labs, world-class teachers, and a secure environment so parents can entrust us with their children with utmost confidence.'],
            ],
        ],
        'principal' => [
            'name' => "Principal's Desk",
            'url' => '/principals-desk',
            'seo_key' => 'principals_desk',
            'icon' => 'fa-solid fa-user-graduate',
            'category' => 'Leadership & Story',
            'fields' => [
                'principal_name' => ['label' => 'Principal Full Name', 'type' => 'text', 'default' => 'Mrs. Sunita S. Deshmukh'],
                'principal_designation' => ['label' => 'Official Designation', 'type' => 'text', 'default' => 'Principal, Advaita School of Excellence'],
                'principal_quote' => ['label' => 'Featured Quote Box', 'type' => 'textarea', 'default' => 'Every child enters our gates with unique curiosity. Our privilege and sacred duty is to nurture that spark into an unshakeable flame of confidence.'],
                'principal_welcome' => ['label' => 'Welcome Heading', 'type' => 'text', 'default' => 'Welcoming You to Our Family'],
                'principal_message_p1' => ['label' => 'Message Paragraph 1', 'type' => 'textarea', 'default' => 'It is with immense joy that I welcome you to Advaita School of Excellence. As educators, our primary purpose is to provide a joyful, safe, and academically rigorous space where children are excited to come every single morning.'],
                'principal_message_p2' => ['label' => 'Message Paragraph 2', 'type' => 'textarea', 'default' => 'With the integration of CBSE modern learning guidelines, robotics, and co-curricular programs, our students excel not only in exams but also in teamwork, public speaking, and problem solving.'],
            ],
        ],
        'academics' => [
            'name' => 'Academics & Pedagogy',
            'url' => '/academics',
            'seo_key' => 'academics',
            'icon' => 'fa-solid fa-book-open',
            'category' => 'Academics & Results',
            'fields' => [
                'academics_hero_title' => ['label' => 'Hero Heading', 'type' => 'text', 'default' => 'Academic Rigor Meets Creative Expression'],
                'academics_hero_desc' => ['label' => 'Hero Subtitle', 'type' => 'textarea', 'default' => 'Our curriculum is meticulously planned from Foundation Years (Nursery to UKG) to Senior Secondary stages, fostering experiential learning and conceptual mastery.'],
                'academics_curriculum_affiliation' => ['label' => 'Board Affiliation Line', 'type' => 'text', 'default' => 'Affiliated with the Central Board of Secondary Education (CBSE), New Delhi. Affiliation No: 1130920.'],
            ],
        ],
        'results' => [
            'name' => 'Board Results & Toppers',
            'url' => '/results',
            'seo_key' => 'results',
            'icon' => 'fa-solid fa-square-poll-vertical',
            'category' => 'Academics & Results',
            'fields' => [
                'results_hero_badge' => ['label' => 'Badge Text', 'type' => 'text', 'default' => 'PROUD MOMENTS'],
                'results_hero_title' => ['label' => 'Hero Heading', 'type' => 'text', 'default' => 'Consistent Academic Triumph'],
                'results_hero_subtitle' => ['label' => 'Hero Subtitle', 'type' => 'textarea', 'default' => 'Celebrating the dedication of our students, mentorship of our faculty, and trust of our parents.'],
                'results_stat_pass_rate' => ['label' => 'Overall Pass Percentage', 'type' => 'text', 'default' => '100%'],
                'results_stat_90_plus' => ['label' => 'Students Scored 90%+', 'type' => 'text', 'default' => '15+'],
                'results_stat_80_plus' => ['label' => 'Students Scored 80%+', 'type' => 'text', 'default' => '8+'],
                'results_stat_top_percentage' => ['label' => 'Highest Score', 'type' => 'text', 'default' => '97.8%'],
            ],
        ],
        'fee' => [
            'name' => 'Fee Structure & Policy',
            'url' => '/fee-structure',
            'seo_key' => 'fee_structure',
            'icon' => 'fa-solid fa-indian-rupee-sign',
            'category' => 'Admissions & Information',
            'fields' => [
                'fee_academic_year' => ['label' => 'Current Academic Year', 'type' => 'text', 'default' => '2026–27'],
                'fee_installments_note' => ['label' => 'Installments Policy Note', 'type' => 'textarea', 'default' => 'Fees can be conveniently paid in three term-wise installments or an annual one-time payment with special benefits.'],
                'fee_transparency_note' => ['label' => 'Transparency Policy Note', 'type' => 'textarea', 'default' => 'No hidden charges or mandatory surprise fees. Detailed receipts are issued for all transactions.'],
            ],
        ],
        'facilities' => [
            'name' => 'Campus Facilities',
            'url' => '/facilities',
            'seo_key' => 'facilities',
            'icon' => 'fa-solid fa-building-columns',
            'category' => 'Admissions & Information',
            'fields' => [
                'facilities_hero_title' => ['label' => 'Hero Heading', 'type' => 'text', 'default' => 'An Inspiring 5-Acre Smart Campus'],
                'facilities_hero_desc' => ['label' => 'Hero Description', 'type' => 'textarea', 'default' => 'Designed with student well-being at its center — featuring spacious, airy classrooms, green sports lawns, robotics tech labs, and robust safety measures.'],
            ],
        ],
        'disclosure' => [
            'name' => 'Mandatory Disclosure',
            'url' => '/mandatory-disclosure',
            'seo_key' => 'mandatory_disclosure',
            'icon' => 'fa-solid fa-file-shield',
            'category' => 'Compliance & Info',
            'fields' => [
                'disclosure_affiliation_period' => ['label' => 'CBSE Affiliation Period', 'type' => 'text', 'default' => '2023 to 2028'],
                'disclosure_society_name' => ['label' => 'Registered Society Name', 'type' => 'text', 'default' => 'Sanmati Sevabhavi Sanstha, Parbhani'],
                'disclosure_trust_reg_no' => ['label' => 'Trust Registration No.', 'type' => 'text', 'default' => 'F-3420 (Parbhani)'],
                'disclosure_principal_qualification' => ['label' => 'Principal Qualification', 'type' => 'text', 'default' => 'M.Sc., M.Ed., Ph.D.'],
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
        foreach ($fields as $fieldKey => $fConfig) {
            if ($request->has($fieldKey)) {
                Setting::set($fieldKey, trim((string) $request->input($fieldKey)));
            }
        }

        return redirect()
            ->route('admin.pages.index', ['section' => $sectionKey])
            ->with('success', "Content for '{$this->sectionsMap[$sectionKey]['name']}' updated successfully!");
    }
}
