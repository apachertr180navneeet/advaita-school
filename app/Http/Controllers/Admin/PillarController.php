<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pillar;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PillarController extends Controller
{
    /**
     * Display a listing of the pillars and section settings.
     */
    public function index()
    {
        $pillars = Pillar::orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $sectionSettings = [
            'eyebrow' => Setting::get('pillar_section_eyebrow', 'WHAT MAKES ADVAITA SPECIAL'),
            'title_1' => Setting::get('pillar_section_title_1', 'Three pillars that shape'),
            'title_2' => Setting::get('pillar_section_title_2', 'brighter futures.'),
            'subtitle' => Setting::get('pillar_section_subtitle', 'At Advaita, everything we do is driven by a clear purpose — to create an environment where children learn, grow, and discover their unique potential.'),
            'cta_text' => Setting::get('pillar_section_cta_text', 'Discover the Advaita Difference'),
            'cta_url' => Setting::get('pillar_section_cta_url', '#why-choose'),
        ];

        return view('admin.pillars.index', compact('pillars', 'sectionSettings'));
    }

    /**
     * Update the section heading & subtitle text.
     */
    public function updateSectionHeader(Request $request)
    {
        $validated = $request->validate([
            'eyebrow' => ['required', 'string', 'max:150'],
            'title_1' => ['required', 'string', 'max:255'],
            'title_2' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string'],
            'cta_text' => ['nullable', 'string', 'max:100'],
            'cta_url' => ['nullable', 'string', 'max:255'],
        ]);

        Setting::set('pillar_section_eyebrow', $validated['eyebrow']);
        Setting::set('pillar_section_title_1', $validated['title_1']);
        Setting::set('pillar_section_title_2', $validated['title_2'] ?? null);
        Setting::set('pillar_section_subtitle', $validated['subtitle'] ?? null);
        Setting::set('pillar_section_cta_text', $validated['cta_text'] ?? 'Discover the Advaita Difference');
        Setting::set('pillar_section_cta_url', $validated['cta_url'] ?? '#why-choose');

        return redirect()->route('admin.pillars.index')->with('success', 'Section heading and content updated successfully!');
    }

    /**
     * Show the form for creating a new pillar card.
     */
    public function create()
    {
        $nextOrder = (Pillar::max('order') ?? 0) + 1;
        $suggestedBadge = sprintf('%02d', $nextOrder);

        return view('admin.pillars.create', compact('nextOrder', 'suggestedBadge'));
    }

    /**
     * Store a newly created pillar card.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'badge_number' => ['nullable', 'string', 'max:20'],
            'theme_color' => ['required', 'in:orange,blue,teal'],
            'description' => ['nullable', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'tag_labels' => ['nullable', 'array'],
            'tag_labels.*' => ['nullable', 'string', 'max:100'],
            'tag_icons' => ['nullable', 'array'],
            'tag_icons.*' => ['nullable', 'string', 'max:100'],
        ]);

        $order = $validated['order'] ?? ((Pillar::max('order') ?? 0) + 1);
        $badgeNumber = ! empty($validated['badge_number']) ? $validated['badge_number'] : sprintf('%02d', $order);

        // Process image
        $imagePath = $request->file('image')->store('pillars', 'public');

        // Process tags
        $tags = $this->parseTagsFromRequest($request);

        Pillar::create([
            'title' => $validated['title'],
            'badge_number' => $badgeNumber,
            'theme_color' => $validated['theme_color'],
            'description' => $validated['description'] ?? null,
            'image' => $imagePath,
            'order' => $order,
            'tags' => $tags,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.pillars.index')->with('success', 'Pillar card created successfully!');
    }

    /**
     * Show the form for editing the specified pillar.
     */
    public function edit(int $id)
    {
        $pillar = Pillar::findOrFail($id);

        return view('admin.pillars.edit', compact('pillar'));
    }

    /**
     * Update the specified pillar.
     */
    public function update(Request $request, int $id)
    {
        $pillar = Pillar::findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'badge_number' => ['nullable', 'string', 'max:20'],
            'theme_color' => ['required', 'in:orange,blue,teal'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'tag_labels' => ['nullable', 'array'],
            'tag_labels.*' => ['nullable', 'string', 'max:100'],
            'tag_icons' => ['nullable', 'array'],
            'tag_icons.*' => ['nullable', 'string', 'max:100'],
        ]);

        $pillar->title = $validated['title'];
        $pillar->badge_number = ! empty($validated['badge_number']) ? $validated['badge_number'] : sprintf('%02d', $pillar->order);
        $pillar->theme_color = $validated['theme_color'];
        $pillar->description = $validated['description'] ?? null;
        $pillar->order = $validated['order'] ?? $pillar->order;
        $pillar->is_active = $request->boolean('is_active');
        $pillar->tags = $this->parseTagsFromRequest($request);

        // Handle image replacement
        if ($request->hasFile('image')) {
            if ($pillar->image && ! str_starts_with($pillar->image, 'assets/')) {
                Storage::disk('public')->delete($pillar->image);
            }

            $pillar->image = $request->file('image')->store('pillars', 'public');
        }

        $pillar->save();

        return redirect()->route('admin.pillars.index')->with('success', 'Pillar card updated successfully!');
    }

    /**
     * Remove the specified pillar from storage.
     */
    public function destroy(int $id)
    {
        $pillar = Pillar::findOrFail($id);

        if ($pillar->image && ! str_starts_with($pillar->image, 'assets/')) {
            Storage::disk('public')->delete($pillar->image);
        }

        $pillar->delete();

        return redirect()->route('admin.pillars.index')->with('success', 'Pillar card deleted successfully.');
    }

    /**
     * Toggle the active status of the specified pillar.
     */
    public function toggleStatus(int $id)
    {
        $pillar = Pillar::findOrFail($id);
        $pillar->is_active = ! $pillar->is_active;
        $pillar->save();

        $statusLabel = $pillar->is_active ? 'activated' : 'hidden';

        return redirect()->route('admin.pillars.index')->with('success', "Pillar '{$pillar->title}' has been {$statusLabel}.");
    }

    /**
     * Helper to parse tags from form inputs.
     */
    protected function parseTagsFromRequest(Request $request): array
    {
        $labels = $request->input('tag_labels', []);
        $icons = $request->input('tag_icons', []);
        $tags = [];

        if (is_array($labels)) {
            foreach ($labels as $index => $label) {
                $trimmedLabel = trim((string) $label);
                if ($trimmedLabel !== '') {
                    $icon = trim((string) ($icons[$index] ?? 'fa-solid fa-check'));
                    $tags[] = [
                        'label' => $trimmedLabel,
                        'icon' => $icon ?: 'fa-solid fa-check',
                    ];
                }
            }
        }

        return $tags;
    }
}
