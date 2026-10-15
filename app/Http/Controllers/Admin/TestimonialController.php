<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    /**
     * Display a listing of testimonials and section settings.
     */
    public function index(): View
    {
        $testimonials = Testimonial::orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $sectionSettings = [
            'eyebrow' => Setting::get('testimonials_eyebrow', 'TESTIMONIALS'),
            'title_1' => Setting::get('testimonials_title_1', 'Voices That'),
            'title_2' => Setting::get('testimonials_title_2', 'Inspire Us'),
            'subtitle' => Setting::get('testimonials_subtitle', 'Here’s what our parents have to say about their journey with Advaita.'),
        ];

        return view('admin.testimonials.index', compact('testimonials', 'sectionSettings'));
    }

    /**
     * Show dedicated form for editing testimonials section header.
     */
    public function editSectionHeader(): View
    {
        $sectionSettings = [
            'eyebrow' => Setting::get('testimonials_eyebrow', 'TESTIMONIALS'),
            'title_1' => Setting::get('testimonials_title_1', 'Voices That'),
            'title_2' => Setting::get('testimonials_title_2', 'Inspire Us'),
            'subtitle' => Setting::get('testimonials_subtitle', 'Here’s what our parents have to say about their journey with Advaita.'),
        ];

        return view('admin.testimonials.header', compact('sectionSettings'));
    }

    /**
     * Update section header settings.
     */
    public function updateSectionHeader(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'eyebrow' => ['required', 'string', 'max:150'],
            'title_1' => ['required', 'string', 'max:255'],
            'title_2' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string'],
        ]);

        Setting::set('testimonials_eyebrow', $validated['eyebrow']);
        Setting::set('testimonials_title_1', $validated['title_1']);
        Setting::set('testimonials_title_2', $validated['title_2'] ?? null);
        Setting::set('testimonials_subtitle', $validated['subtitle'] ?? null);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonials section settings updated successfully!');
    }

    /**
     * Show form for creating a new testimonial.
     */
    public function create(): View
    {
        $nextOrder = (Testimonial::max('order') ?? 0) + 1;

        return view('admin.testimonials.create', compact('nextOrder'));
    }

    /**
     * Store a newly created testimonial.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'parent_name' => ['required', 'string', 'max:255'],
            'child_info' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'theme_color' => ['required', 'in:orange,blue'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('testimonials', 'public');
        }

        Testimonial::create([
            'parent_name' => $validated['parent_name'],
            'child_info' => $validated['child_info'] ?? null,
            'content' => $validated['content'],
            'rating' => $validated['rating'],
            'theme_color' => $validated['theme_color'],
            'avatar' => $avatarPath,
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Parent testimonial added successfully!');
    }

    /**
     * Show form for editing a testimonial.
     */
    public function edit(Testimonial $testimonial): View
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update an existing testimonial.
     */
    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $validated = $request->validate([
            'parent_name' => ['required', 'string', 'max:255'],
            'child_info' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'theme_color' => ['required', 'in:orange,blue'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
        ]);

        $updateData = [
            'parent_name' => $validated['parent_name'],
            'child_info' => $validated['child_info'] ?? null,
            'content' => $validated['content'],
            'rating' => $validated['rating'],
            'theme_color' => $validated['theme_color'],
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ];

        if ($request->hasFile('avatar')) {
            if ($testimonial->avatar && ! str_starts_with($testimonial->avatar, 'assets/')) {
                Storage::disk('public')->delete($testimonial->avatar);
            }
            $updateData['avatar'] = $request->file('avatar')->store('testimonials', 'public');
        }

        $testimonial->update($updateData);

        return redirect()->route('admin.testimonials.index')->with('success', 'Parent testimonial updated successfully!');
    }

    /**
     * Remove the testimonial.
     */
    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        if ($testimonial->avatar && ! str_starts_with($testimonial->avatar, 'assets/')) {
            Storage::disk('public')->delete($testimonial->avatar);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }

    /**
     * Toggle active state.
     */
    public function toggle(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->update(['is_active' => ! $testimonial->is_active]);
        $status = $testimonial->is_active ? 'activated' : 'deactivated';

        return redirect()->route('admin.testimonials.index')->with('success', "Testimonial {$status} successfully!");
    }
}
