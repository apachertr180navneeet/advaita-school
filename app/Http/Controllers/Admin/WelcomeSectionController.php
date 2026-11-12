<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class WelcomeSectionController extends Controller
{
    /**
     * Display the About School / Welcome Section editor.
     */
    public function index(): View
    {
        $imagePath = Setting::get('welcome_image', 'assets/images/about-advaita-visual-clean.jpg?v=3');
        $imageSpecs = $this->resolveImageSpecs($imagePath);

        $settings = [
            'image' => $imagePath,
            'image_url' => $this->resolveImageUrl($imagePath),
            'image_size' => $imageSpecs['size'],
            'image_dimensions' => $imageSpecs['dimensions'],
            'image_tag' => Setting::get('welcome_image_tag', 'Excellence in Every Child'),

            'badge_title' => Setting::get('welcome_badge_title', 'Play Group'),
            'badge_sub' => Setting::get('welcome_badge_sub', 'CBSE Affiliation No. 1130920'),

            'eyebrow' => Setting::get('welcome_eyebrow', 'ABOUT OUR SCHOOL'),
            'heading_prefix' => Setting::get('welcome_heading_prefix', 'Welcome to'),
            'heading_brand' => Setting::get('welcome_heading_brand', 'Advaita School of Excellence'),
            'quote' => Setting::get('welcome_quote', 'At Advaita School of Excellence, we believe education is more than academic achievement. It is about developing confident, responsible and compassionate individuals who are prepared for the future.'),
            'description' => Setting::get('welcome_description', 'Established with a deep commitment to educational excellence, Advaita School of Excellence provides a seamless educational journey from Play Group onwards. We harmonize rigorous CBSE academic standards with experiential learning, cultural values, and modern 21st-century competencies.'),

            'feat_1_title' => Setting::get('welcome_feat_1_title', 'Academic Excellence'),
            'feat_1_sub' => Setting::get('welcome_feat_1_sub', 'Strong foundation for brighter futures'),
            'feat_1_icon' => Setting::get('welcome_feat_1_icon', 'fa-solid fa-book-open'),

            'feat_2_title' => Setting::get('welcome_feat_2_title', 'Holistic Development'),
            'feat_2_sub' => Setting::get('welcome_feat_2_sub', 'Nurturing mind, body and character'),
            'feat_2_icon' => Setting::get('welcome_feat_2_icon', 'fa-solid fa-user-group'),

            'feat_3_title' => Setting::get('welcome_feat_3_title', 'Safe & Supportive Campus'),
            'feat_3_sub' => Setting::get('welcome_feat_3_sub', 'A second home for every child'),
            'feat_3_icon' => Setting::get('welcome_feat_3_icon', 'fa-solid fa-shield-halved'),

            'feat_4_title' => Setting::get('welcome_feat_4_title', 'Future-Ready Learning'),
            'feat_4_sub' => Setting::get('welcome_feat_4_sub', 'Skills for a changing world'),
            'feat_4_icon' => Setting::get('welcome_feat_4_icon', 'fa-regular fa-lightbulb'),

            'btn_1_text' => Setting::get('welcome_btn_1_text', 'Know More About Us'),
            'btn_1_url' => Setting::get('welcome_btn_1_url', '#why-advaita'),
            'btn_2_text' => Setting::get('welcome_btn_2_text', 'Take a Campus Tour'),
            'btn_2_url' => Setting::get('welcome_btn_2_url', '#gallery'),
        ];

        return view('admin.welcome-section.index', compact('settings'));
    }

    /**
     * Update the About School / Welcome Section settings.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
            'image_tag' => ['nullable', 'string', 'max:100'],

            'badge_title' => ['required', 'string', 'max:100'],
            'badge_sub' => ['nullable', 'string', 'max:150'],

            'eyebrow' => ['nullable', 'string', 'max:100'],
            'heading_prefix' => ['required', 'string', 'max:100'],
            'heading_brand' => ['required', 'string', 'max:200'],
            'quote' => ['required', 'string'],
            'description' => ['required', 'string'],

            'feat_1_title' => ['required', 'string', 'max:100'],
            'feat_1_sub' => ['required', 'string', 'max:200'],
            'feat_1_icon' => ['nullable', 'string', 'max:80'],

            'feat_2_title' => ['required', 'string', 'max:100'],
            'feat_2_sub' => ['required', 'string', 'max:200'],
            'feat_2_icon' => ['nullable', 'string', 'max:80'],

            'feat_3_title' => ['required', 'string', 'max:100'],
            'feat_3_sub' => ['required', 'string', 'max:200'],
            'feat_3_icon' => ['nullable', 'string', 'max:80'],

            'feat_4_title' => ['required', 'string', 'max:100'],
            'feat_4_sub' => ['required', 'string', 'max:200'],
            'feat_4_icon' => ['nullable', 'string', 'max:80'],

            'btn_1_text' => ['nullable', 'string', 'max:100'],
            'btn_1_url' => ['nullable', 'string', 'max:255'],
            'btn_2_text' => ['nullable', 'string', 'max:100'],
            'btn_2_url' => ['nullable', 'string', 'max:255'],
        ]);

        Setting::set('welcome_image_tag', $validated['image_tag'] ?? 'Excellence in Every Child');
        Setting::set('welcome_badge_title', trim($validated['badge_title']));
        Setting::set('welcome_badge_sub', $validated['badge_sub'] ?? 'CBSE Affiliation No. 1130920');

        Setting::set('welcome_eyebrow', $validated['eyebrow'] ?? 'ABOUT OUR SCHOOL');
        Setting::set('welcome_heading_prefix', trim($validated['heading_prefix']));
        Setting::set('welcome_heading_brand', trim($validated['heading_brand']));
        Setting::set('welcome_quote', trim($validated['quote']));
        Setting::set('welcome_description', trim($validated['description']));

        Setting::set('welcome_feat_1_title', trim($validated['feat_1_title']));
        Setting::set('welcome_feat_1_sub', trim($validated['feat_1_sub']));
        Setting::set('welcome_feat_1_icon', $validated['feat_1_icon'] ?? 'fa-solid fa-book-open');

        Setting::set('welcome_feat_2_title', trim($validated['feat_2_title']));
        Setting::set('welcome_feat_2_sub', trim($validated['feat_2_sub']));
        Setting::set('welcome_feat_2_icon', $validated['feat_2_icon'] ?? 'fa-solid fa-user-group');

        Setting::set('welcome_feat_3_title', trim($validated['feat_3_title']));
        Setting::set('welcome_feat_3_sub', trim($validated['feat_3_sub']));
        Setting::set('welcome_feat_3_icon', $validated['feat_3_icon'] ?? 'fa-solid fa-shield-halved');

        Setting::set('welcome_feat_4_title', trim($validated['feat_4_title']));
        Setting::set('welcome_feat_4_sub', trim($validated['feat_4_sub']));
        Setting::set('welcome_feat_4_icon', $validated['feat_4_icon'] ?? 'fa-regular fa-lightbulb');

        Setting::set('welcome_btn_1_text', $validated['btn_1_text'] ?? 'Know More About Us');
        Setting::set('welcome_btn_1_url', $validated['btn_1_url'] ?? '#why-advaita');
        Setting::set('welcome_btn_2_text', $validated['btn_2_text'] ?? 'Take a Campus Tour');
        Setting::set('welcome_btn_2_url', $validated['btn_2_url'] ?? '#gallery');

        // Handle image upload
        if ($request->hasFile('image')) {
            $oldImage = Setting::get('welcome_image');
            if ($oldImage && ! str_starts_with($oldImage, 'assets/')) {
                Storage::disk('public')->delete($oldImage);
            }

            $uploadedPath = $request->file('image')->store('welcome-section', 'public');
            Setting::set('welcome_image', $uploadedPath);
        }

        return redirect()->route('admin.welcome-section.index')->with('success', 'About School / Welcome Section updated successfully!');
    }

    /**
     * Resolve full web URL for section image.
     */
    protected function resolveImageUrl(?string $image): string
    {
        if (empty($image)) {
            return asset('assets/images/about-advaita-visual-clean.jpg?v=3');
        }

        if (str_starts_with($image, 'http://') || str_starts_with($image, 'https://')) {
            return $image;
        }

        if (str_starts_with($image, 'assets/')) {
            return asset($image);
        }

        return asset('storage/'.ltrim($image, '/'));
    }

    /**
     * Compute disk file size & image pixel dimensions.
     *
     * @return array{size: ?string, dimensions: ?string}
     */
    protected function resolveImageSpecs(?string $image): array
    {
        $realPath = null;

        if (! empty($image)) {
            if (str_starts_with($image, 'assets/')) {
                $candidate = public_path(explode('?', $image)[0]);
                if (file_exists($candidate)) {
                    $realPath = $candidate;
                }
            } elseif (Storage::disk('public')->exists($image)) {
                $realPath = Storage::disk('public')->path($image);
            } else {
                $direct = public_path('storage/'.ltrim($image, '/'));
                if (file_exists($direct)) {
                    $realPath = $direct;
                }
            }
        }

        $size = null;
        $dimensions = null;

        if ($realPath && file_exists($realPath)) {
            $bytes = filesize($realPath);
            if ($bytes > 0) {
                $units = ['B', 'KB', 'MB'];
                $pow = floor(log($bytes, 1024));
                $pow = min((int) $pow, count($units) - 1);
                $size = round($bytes / (1024 ** $pow), 1).' '.$units[$pow];
            }

            $info = @getimagesize($realPath);
            if ($info && isset($info[0], $info[1])) {
                $dimensions = "{$info[0]} × {$info[1]} px";
            }
        }

        return [
            'size' => $size ?? 'Default Asset',
            'dimensions' => $dimensions ?? 'Optimized',
        ];
    }
}

