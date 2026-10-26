<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicProgramme;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AcademicProgrammeController extends Controller
{
    /**
     * Display a listing of academic programmes.
     */
    public function index(Request $request): View
    {
        $selectedStage = $request->query('stage');

        $query = AcademicProgramme::orderBy('stage')
            ->orderBy('order', 'asc')
            ->orderBy('id', 'asc');

        if (! empty($selectedStage) && in_array($selectedStage, ['pre_primary', 'primary', 'secondary'], true)) {
            $query->where('stage', $selectedStage);
        }

        $programmes = $query->get();
        $stages = AcademicProgramme::STAGES;

        return view('admin.academic-programmes.index', compact('programmes', 'stages', 'selectedStage'));
    }

    /**
     * Show form for creating a new programme.
     */
    public function create(): View
    {
        $stages = AcademicProgramme::STAGES;
        $nextOrder = (AcademicProgramme::max('order') ?? 0) + 1;

        return view('admin.academic-programmes.create', compact('stages', 'nextOrder'));
    }

    /**
     * Store a newly created academic programme.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'stage' => ['required', 'string', 'in:pre_primary,primary,secondary'],
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'classes' => ['nullable', 'string', 'max:150'],
            'badge_text' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'features_text' => ['nullable', 'string'],
            'subjects_text' => ['nullable', 'string'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
        ]);

        $features = ! empty($validated['features_text'])
            ? array_values(array_filter(array_map('trim', explode("\n", $validated['features_text']))))
            : [];

        $subjects = ! empty($validated['subjects_text'])
            ? array_values(array_filter(array_map('trim', explode("\n", $validated['subjects_text']))))
            : [];

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('academics', 'public');
        }

        AcademicProgramme::create([
            'stage' => $validated['stage'],
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'] ?? null,
            'classes' => $validated['classes'] ?? null,
            'badge_text' => $validated['badge_text'] ?? null,
            'description' => $validated['description'] ?? null,
            'features' => $features,
            'subjects' => $subjects,
            'image' => $imagePath,
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.academic-programmes.index')->with('success', 'Academic programme created successfully!');
    }

    /**
     * Show form for editing an academic programme.
     */
    public function edit(AcademicProgramme $academicProgramme): View
    {
        $stages = AcademicProgramme::STAGES;

        return view('admin.academic-programmes.edit', [
            'programme' => $academicProgramme,
            'stages' => $stages,
        ]);
    }

    /**
     * Update an academic programme.
     */
    public function update(Request $request, AcademicProgramme $academicProgramme): RedirectResponse
    {
        $validated = $request->validate([
            'stage' => ['required', 'string', 'in:pre_primary,primary,secondary'],
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'classes' => ['nullable', 'string', 'max:150'],
            'badge_text' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'features_text' => ['nullable', 'string'],
            'subjects_text' => ['nullable', 'string'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
        ]);

        $features = ! empty($validated['features_text'])
            ? array_values(array_filter(array_map('trim', explode("\n", $validated['features_text']))))
            : [];

        $subjects = ! empty($validated['subjects_text'])
            ? array_values(array_filter(array_map('trim', explode("\n", $validated['subjects_text']))))
            : [];

        $updateData = [
            'stage' => $validated['stage'],
            'title' => $validated['title'],
            'subtitle' => $validated['subtitle'] ?? null,
            'classes' => $validated['classes'] ?? null,
            'badge_text' => $validated['badge_text'] ?? null,
            'description' => $validated['description'] ?? null,
            'features' => $features,
            'subjects' => $subjects,
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ];

        if ($request->hasFile('image')) {
            if (! empty($academicProgramme->image) && ! str_starts_with($academicProgramme->image, 'assets/')) {
                Storage::disk('public')->delete($academicProgramme->image);
            }
            $updateData['image'] = $request->file('image')->store('academics', 'public');
        }

        $academicProgramme->update($updateData);

        return redirect()->route('admin.academic-programmes.index')->with('success', 'Academic programme updated successfully!');
    }

    /**
     * Toggle active status.
     */
    public function toggle(AcademicProgramme $academicProgramme): RedirectResponse
    {
        $academicProgramme->update([
            'is_active' => ! $academicProgramme->is_active,
        ]);

        $status = $academicProgramme->is_active ? 'activated' : 'deactivated';

        return redirect()->back()->with('success', "Programme has been {$status} successfully!");
    }

    /**
     * Delete an academic programme.
     */
    public function destroy(AcademicProgramme $academicProgramme): RedirectResponse
    {
        if (! empty($academicProgramme->image) && ! str_starts_with($academicProgramme->image, 'assets/')) {
            Storage::disk('public')->delete($academicProgramme->image);
        }

        $academicProgramme->delete();

        return redirect()->route('admin.academic-programmes.index')->with('success', 'Academic programme deleted successfully!');
    }
}
