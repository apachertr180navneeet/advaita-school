<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicResult;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AcademicResultController extends Controller
{
    /**
     * Display a listing of results & achievements.
     */
    public function index(Request $request): View
    {
        $selectedCategory = $request->query('category');
        $selectedYear = $request->query('year');

        $query = AcademicResult::orderBy('order', 'asc')
            ->orderBy('id', 'desc');

        if (! empty($selectedCategory) && array_key_exists($selectedCategory, AcademicResult::CATEGORIES)) {
            $query->where('category', $selectedCategory);
        }

        if (! empty($selectedYear)) {
            $query->where('academic_year', $selectedYear);
        }

        $results = $query->get();
        $categories = AcademicResult::CATEGORIES;
        $academicYears = AcademicResult::distinct()->pluck('academic_year')->sortDesc()->values()->all();
        if (! in_array('2025-26', $academicYears, true)) {
            $academicYears[] = '2025-26';
        }
        if (! in_array('2026-27', $academicYears, true)) {
            array_unshift($academicYears, '2026-27');
        }

        return view('admin.results.index', compact('results', 'categories', 'academicYears', 'selectedCategory', 'selectedYear'));
    }

    /**
     * Show form for creating a new result achievement.
     */
    public function create(): View
    {
        $categories = AcademicResult::CATEGORIES;
        $nextOrder = (AcademicResult::max('order') ?? 0) + 1;
        $academicYears = ['2026-27', '2025-26', '2024-25', '2023-24', '2022-23'];

        return view('admin.results.create', compact('categories', 'nextOrder', 'academicYears'));
    }

    /**
     * Store a newly created result.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category' => ['required', 'string', 'in:board,olympiad,abacus,iit_foundation,competitive'],
            'academic_year' => ['required', 'string', 'max:50'],
            'title' => ['required', 'string', 'max:255'],
            'exam_name' => ['required', 'string', 'max:255'],
            'student_name' => ['required', 'string', 'max:255'],
            'class_grade' => ['nullable', 'string', 'max:100'],
            'score' => ['nullable', 'string', 'max:100'],
            'rank' => ['nullable', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'is_featured' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
            'order' => ['required', 'integer', 'min:0'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
            'certificate' => ['nullable', 'file', 'mimes:jpeg,png,jpg,webp,pdf', 'max:10240'],
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('results/photos', 'public');
        }

        $certPath = null;
        if ($request->hasFile('certificate')) {
            $certPath = $request->file('certificate')->store('results/certificates', 'public');
        }

        AcademicResult::create([
            'category' => $validated['category'],
            'academic_year' => $validated['academic_year'],
            'title' => $validated['title'],
            'exam_name' => $validated['exam_name'],
            'student_name' => $validated['student_name'],
            'class_grade' => $validated['class_grade'] ?? null,
            'score' => $validated['score'] ?? null,
            'rank' => $validated['rank'] ?? null,
            'description' => $validated['description'] ?? null,
            'photo' => $photoPath,
            'certificate' => $certPath,
            'is_featured' => $request->boolean('is_featured', false),
            'is_active' => $request->boolean('is_active', true),
            'order' => $validated['order'] ?? 0,
        ]);

        return redirect()->route('admin.results.index')->with('success', 'Student achievement record added successfully!');
    }

    /**
     * Show form for editing a result achievement.
     */
    public function edit(AcademicResult $result): View
    {
        $categories = AcademicResult::CATEGORIES;
        $academicYears = ['2026-27', '2025-26', '2024-25', '2023-24', '2022-23'];

        return view('admin.results.edit', compact('result', 'categories', 'academicYears'));
    }

    /**
     * Update an existing result achievement.
     */
    public function update(Request $request, AcademicResult $result): RedirectResponse
    {
        $validated = $request->validate([
            'category' => ['required', 'string', 'in:board,olympiad,abacus,iit_foundation,competitive'],
            'academic_year' => ['required', 'string', 'max:50'],
            'title' => ['required', 'string', 'max:255'],
            'exam_name' => ['required', 'string', 'max:255'],
            'student_name' => ['required', 'string', 'max:255'],
            'class_grade' => ['nullable', 'string', 'max:100'],
            'score' => ['nullable', 'string', 'max:100'],
            'rank' => ['nullable', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'is_featured' => ['nullable', 'boolean'],
            'is_active' => ['nullable', 'boolean'],
            'order' => ['required', 'integer', 'min:0'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
            'certificate' => ['nullable', 'file', 'mimes:jpeg,png,jpg,webp,pdf', 'max:10240'],
        ]);

        $updateData = [
            'category' => $validated['category'],
            'academic_year' => $validated['academic_year'],
            'title' => $validated['title'],
            'exam_name' => $validated['exam_name'],
            'student_name' => $validated['student_name'],
            'class_grade' => $validated['class_grade'] ?? null,
            'score' => $validated['score'] ?? null,
            'rank' => $validated['rank'] ?? null,
            'description' => $validated['description'] ?? null,
            'is_featured' => $request->boolean('is_featured', false),
            'is_active' => $request->boolean('is_active', true),
            'order' => $validated['order'] ?? 0,
        ];

        if ($request->hasFile('photo')) {
            if (! empty($result->photo) && ! str_starts_with($result->photo, 'assets/')) {
                Storage::disk('public')->delete($result->photo);
            }
            $updateData['photo'] = $request->file('photo')->store('results/photos', 'public');
        }

        if ($request->hasFile('certificate')) {
            if (! empty($result->certificate) && ! str_starts_with($result->certificate, 'assets/')) {
                Storage::disk('public')->delete($result->certificate);
            }
            $updateData['certificate'] = $request->file('certificate')->store('results/certificates', 'public');
        }

        $result->update($updateData);

        return redirect()->route('admin.results.index')->with('success', 'Student achievement record updated successfully!');
    }

    /**
     * Toggle active status.
     */
    public function toggle(AcademicResult $result): RedirectResponse
    {
        $result->update([
            'is_active' => ! $result->is_active,
        ]);

        $status = $result->is_active ? 'activated' : 'deactivated';

        return redirect()->back()->with('success', "Result record has been {$status} successfully!");
    }

    /**
     * Delete a result record.
     */
    public function destroy(AcademicResult $result): RedirectResponse
    {
        if (! empty($result->photo) && ! str_starts_with($result->photo, 'assets/')) {
            Storage::disk('public')->delete($result->photo);
        }

        if (! empty($result->certificate) && ! str_starts_with($result->certificate, 'assets/')) {
            Storage::disk('public')->delete($result->certificate);
        }

        $result->delete();

        return redirect()->route('admin.results.index')->with('success', 'Result record deleted successfully!');
    }
}
