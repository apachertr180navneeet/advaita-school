<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\StaffMember;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class StaffMemberController extends Controller
{
    /**
     * Display a listing of staff and faculty members.
     */
    public function index(): View
    {
        $staffMembers = StaffMember::orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $sectionHeader = [
            'eyebrow' => Setting::get('staff_section_eyebrow', 'OUR EDUCATORS'),
            'title_prefix' => Setting::get('staff_section_title_prefix', 'The Teachers Behind Every'),
            'title_highlight' => Setting::get('staff_section_title_highlight', 'Advaita Learner.'),
            'description' => Setting::get(
                'staff_section_description',
                'Each one is here because they love what they teach — and because they care deeply about how every child grows. Our faculty bring expertise, experience and a genuine passion for guiding students towards academic and personal excellence.'
            ),
        ];

        return view('admin.staff.index', compact('staffMembers', 'sectionHeader'));
    }

    /**
     * Update the staff section header text.
     */
    public function updateSectionHeader(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'eyebrow' => ['required', 'string', 'max:150'],
            'title_prefix' => ['required', 'string', 'max:255'],
            'title_highlight' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        Setting::set('staff_section_eyebrow', $validated['eyebrow']);
        Setting::set('staff_section_title_prefix', $validated['title_prefix']);
        Setting::set('staff_section_title_highlight', $validated['title_highlight'] ?? '');
        Setting::set('staff_section_description', $validated['description'] ?? '');

        return redirect()->route('admin.staff.index')->with('success', 'Staff section header updated successfully!');
    }

    /**
     * Show form for creating a new staff member.
     */
    public function create(): View
    {
        $badgeColors = StaffMember::BADGE_COLORS;
        $nextOrder = (StaffMember::max('order') ?? 0) + 1;

        return view('admin.staff.create', compact('badgeColors', 'nextOrder'));
    }

    /**
     * Store a newly created staff member.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'qualification' => ['required', 'string', 'max:255'],
            'badge_color' => ['required', 'string', 'in:orange,blue,purple,rose,green,amber,cyan,pink'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('staff', 'public');
        }

        StaffMember::create([
            'name' => $validated['name'],
            'designation' => $validated['designation'],
            'qualification' => $validated['qualification'],
            'badge_color' => $validated['badge_color'],
            'photo' => $photoPath,
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.staff.index')->with('success', 'Staff member added successfully!');
    }

    /**
     * Show form for editing a staff member.
     */
    public function edit(StaffMember $staff): View
    {
        $badgeColors = StaffMember::BADGE_COLORS;

        return view('admin.staff.edit', ['staff' => $staff, 'badgeColors' => $badgeColors]);
    }

    /**
     * Update an existing staff member.
     */
    public function update(Request $request, StaffMember $staff): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'qualification' => ['required', 'string', 'max:255'],
            'badge_color' => ['required', 'string', 'in:orange,blue,purple,rose,green,amber,cyan,pink'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
            'remove_photo' => ['nullable', 'boolean'],
        ]);

        $photoPath = $staff->photo;

        if ($request->boolean('remove_photo')) {
            if ($photoPath && Storage::disk('public')->exists($photoPath)) {
                Storage::disk('public')->delete($photoPath);
            }
            $photoPath = null;
        }

        if ($request->hasFile('photo')) {
            if ($photoPath && Storage::disk('public')->exists($photoPath)) {
                Storage::disk('public')->delete($photoPath);
            }
            $photoPath = $request->file('photo')->store('staff', 'public');
        }

        $staff->update([
            'name' => $validated['name'],
            'designation' => $validated['designation'],
            'qualification' => $validated['qualification'],
            'badge_color' => $validated['badge_color'],
            'photo' => $photoPath,
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.staff.index')->with('success', 'Staff member updated successfully!');
    }

    /**
     * Toggle the active status of a staff member.
     */
    public function toggle(StaffMember $staff): RedirectResponse
    {
        $staff->update([
            'is_active' => ! $staff->is_active,
        ]);

        $status = $staff->is_active ? 'activated' : 'deactivated';

        return redirect()->route('admin.staff.index')->with('success', "Staff member '{$staff->name}' {$status} successfully!");
    }

    /**
     * Delete a staff member.
     */
    public function destroy(StaffMember $staff): RedirectResponse
    {
        if ($staff->photo && Storage::disk('public')->exists($staff->photo)) {
            Storage::disk('public')->delete($staff->photo);
        }

        $name = $staff->name;
        $staff->delete();

        return redirect()->route('admin.staff.index')->with('success', "Staff member '{$name}' removed successfully!");
    }
}
