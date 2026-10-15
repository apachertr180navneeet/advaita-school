<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SeoController extends Controller
{
    /**
     * Map of available school pages for SEO management.
     *
     * @var array<string, array<string, string>>
     */
    protected array $pagesMap = [
        'home' => [
            'name' => 'Home Page',
            'url' => '/',
            'icon' => 'fa-solid fa-house',
            'default_title' => 'Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)',
            'default_description' => 'Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs, holistic sports, and values-based learning from Pre-Primary to Class 10.',
            'default_keywords' => 'Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani, CBSE Affiliated School 1130920, Robotics Lab School, English Medium School Parbhani',
        ],
        'about_us' => [
            'name' => 'About Us',
            'url' => '/about-us',
            'icon' => 'fa-solid fa-school',
            'default_title' => 'About Us - Advaita School of Excellence, Parbhani',
            'default_description' => 'Learn about Advaita School of Excellence, our history, leadership under Sanmati Sevabhavi Sanstha, pedagogy, infrastructure, and dedication to academic and moral excellence.',
            'default_keywords' => 'About Advaita School, Parbhani CBSE school history, Sanmati Sevabhavi Sanstha, CBSE school management Parbhani',
        ],
        'vision_mission' => [
            'name' => 'Vision & Mission',
            'url' => '/vision-mission',
            'icon' => 'fa-solid fa-bullseye',
            'default_title' => 'Vision & Mission - Advaita School of Excellence, Parbhani',
            'default_description' => 'Explore the vision, mission, and core values of Advaita School of Excellence. Guiding young minds to achieve academic brilliance, ethical integrity, and global wisdom.',
            'default_keywords' => 'Advaita vision, school mission, core values, holistic education philosophy, Parbhani school principles',
        ],
        'chairmans_desk' => [
            'name' => "Chairman's Desk",
            'url' => '/chairmans-desk',
            'icon' => 'fa-solid fa-user-tie',
            'default_title' => "Chairman's Desk - Advaita School of Excellence, Parbhani",
            'default_description' => 'Message from the Chairman of Advaita School of Excellence, inspiring students, parents, and educators toward continuous learning and societal responsibility.',
            'default_keywords' => 'Advaita Chairman message, Chairman desk, Sanmati Sanstha Chairman, school leadership message',
        ],
        'principals_desk' => [
            'name' => "Principal's Desk",
            'url' => '/principals-desk',
            'icon' => 'fa-solid fa-user-graduate',
            'default_title' => "Principal's Desk - Advaita School of Excellence, Parbhani",
            'default_description' => 'Message from the Principal of Advaita School of Excellence on academic innovation, student-centered learning, child safety, and creative growth.',
            'default_keywords' => 'Principal message Advaita School, principal desk Parbhani, educational leadership',
        ],
        'our_staff' => [
            'name' => 'Faculty & Staff',
            'url' => '/our-staff',
            'icon' => 'fa-solid fa-chalkboard-user',
            'default_title' => 'Our Faculty & Staff - Advaita School of Excellence, Parbhani',
            'default_description' => 'Meet our dedicated, experienced, and compassionate teaching faculty and staff members committed to mentoring and nurturing every child at Advaita.',
            'default_keywords' => 'Advaita school teachers, CBSE faculty Parbhani, qualified teachers, experienced school educators',
        ],
        'academics' => [
            'name' => 'Academics & Curriculum',
            'url' => '/academics',
            'icon' => 'fa-solid fa-book-open',
            'default_title' => 'Academics & Curriculum - Advaita School of Excellence, Parbhani',
            'default_description' => 'Explore the CBSE academic curriculum, pedagogical approach, STEAM education, language labs, and developmental stages from Kindergarten to Class 10.',
            'default_keywords' => 'CBSE curriculum Parbhani, academic programs, STEAM labs, robotics education, school syllabus',
        ],
        'results' => [
            'name' => 'Board Results',
            'url' => '/results',
            'icon' => 'fa-solid fa-square-poll-vertical',
            'default_title' => 'Board Results & Achievements - Advaita School of Excellence, Parbhani',
            'default_description' => 'Discover the exemplary academic results, Class 10 CBSE board performance, 100% passing record, and national Olympiad achievements of Advaita students.',
            'default_keywords' => 'Advaita board results, CBSE 10th result Parbhani, school toppers, 100% board passing record',
        ],
        'admission_info' => [
            'name' => 'Admission Info',
            'url' => '/admission-info',
            'icon' => 'fa-solid fa-id-card',
            'default_title' => 'Admission Information (2026-27) - Advaita School of Excellence',
            'default_description' => 'Comprehensive admission guidelines, eligibility criteria, document requirements, admission process, and campus visits for Nursery to Class 10.',
            'default_keywords' => 'School admissions Parbhani, CBSE admission 2026-27, Nursery admission, Class 1 to 10 school admission',
        ],
        'fee_structure' => [
            'name' => 'Fee Structure',
            'url' => '/fee-structure',
            'icon' => 'fa-solid fa-indian-rupee-sign',
            'default_title' => 'Fee Structure (2026-27) - Advaita School of Excellence, Parbhani',
            'default_description' => 'Transparent and affordable fee structure for Pre-Primary, Primary, Middle, and Secondary classes at Advaita School of Excellence with flexible payment terms.',
            'default_keywords' => 'Advaita school fee structure, Parbhani school fees, CBSE school tuition fees, installment plans',
        ],
        'online_registration' => [
            'name' => 'Online Registration',
            'url' => '/online-registration',
            'icon' => 'fa-solid fa-file-pen',
            'default_title' => 'Online Student Registration (2026-27) - Advaita School of Excellence',
            'default_description' => 'Apply online for student admission at Advaita School of Excellence, Parbhani. Fast, secure, and hassle-free registration form for academic year 2026-27.',
            'default_keywords' => 'Online school admission form, student registration Parbhani, Advaita online admission',
        ],
        'facilities' => [
            'name' => 'Facilities',
            'url' => '/facilities',
            'icon' => 'fa-solid fa-building-columns',
            'default_title' => 'Campus Facilities & Infrastructure - Advaita School of Excellence',
            'default_description' => 'Tour our state-of-the-art campus featuring digital smart classrooms, modern robotics & science labs, sports turf, library, splash pool, and CCTV security.',
            'default_keywords' => 'School facilities Parbhani, robotics lab, smart classes, sports ground, library, campus infrastructure',
        ],
        'gallery' => [
            'name' => 'Campus Gallery',
            'url' => '/gallery',
            'icon' => 'fa-solid fa-camera-retro',
            'default_title' => 'Photo Gallery & Life at Campus - Advaita School of Excellence',
            'default_description' => 'Browse high-resolution photographs showcasing daily life, annual day celebrations, sports tournaments, science exhibitions, and cultural fests at Advaita.',
            'default_keywords' => 'Advaita school photos, campus life pictures, school sports gallery, events and celebrations',
        ],
        'blog' => [
            'name' => 'Blog & News',
            'url' => '/blog',
            'icon' => 'fa-solid fa-newspaper',
            'default_title' => 'Blog & School News - Advaita School of Excellence, Parbhani',
            'default_description' => 'Stay updated with school announcements, upcoming events, parenting tips, student articles, and educational insights from Advaita School of Excellence.',
            'default_keywords' => 'Advaita school blog, school news Parbhani, educational articles, student achievements',
        ],
        'contact' => [
            'name' => 'Contact Us',
            'url' => '/contact',
            'icon' => 'fa-solid fa-envelope',
            'default_title' => 'Contact Us - Advaita School of Excellence, Parbhani',
            'default_description' => 'Get in touch with Advaita School of Excellence, Parbhani. Find our address, phone numbers, email, interactive Google map, and visit hours.',
            'default_keywords' => 'Contact Advaita School, Parbhani school phone number, school address, admission contact',
        ],
        'mandatory_disclosure' => [
            'name' => 'Mandatory Disclosure',
            'url' => '/mandatory-disclosure',
            'icon' => 'fa-solid fa-file-shield',
            'default_title' => 'Mandatory Public Disclosure (CBSE) - Advaita School of Excellence',
            'default_description' => 'Official CBSE mandatory disclosure details for Advaita School of Excellence (Affiliation No. 1130920), including certificates, society documents, and compliance records.',
            'default_keywords' => 'CBSE mandatory disclosure, Affiliation 1130920, school NOC, recognition certificate, SARAS compliance',
        ],
    ];

    /**
     * Display the SEO management settings.
     */
    public function index(Request $request): View
    {
        $selectedKey = $request->query('page', 'home');
        if (! array_key_exists($selectedKey, $this->pagesMap)) {
            $selectedKey = 'home';
        }

        $pages = [];
        foreach ($this->pagesMap as $key => $info) {
            $customTitle = Setting::get("seo_{$key}_title");
            $customDesc = Setting::get("seo_{$key}_description");
            $customKeys = Setting::get("seo_{$key}_keywords");

            $pages[$key] = array_merge($info, [
                'key' => $key,
                'title' => $customTitle ?: $info['default_title'],
                'description' => $customDesc ?: $info['default_description'],
                'keywords' => $customKeys ?: $info['default_keywords'],
                'is_customized' => ! empty($customTitle) || ! empty($customDesc),
            ]);
        }

        $currentPage = $pages[$selectedKey];

        return view('admin.seo.index', compact('pages', 'selectedKey', 'currentPage'));
    }

    /**
     * Update the SEO settings for a specific page.
     */
    public function update(Request $request): RedirectResponse
    {
        // Support legacy payload with home_seo_* fields
        if ($request->has('home_seo_title') || $request->has('home_seo_description')) {
            $validated = $request->validate([
                'home_seo_title' => ['required', 'string', 'max:255'],
                'home_seo_description' => ['required', 'string', 'max:1000'],
                'home_seo_keywords' => ['nullable', 'string', 'max:1000'],
            ]);

            Setting::set('seo_home_title', trim($validated['home_seo_title']));
            Setting::set('seo_home_description', trim($validated['home_seo_description']));
            Setting::set('seo_home_keywords', $validated['home_seo_keywords'] ? trim($validated['home_seo_keywords']) : null);
            Setting::set('home_seo_title', trim($validated['home_seo_title']));
            Setting::set('home_seo_description', trim($validated['home_seo_description']));
            Setting::set('home_seo_keywords', $validated['home_seo_keywords'] ? trim($validated['home_seo_keywords']) : null);

            return redirect()
                ->route('admin.seo.index', ['page' => 'home'])
                ->with('success', 'Homepage SEO settings updated successfully!');
        }

        $validated = $request->validate([
            'page_key' => ['required', 'string'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'keywords' => ['nullable', 'string', 'max:1000'],
        ]);

        $key = $validated['page_key'];

        Setting::set("seo_{$key}_title", trim($validated['title']));
        Setting::set("seo_{$key}_description", trim($validated['description']));
        Setting::set("seo_{$key}_keywords", $validated['keywords'] ? trim($validated['keywords']) : null);

        // Sync home_seo_* if page is home
        if ($key === 'home') {
            Setting::set('home_seo_title', trim($validated['title']));
            Setting::set('home_seo_description', trim($validated['description']));
            Setting::set('home_seo_keywords', $validated['keywords'] ? trim($validated['keywords']) : null);
        }

        $pageName = $this->pagesMap[$key]['name'] ?? ucfirst($key);

        return redirect()
            ->route('admin.seo.index', ['page' => $key])
            ->with('success', "SEO metadata for '{$pageName}' updated successfully!");
    }
}
