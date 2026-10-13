<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{
    /**
     * Display a listing of FAQs and section settings.
     */
    public function index(): View
    {
        $faqs = Faq::orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $sectionSettings = [
            'eyebrow' => Setting::get('faq_eyebrow', 'FAQ'),
            'title_1' => Setting::get('faq_title_1', 'Frequently Asked'),
            'title_2' => Setting::get('faq_title_2', 'Questions'),
            'subtitle' => Setting::get('faq_subtitle', "Find quick answers to common questions about admissions, academics,\ncampus life, and more at Advaita."),
        ];

        return view('admin.faqs.index', compact('faqs', 'sectionSettings'));
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

        Setting::set('faq_eyebrow', $validated['eyebrow']);
        Setting::set('faq_title_1', $validated['title_1']);
        Setting::set('faq_title_2', $validated['title_2'] ?? null);
        Setting::set('faq_subtitle', $validated['subtitle'] ?? null);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ section settings updated successfully!');
    }

    /**
     * Show form for creating a new FAQ.
     */
    public function create(): View
    {
        $nextOrder = (Faq::max('order') ?? 0) + 1;

        return view('admin.faqs.create', compact('nextOrder'));
    }

    /**
     * Store a newly created FAQ.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        Faq::create([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ question created successfully!');
    }

    /**
     * Show form for editing a FAQ.
     */
    public function edit(Faq $faq): View
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    /**
     * Update an existing FAQ.
     */
    public function update(Request $request, Faq $faq): RedirectResponse
    {
        $validated = $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required', 'string'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $faq->update([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully!');
    }

    /**
     * Remove the FAQ.
     */
    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted successfully!');
    }

    /**
     * Toggle active state.
     */
    public function toggle(Faq $faq): RedirectResponse
    {
        $faq->update(['is_active' => ! $faq->is_active]);
        $status = $faq->is_active ? 'activated' : 'deactivated';

        return redirect()->route('admin.faqs.index')->with('success', "FAQ {$status} successfully!");
    }
}
