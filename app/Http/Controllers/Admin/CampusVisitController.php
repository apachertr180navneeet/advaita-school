<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CampusVisitController extends Controller
{
    /**
     * Display the Campus Visit & Admissions CTA banner editor.
     */
    public function index(): View
    {
        $imagePath = Setting::get('campus_visit_image', 'assets/images/campus-visit-visual.jpg');
        $imageSpecs = $this->resolveImageSpecs($imagePath);

        $settings = [
            'badge' => Setting::get('campus_visit_badge', 'ADMISSIONS 2026–27 OPEN'),
            'title_1' => Setting::get('campus_visit_title_1', 'Come see the school'),
            'title_2' => Setting::get('campus_visit_title_2', 'yourself.'),
            'description' => Setting::get('campus_visit_description', 'Walk our campus, meet our faculty, experience our learning environment, and get all your questions answered — the best way to know if Advaita is the right home for your child.'),
            'cursive_tag' => Setting::get('campus_visit_cursive_tag', 'Experience it Yourself'),
            'image' => $imagePath,
            'image_url' => $this->resolveImageUrl($imagePath),
            'image_size' => $imageSpecs['size'],
            'image_dimensions' => $imageSpecs['dimensions'],

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

        return view('admin.campus-visit.index', compact('settings'));
    }

    /**
     * Update the Campus Visit & Admissions CTA banner settings.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'badge' => ['nullable', 'string', 'max:150'],
            'title_1' => ['required', 'string', 'max:255'],
            'title_2' => ['nullable', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'cursive_tag' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],

            'feat_1_title' => ['nullable', 'string', 'max:100'],
            'feat_1_sub' => ['nullable', 'string', 'max:150'],

            'feat_2_title' => ['nullable', 'string', 'max:100'],
            'feat_2_sub' => ['nullable', 'string', 'max:150'],

            'feat_3_title' => ['nullable', 'string', 'max:100'],
            'feat_3_sub' => ['nullable', 'string', 'max:150'],

            'btn_title' => ['nullable', 'string', 'max:100'],
            'btn_sub' => ['nullable', 'string', 'max:100'],
            'btn_url' => ['nullable', 'string', 'max:255'],

            'phone_label' => ['nullable', 'string', 'max:100'],
            'phone_number' => ['nullable', 'string', 'max:50'],
        ]);

        Setting::set('campus_visit_badge', $validated['badge'] ?? 'ADMISSIONS 2026–27 OPEN');
        Setting::set('campus_visit_title_1', trim($validated['title_1']));
        Setting::set('campus_visit_title_2', ! empty($validated['title_2']) ? trim($validated['title_2']) : null);
        Setting::set('campus_visit_description', trim($validated['description']));
        Setting::set('campus_visit_cursive_tag', ! empty($validated['cursive_tag']) ? trim($validated['cursive_tag']) : null);

        Setting::set('campus_visit_feat_1_title', $validated['feat_1_title'] ?? 'Counsellors available');
        Setting::set('campus_visit_feat_1_sub', $validated['feat_1_sub'] ?? 'Mon–Sat · 9 AM to 5 PM');

        Setting::set('campus_visit_feat_2_title', $validated['feat_2_title'] ?? 'Hindi · English');
        Setting::set('campus_visit_feat_2_sub', $validated['feat_2_sub'] ?? 'On-call & on-campus');

        Setting::set('campus_visit_feat_3_title', $validated['feat_3_title'] ?? 'No obligation');
        Setting::set('campus_visit_feat_3_sub', $validated['feat_3_sub'] ?? 'Just a friendly chat');

        Setting::set('campus_visit_btn_title', $validated['btn_title'] ?? 'Book A Campus Visit');
        Setting::set('campus_visit_btn_sub', $validated['btn_sub'] ?? 'Pick A Slot · Free');
        Setting::set('campus_visit_btn_url', $validated['btn_url'] ?? '#contact');

        Setting::set('campus_visit_phone_label', $validated['phone_label'] ?? 'TALK TO OUR COUNSELLOR');
        Setting::set('campus_visit_phone_number', $validated['phone_number'] ?? '094130 62851');

        // Handle image file upload
        if ($request->hasFile('image')) {
            $oldImage = Setting::get('campus_visit_image');
            if ($oldImage && ! str_starts_with($oldImage, 'assets/')) {
                Storage::disk('public')->delete($oldImage);
            }

            $uploadedPath = $request->file('image')->store('campus-visit', 'public');
            Setting::set('campus_visit_image', $uploadedPath);
        }

        return redirect()->route('admin.campus-visit.index')->with('success', 'Campus Visit & Admissions banner updated successfully!');
    }

    /**
     * Resolve full web URL for banner image.
     */
    protected function resolveImageUrl(?string $image): string
    {
        if (empty($image)) {
            return asset('assets/images/campus-visit-visual.jpg');
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
                $candidate = public_path($image);
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
            'size' => $size ?? 'Optimized',
            'dimensions' => $dimensions ?? 'Standard (1200 × 750 px)',
        ];
    }
}
