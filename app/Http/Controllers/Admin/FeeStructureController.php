<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeeStructure;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeeStructureController extends Controller
{
    /**
     * Display a listing of class-wise fee structures.
     */
    public function index(Request $request): View
    {
        $selectedWing = $request->get('wing');

        $query = FeeStructure::query()->orderBy('order')->orderBy('id');

        if (! empty($selectedWing)) {
            $query->where('wing', $selectedWing);
        }

        $feeStructures = $query->get();

        $wings = FeeStructure::WINGS;

        $isPublished = (bool) Setting::get('fee_structure_published', false);
        $academicYear = Setting::get('fee_academic_year', '2026–27');
        $lastUpdated = Setting::get('fee_last_updated', date('F Y'));
        $pendingNotice = Setting::get('fee_pending_notice', 'Fee structure for 2026-27 is currently under official review and will be published shortly upon approval by school management.');

        return view('admin.fee-structures.index', compact(
            'feeStructures',
            'wings',
            'selectedWing',
            'isPublished',
            'academicYear',
            'lastUpdated',
            'pendingNotice'
        ));
    }

    /**
     * Show form for creating a new class fee structure.
     */
    public function create(): View
    {
        $wings = FeeStructure::WINGS;
        $nextOrder = (FeeStructure::max('order') ?? 0) + 1;

        return view('admin.fee-structures.create', compact('wings', 'nextOrder'));
    }

    /**
     * Store a new class fee structure.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'class_name' => ['required', 'string', 'max:100'],
            'academic_year' => ['required', 'string', 'max:50'],
            'wing' => ['required', 'in:pre_primary,primary,secondary'],
            'admission_fee' => ['nullable', 'numeric', 'min:0'],
            'tuition_fee' => ['required', 'numeric', 'min:0'],
            'development_fee' => ['nullable', 'numeric', 'min:0'],
            'exam_fee' => ['nullable', 'numeric', 'min:0'],
            'term1_fee' => ['nullable', 'numeric', 'min:0'],
            'term2_fee' => ['nullable', 'numeric', 'min:0'],
            'term3_fee' => ['nullable', 'numeric', 'min:0'],
            'is_published' => ['nullable', 'boolean'],
            'notes' => ['nullable', 'string', 'max:500'],
            'order' => ['required', 'integer', 'min:0'],
        ]);

        $annualTotal = ($validated['tuition_fee'] ?? 0) + ($validated['development_fee'] ?? 0) + ($validated['exam_fee'] ?? 0);
        $validated['annual_total'] = $annualTotal;
        $validated['is_published'] = $request->boolean('is_published');

        FeeStructure::create($validated);

        return redirect()->route('admin.fee-structures.index')->with(
            'success',
            "Fee structure for {$validated['class_name']} created successfully."
        );
    }

    /**
     * Show form for editing a class fee structure.
     */
    public function edit(int $id): View
    {
        $feeStructure = FeeStructure::findOrFail($id);
        $wings = FeeStructure::WINGS;

        return view('admin.fee-structures.edit', compact('feeStructure', 'wings'));
    }

    /**
     * Update the class fee structure.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $feeStructure = FeeStructure::findOrFail($id);

        $validated = $request->validate([
            'class_name' => ['required', 'string', 'max:100'],
            'academic_year' => ['required', 'string', 'max:50'],
            'wing' => ['required', 'in:pre_primary,primary,secondary'],
            'admission_fee' => ['nullable', 'numeric', 'min:0'],
            'tuition_fee' => ['required', 'numeric', 'min:0'],
            'development_fee' => ['nullable', 'numeric', 'min:0'],
            'exam_fee' => ['nullable', 'numeric', 'min:0'],
            'term1_fee' => ['nullable', 'numeric', 'min:0'],
            'term2_fee' => ['nullable', 'numeric', 'min:0'],
            'term3_fee' => ['nullable', 'numeric', 'min:0'],
            'is_published' => ['nullable', 'boolean'],
            'notes' => ['nullable', 'string', 'max:500'],
            'order' => ['required', 'integer', 'min:0'],
        ]);

        $annualTotal = ($validated['tuition_fee'] ?? 0) + ($validated['development_fee'] ?? 0) + ($validated['exam_fee'] ?? 0);
        $validated['annual_total'] = $annualTotal;
        $validated['is_published'] = $request->boolean('is_published');

        $feeStructure->update($validated);

        return redirect()->route('admin.fee-structures.index')->with(
            'success',
            "Fee structure for {$feeStructure->class_name} updated successfully."
        );
    }

    /**
     * Toggle the global publish status between "Published" and "Under Review".
     */
    public function togglePublish(Request $request): RedirectResponse
    {
        $current = (bool) Setting::get('fee_structure_published', false);
        $newStatus = ! $current;

        Setting::updateOrCreate(
            ['key' => 'fee_structure_published'],
            ['value' => $newStatus ? '1' : '0']
        );

        Setting::updateOrCreate(
            ['key' => 'fee_last_updated'],
            ['value' => date('F Y')]
        );

        $statusText = $newStatus ? 'Published Live on Website' : 'Hidden (Showing Official Review Notice)';

        return redirect()->back()->with('success', "Fee structure visibility set to: {$statusText}.");
    }

    /**
     * Update global fee settings (academic year, pending notice).
     */
    public function updateGlobalSettings(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'academic_year' => ['required', 'string', 'max:50'],
            'pending_notice' => ['required', 'string', 'max:1000'],
        ]);

        Setting::updateOrCreate(['key' => 'fee_academic_year'], ['value' => $validated['academic_year']]);
        Setting::updateOrCreate(['key' => 'fee_pending_notice'], ['value' => $validated['pending_notice']]);
        Setting::updateOrCreate(['key' => 'fee_last_updated'], ['value' => date('F Y')]);

        return redirect()->back()->with('success', 'Fee structure global settings updated successfully.');
    }

    /**
     * Delete a class fee structure.
     */
    public function destroy(int $id): RedirectResponse
    {
        $feeStructure = FeeStructure::findOrFail($id);
        $className = $feeStructure->class_name;
        $feeStructure->delete();

        return redirect()->route('admin.fee-structures.index')->with(
            'success',
            "Fee entry for {$className} deleted successfully."
        );
    }
}
