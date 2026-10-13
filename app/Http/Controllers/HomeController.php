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
            'image_on_image' => 'assets/images/contact-student-pointing-transparent.png',
            'order' => 1,
            'is_active' => true,
        ]);

        Slider::create([
            'title_1' => 'Nurturing Global Thinkers.',
            'title_2' => 'CBSE Accredited Excellence.',
            'description' => 'Empowering students through innovative STEAM labs, holistic sports academy, and world-class faculty dedicated to individualized growth.',
            'image' => 'assets/images/hero-slider-excellence-banner.png',
            'image_on_image' => 'assets/images/about-cta-students-trio.png',
            'order' => 2,
            'is_active' => true,
        ]);
    }
}
