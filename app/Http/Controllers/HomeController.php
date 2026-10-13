<?php

namespace App\Http\Controllers;

use App\Models\Pillar;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\WhyChooseCard;
use Database\Seeders\PillarSeeder;
use Database\Seeders\WhyChooseCardSeeder;

class HomeController extends Controller
{
    /**
     * Display the Homepage with dynamic hero sliders, three pillars, and why choose cards.
     */
    public function index()
    {
        // Auto-seed default sliders if table is empty
        if (Slider::count() === 0) {
            $this->seedInitialSliders();
        }

        // Auto-seed default pillars if table is empty
        if (Pillar::count() === 0) {
            (new PillarSeeder)->run();
        }

        // Auto-seed default why choose cards if table is empty
        if (WhyChooseCard::count() === 0) {
            (new WhyChooseCardSeeder)->run();
        }

        $sliders = Slider::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $pillars = Pillar::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $pillarSettings = [
            'eyebrow' => Setting::get('pillar_section_eyebrow', 'WHAT MAKES ADVAITA SPECIAL'),
            'title_1' => Setting::get('pillar_section_title_1', 'Three pillars that shape'),
            'title_2' => Setting::get('pillar_section_title_2', 'brighter futures.'),
            'subtitle' => Setting::get('pillar_section_subtitle', 'At Advaita, everything we do is driven by a clear purpose — to create an environment where children learn, grow, and discover their unique potential.'),
            'cta_text' => Setting::get('pillar_section_cta_text', 'Discover the Advaita Difference'),
            'cta_url' => Setting::get('pillar_section_cta_url', '#why-choose'),
        ];

        $whyChooseCards = WhyChooseCard::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $whyChooseSettings = [
            'eyebrow' => Setting::get('why_choose_eyebrow', 'WHY CHOOSE ADVAITA?'),
            'title_1' => Setting::get('why_choose_title_1', 'Why Choose'),
            'title_2' => Setting::get('why_choose_title_2', 'Advaita?'),
            'subtitle' => Setting::get('why_choose_subtitle', 'A nurturing and future-focused ecosystem designed to ignite curiosity, instill integrity, and inspire every child to excel.'),
            'cta_text' => Setting::get('why_choose_cta_text', 'Discover the Advaita Difference'),
            'cta_url' => Setting::get('why_choose_cta_url', '#admissions'),
        ];

        $campusVisit = [
            'badge' => Setting::get('campus_visit_badge', 'ADMISSIONS 2026–27 OPEN'),
            'title_1' => Setting::get('campus_visit_title_1', 'Come see the school'),
            'title_2' => Setting::get('campus_visit_title_2', 'yourself.'),
            'description' => Setting::get('campus_visit_description', 'Walk our campus, meet our faculty, experience our learning environment, and get all your questions answered — the best way to know if Advaita is the right home for your child.'),
            'cursive_tag' => Setting::get('campus_visit_cursive_tag', 'Experience it Yourself'),
            'image' => Setting::get('campus_visit_image', 'assets/images/campus-visit-visual.jpg'),
            'feat_1_title' => Setting::get('campus_visit_feat_1_title', 'Counsellors available'),
            'feat_1_sub' => Setting::get('campus_visit_feat_1_sub', 'Mon–Sat · 9 AM to 5 PM'),
            'feat_2_title' => Setting::get('campus_visit_feat_2_title', 'Hindi · English'),
            'feat_2_sub' => Setting::get('campus_visit_feat_2_sub', 'On-call & on-campus'),
            'feat_3_title' => Setting::get('campus_visit_feat_3_title', 'No obligation'),
            'feat_3_sub' => Setting::get('campus_visit_feat_3_sub', 'Just a friendly chat'),
            'btn_title' => Setting::get('campus_visit_btn_title', 'Book A Campus Visit'),
            'btn_sub' => Setting::get('campus_visit_btn_sub', 'Pick A Slot · Free'),
            'btn_url' => Setting::get('campus_visit_btn_url', '#contact'),
            'phone_label' => Setting::get('campus_visit_phone_label', 'TALK TO OUR COUNSELLOR'),
            'phone_number' => Setting::get('campus_visit_phone_number', '094130 62851'),
        ];

        $seo = [
            'title' => Setting::get('home_seo_title', 'Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)'),
            'description' => Setting::get('home_seo_description', 'Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs, holistic sports, and values-based learning from Pre-Primary to Class 10.'),
            'keywords' => Setting::get('home_seo_keywords', 'Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani, CBSE Affiliated School 1130920, Robotics Lab School, English Medium School Parbhani'),
        ];

        return view('pages.home', compact('sliders', 'pillars', 'pillarSettings', 'whyChooseCards', 'whyChooseSettings', 'campusVisit', 'seo'));
    }

    /**
     * Seed initial default hero sliders if none exist yet.
     */
    protected function seedInitialSliders(): void
    {
        Slider::create([
            'title_1' => 'Building Curious Minds.',
            'title_2' => 'Shaping Confident Futures.',
            'description' => 'Where knowledge meets values, creativity meets opportunity, and every child is encouraged to discover their true potential.',
            'image' => 'assets/images/hero-slider-campus.png',
            'order' => 1,
            'is_active' => true,
        ]);

        Slider::create([
            'title_1' => 'Nurturing Global Thinkers.',
            'title_2' => 'CBSE Accredited Excellence.',
            'description' => 'Empowering students through innovative STEAM labs, holistic sports academy, and world-class faculty dedicated to individualized growth.',
            'image' => 'assets/images/hero-slider-excellence-banner.png',
            'order' => 2,
            'is_active' => true,
        ]);
    }
}
