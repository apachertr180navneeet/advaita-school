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
     * Display the SEO management settings.
     */
    public function index(): View
    {
        $seoSettings = [
            'home_seo_title' => Setting::get('home_seo_title', 'Advaita School of Excellence, Parbhani · CBSE Affiliated (No. 1130920)'),
            'home_seo_description' => Setting::get('home_seo_description', 'Advaita School of Excellence, Parbhani - CBSE Affiliated English Medium School (No. 1130920). Offering future-ready education, modern robotics & science labs, holistic sports, and values-based learning from Pre-Primary to Class 10.'),
            'home_seo_keywords' => Setting::get('home_seo_keywords', 'Advaita School of Excellence, Parbhani School, CBSE School Parbhani, Best School in Parbhani, CBSE Affiliated School 1130920, Robotics Lab School, English Medium School Parbhani'),
        ];

        return view('admin.seo.index', compact('seoSettings'));
    }

    /**
     * Update the homepage SEO settings.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'home_seo_title' => ['required', 'string', 'max:255'],
            'home_seo_description' => ['required', 'string', 'max:1000'],
            'home_seo_keywords' => ['nullable', 'string', 'max:1000'],
        ]);

        Setting::set('home_seo_title', trim($validated['home_seo_title']));
        Setting::set('home_seo_description', trim($validated['home_seo_description']));
        Setting::set('home_seo_keywords', $validated['home_seo_keywords'] ? trim($validated['home_seo_keywords']) : null);

        return redirect()->route('admin.seo.index')->with('success', 'Homepage SEO settings updated successfully!');
    }
}
