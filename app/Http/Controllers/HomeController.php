<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\GalleryItem;
use App\Models\Pillar;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\WhyChooseCard;
use Database\Seeders\FaqSeeder;
use Database\Seeders\GalleryItemSeeder;
use Database\Seeders\PillarSeeder;
use Database\Seeders\TestimonialSeeder;
use Database\Seeders\WhyChooseCardSeeder;

class HomeController extends Controller
{
    /**
     * Display the Homepage with dynamic hero sliders, three pillars, why choose cards, gallery, testimonials, and FAQs.
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

        // Auto-seed default gallery items if table is empty
        if (GalleryItem::count() === 0) {
            (new GalleryItemSeeder)->run();
        }

        // Auto-seed default testimonials if table is empty
        if (Testimonial::count() === 0) {
            (new TestimonialSeeder)->run();
        }

        // Auto-seed default FAQs if table is empty
        if (Faq::count() === 0) {
            (new FaqSeeder)->run();
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

        $galleryItems = GalleryItem::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $gallerySettings = [
            'eyebrow' => Setting::get('gallery_eyebrow', 'CAMPUS GALLERY'),
            'title_1' => Setting::get('gallery_title_1', 'A day at Advaita,'),
            'title_2' => Setting::get('gallery_title_2', 'in pictures.'),
            'subtitle' => Setting::get('gallery_subtitle', 'Glimpses from morning assembly, classrooms, labs, sports, celebrations and everything in between — the rhythm of life at our campus.'),
            'btn_1_text' => Setting::get('gallery_btn_1_text', 'Explore Photo Gallery'),
            'btn_1_url' => Setting::get('gallery_btn_1_url', route('gallery')),
            'btn_2_text' => Setting::get('gallery_btn_2_text', 'Watch Campus Highlights'),
            'btn_2_url' => Setting::get('gallery_btn_2_url', '#hero'),
        ];

        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $testimonialSettings = [
            'eyebrow' => Setting::get('testimonials_eyebrow', 'TESTIMONIALS'),
            'title_1' => Setting::get('testimonials_title_1', 'Voices That'),
            'title_2' => Setting::get('testimonials_title_2', 'Inspire Us'),
            'subtitle' => Setting::get('testimonials_subtitle', 'Here’s what our parents have to say about their journey with Advaita.'),
        ];

        $faqs = Faq::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $faqSettings = [
            'eyebrow' => Setting::get('faq_eyebrow', 'FAQ'),
            'title_1' => Setting::get('faq_title_1', 'Frequently Asked'),
            'title_2' => Setting::get('faq_title_2', 'Questions'),
            'subtitle' => Setting::get('faq_subtitle', "Find quick answers to common questions about admissions, academics,\ncampus life, and more at Advaita."),
        ];

        $seo = [
            'title' => Setting::get('home_seo_title', 'Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)'),
            'description' => Setting::get('home_seo_description', 'Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs, holistic sports, and values-based learning from Pre-Primary to Class 10.'),
            'keywords' => Setting::get('home_seo_keywords', 'Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani, CBSE Affiliated School 1130920, Robotics Lab School, English Medium School Parbhani'),
        ];

        return view('pages.home', compact(
            'sliders',
            'pillars',
            'pillarSettings',
            'whyChooseCards',
            'whyChooseSettings',
            'campusVisit',
            'galleryItems',
            'gallerySettings',
            'testimonials',
            'testimonialSettings',
            'faqs',
            'faqSettings',
            'seo'
        ));
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
            'btn_1_text' => 'Apply for Admission',
            'btn_1_url' => '#admissions',
            'btn_2_text' => 'Explore Our School',
            'btn_2_url' => '#about',
            'image' => 'assets/images/hero-slider-campus.png',
            'order' => 1,
            'is_active' => true,
        ]);

        Slider::create([
            'title_1' => 'Nurturing Global Thinkers.',
            'title_2' => 'CBSE Accredited Excellence.',
            'description' => 'Empowering students through innovative STEAM labs, holistic sports academy, and world-class faculty dedicated to individualized growth.',
            'btn_1_text' => 'Apply for Admission',
            'btn_1_url' => '#admissions',
            'btn_2_text' => 'Explore Our School',
            'btn_2_url' => '#about',
            'image' => 'assets/images/hero-slider-excellence-banner.png',
            'order' => 2,
            'is_active' => true,
        ]);

        Slider::create([
            'title_1' => 'Empowering Young Leaders.',
            'title_2' => 'Holistic Values & Character.',
            'description' => 'Fostering innovation through robotics, sports excellence, and creative arts from Pre-Primary to Class 10.',
            'btn_1_text' => 'Apply for Admission',
            'btn_1_url' => '#admissions',
            'btn_2_text' => 'Explore Our School',
            'btn_2_url' => '#about',
            'image' => 'assets/images/about-advaita-banner.jpg',
            'order' => 3,
            'is_active' => true,
        ]);
    }
}
