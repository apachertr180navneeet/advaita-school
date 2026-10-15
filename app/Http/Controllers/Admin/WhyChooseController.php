<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\WhyChooseCard;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class WhyChooseController extends Controller
{
    /**
     * Display a listing of the Why Choose Advaita cards and section settings.
     */
    public function index(): View
    {
        $cards = WhyChooseCard::orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $sectionSettings = [
            'eyebrow' => Setting::get('why_choose_eyebrow', 'WHY CHOOSE ADVAITA?'),
            'title_1' => Setting::get('why_choose_title_1', 'Why Choose'),
            'title_2' => Setting::get('why_choose_title_2', 'Advaita?'),
            'subtitle' => Setting::get('why_choose_subtitle', 'A nurturing and future-focused ecosystem designed to ignite curiosity, instill integrity, and inspire every child to excel.'),
            'cta_text' => Setting::get('why_choose_cta_text', 'Discover the Advaita Difference'),
            'cta_url' => Setting::get('why_choose_cta_url', '#admissions'),
        ];

        return view('admin.why-choose.index', compact('cards', 'sectionSettings'));
    }

    /**
     * Show the dedicated form for editing the Why Choose section heading & settings.
     */
    public function editSectionHeader(): View
    {
        $sectionSettings = [
            'eyebrow' => Setting::get('why_choose_eyebrow', 'WHY CHOOSE ADVAITA?'),
            'title_1' => Setting::get('why_choose_title_1', 'Why Choose'),
            'title_2' => Setting::get('why_choose_title_2', 'Advaita?'),
            'subtitle' => Setting::get('why_choose_subtitle', 'A nurturing and future-focused ecosystem designed to ignite curiosity, instill integrity, and inspire every child to excel.'),
            'cta_text' => Setting::get('why_choose_cta_text', 'Discover the Advaita Difference'),
            'cta_url' => Setting::get('why_choose_cta_url', '#admissions'),
        ];

        return view('admin.why-choose.header', compact('sectionSettings'));
    }

    /**
     * Update the section heading, subtitle, and CTA button text.
     */
    public function updateSectionHeader(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'eyebrow' => ['required', 'string', 'max:150'],
            'title_1' => ['required', 'string', 'max:255'],
            'title_2' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string'],
            'cta_text' => ['nullable', 'string', 'max:100'],
            'cta_url' => ['nullable', 'string', 'max:255'],
        ]);

        Setting::set('why_choose_eyebrow', $validated['eyebrow']);
        Setting::set('why_choose_title_1', $validated['title_1']);
        Setting::set('why_choose_title_2', $validated['title_2'] ?? null);
        Setting::set('why_choose_subtitle', $validated['subtitle'] ?? null);
        Setting::set('why_choose_cta_text', $validated['cta_text'] ?? 'Discover the Advaita Difference');
        Setting::set('why_choose_cta_url', $validated['cta_url'] ?? '#admissions');

        return redirect()->route('admin.why-choose.index')->with('success', 'Why Choose Advaita section heading updated successfully!');
    }

    /**
     * Show the form for creating a new card.
     */
    public function create(): View
    {
        $themeColors = WhyChooseCard::THEME_COLORS;
        $nextOrder = (WhyChooseCard::max('order') ?? 0) + 1;
        $nextBadge = sprintf('%02d', $nextOrder);

        return view('admin.why-choose.create', compact('themeColors', 'nextOrder', 'nextBadge'));
    }

    /**
     * Store a newly created card in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'badge_number' => ['nullable', 'string', 'max:10'],
            'theme_color' => ['required', 'string', 'in:'.implode(',', array_keys(WhyChooseCard::THEME_COLORS))],
            'order' => ['nullable', 'integer', 'min:1'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:4096'],
            'is_active' => ['nullable'],
        ]);

        $imagePath = $request->file('image')->store('why-choose', 'public');

        WhyChooseCard::create([
            'title' => trim($validated['title']),
            'description' => trim($validated['description']),
            'badge_number' => ! empty($validated['badge_number']) ? trim($validated['badge_number']) : sprintf('%02d', $validated['order'] ?? 1),
            'theme_color' => $validated['theme_color'],
            'order' => $validated['order'] ?? ((WhyChooseCard::max('order') ?? 0) + 1),
            'image' => $imagePath,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.why-choose.index')->with('success', 'New advantage card added successfully!');
    }

    /**
     * Show the form for editing the specified card.
     */
    public function edit(WhyChooseCard $whyChooseCard): View
    {
        $themeColors = WhyChooseCard::THEME_COLORS;

        return view('admin.why-choose.edit', [
            'card' => $whyChooseCard,
            'themeColors' => $themeColors,
        ]);
    }

    /**
     * Update the specified card in storage.
     */
    public function update(Request $request, WhyChooseCard $whyChooseCard): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'badge_number' => ['nullable', 'string', 'max:10'],
            'theme_color' => ['required', 'string', 'in:'.implode(',', array_keys(WhyChooseCard::THEME_COLORS))],
            'order' => ['nullable', 'integer', 'min:1'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:4096'],
            'is_active' => ['nullable'],
        ]);

        $data = [
            'title' => trim($validated['title']),
            'description' => trim($validated['description']),
            'badge_number' => ! empty($validated['badge_number']) ? trim($validated['badge_number']) : sprintf('%02d', $validated['order'] ?? 1),
            'theme_color' => $validated['theme_color'],
            'order' => $validated['order'] ?? $whyChooseCard->order,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            // Delete old uploaded image if stored on the public disk
            if ($whyChooseCard->image && ! str_starts_with($whyChooseCard->image, 'assets/')) {
                Storage::disk('public')->delete($whyChooseCard->image);
            }

            $data['image'] = $request->file('image')->store('why-choose', 'public');
        }

        $whyChooseCard->update($data);

        return redirect()->route('admin.why-choose.index')->with('success', 'Card updated successfully!');
    }

    /**
     * Remove the specified card from storage.
     */
    public function destroy(WhyChooseCard $whyChooseCard): RedirectResponse
    {
        if ($whyChooseCard->image && ! str_starts_with($whyChooseCard->image, 'assets/')) {
            Storage::disk('public')->delete($whyChooseCard->image);
        }

        $whyChooseCard->delete();

        return redirect()->route('admin.why-choose.index')->with('success', 'Card deleted successfully!');
    }

    /**
     * Toggle the active status of the specified card.
     */
    public function toggleStatus(WhyChooseCard $whyChooseCard): RedirectResponse
    {
        $whyChooseCard->update([
            'is_active' => ! $whyChooseCard->is_active,
        ]);

        $statusText = $whyChooseCard->is_active ? 'activated' : 'deactivated';

        return redirect()->route('admin.why-choose.index')->with('success', "Card '{$whyChooseCard->title}' {$statusText} successfully!");
    }
}
