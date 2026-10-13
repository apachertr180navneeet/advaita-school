<?php

namespace App\Http\Controllers;

use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Display the Homepage with dynamic hero sliders.
     */
    public function index()
    {
        // Auto-seed default sliders if table is empty
        if (Slider::count() === 0) {
            $this->seedInitialSliders();
        }

        $sliders = Slider::where('is_active', true)
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        return view('pages.home', compact('sliders'));
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
            'image_width' => 1024,
            'image_height' => 373,
            'image_size' => '712 KB',
            'overlay_image' => 'assets/images/contact-student-pointing-transparent.png',
            'overlay_image_width' => 1024,
            'overlay_image_height' => 768,
            'overlay_image_size' => '540 KB',
            'button_1_text' => 'Apply for Admission',
            'button_1_url' => '#admissions',
            'button_2_text' => 'Explore Our School',
            'button_2_url' => '#about',
            'badge_text' => 'Excellence. In Every Child',
            'order' => 1,
            'is_active' => true,
        ]);

        Slider::create([
            'title_1' => 'Nurturing Global Thinkers.',
            'title_2' => 'CBSE Accredited Excellence.',
            'description' => 'Empowering students through innovative STEAM labs, holistic sports academy, and world-class faculty dedicated to individualized growth.',
            'image' => 'assets/images/hero-slider-excellence-banner.png',
            'image_width' => 1659,
            'image_height' => 948,
            'image_size' => '1.2 MB',
            'overlay_image' => 'assets/images/about-cta-students-trio.png',
            'overlay_image_width' => 1024,
            'overlay_image_height' => 682,
            'overlay_image_size' => '680 KB',
            'button_1_text' => 'Admissions 2026-27',
            'button_1_url' => '/online-registration',
            'button_2_text' => 'View CBSE Results',
            'button_2_url' => '/results',
            'badge_text' => '100% CBSE Pass Record',
            'order' => 2,
            'is_active' => true,
        ]);
    }
}
