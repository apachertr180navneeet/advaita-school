<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryItem;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GalleryController extends Controller
{
    /**
     * Display a listing of campus gallery items and header settings.
     */
    public function index(): View
    {
        $items = GalleryItem::orderBy('order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $sectionSettings = [
            'eyebrow' => Setting::get('gallery_eyebrow', 'CAMPUS GALLERY'),
            'title_1' => Setting::get('gallery_title_1', 'A day at Advaita,'),
            'title_2' => Setting::get('gallery_title_2', 'in pictures.'),
            'subtitle' => Setting::get('gallery_subtitle', 'Glimpses from morning assembly, classrooms, labs, sports, celebrations and everything in between — the rhythm of life at our campus.'),
            'btn_1_text' => Setting::get('gallery_btn_1_text', 'Explore Photo Gallery'),
            'btn_1_url' => Setting::get('gallery_btn_1_url', route('gallery')),
            'btn_2_text' => Setting::get('gallery_btn_2_text', 'Watch Campus Highlights'),
            'btn_2_url' => Setting::get('gallery_btn_2_url', '#hero'),
        ];

        return view('admin.gallery.index', compact('items', 'sectionSettings'));
    }

    /**
     * Show dedicated form for editing campus gallery section header.
     */
    public function editSectionHeader(): View
    {
        $sectionSettings = [
            'eyebrow' => Setting::get('gallery_eyebrow', 'CAMPUS GALLERY'),
            'title_1' => Setting::get('gallery_title_1', 'A day at Advaita,'),
            'title_2' => Setting::get('gallery_title_2', 'in pictures.'),
            'subtitle' => Setting::get('gallery_subtitle', 'Glimpses from morning assembly, classrooms, labs, sports, celebrations and everything in between — the rhythm of life at our campus.'),
            'btn_1_text' => Setting::get('gallery_btn_1_text', 'Explore Photo Gallery'),
            'btn_1_url' => Setting::get('gallery_btn_1_url', route('gallery')),
            'btn_2_text' => Setting::get('gallery_btn_2_text', 'Watch Campus Highlights'),
            'btn_2_url' => Setting::get('gallery_btn_2_url', '#hero'),
        ];

        return view('admin.gallery.header', compact('sectionSettings'));
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
            'btn_1_text' => ['nullable', 'string', 'max:100'],
            'btn_1_url' => ['nullable', 'string', 'max:255'],
            'btn_2_text' => ['nullable', 'string', 'max:100'],
            'btn_2_url' => ['nullable', 'string', 'max:255'],
        ]);

        Setting::set('gallery_eyebrow', $validated['eyebrow']);
        Setting::set('gallery_title_1', $validated['title_1']);
        Setting::set('gallery_title_2', $validated['title_2'] ?? null);
        Setting::set('gallery_subtitle', $validated['subtitle'] ?? null);
        Setting::set('gallery_btn_1_text', $validated['btn_1_text'] ?? 'Explore Photo Gallery');
        Setting::set('gallery_btn_1_url', $validated['btn_1_url'] ?? route('gallery'));
        Setting::set('gallery_btn_2_text', $validated['btn_2_text'] ?? 'Watch Campus Highlights');
        Setting::set('gallery_btn_2_url', $validated['btn_2_url'] ?? '#hero');

        return redirect()->route('admin.gallery.index')->with('success', 'Campus Gallery section settings updated successfully!');
    }

    /**
     * Show form for creating a new gallery item.
     */
    public function create(): View
    {
        $nextOrder = (GalleryItem::max('order') ?? 0) + 1;

        return view('admin.gallery.create', compact('nextOrder'));
    }

    /**
     * Store a newly created gallery item.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category' => ['nullable', 'string', 'max:100'],
            'icon' => ['nullable', 'string', 'max:100'],
            'caption' => ['nullable', 'string', 'max:255'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        GalleryItem::create([
            'image' => $imagePath,
            'category' => $validated['category'] ?? 'Campus Life',
            'icon' => $validated['icon'] ?? 'fa-solid fa-camera',
            'caption' => $validated['caption'] ?? null,
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery photo added successfully!');
    }

    /**
     * Show form for editing a gallery item.
     */
    public function edit(GalleryItem $gallery): View
    {
        return view('admin.gallery.edit', ['item' => $gallery]);
    }

    /**
     * Update an existing gallery item.
     */
    public function update(Request $request, GalleryItem $gallery): RedirectResponse
    {
        $validated = $request->validate([
            'category' => ['nullable', 'string', 'max:100'],
            'icon' => ['nullable', 'string', 'max:100'],
            'caption' => ['nullable', 'string', 'max:255'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,avif', 'max:5120'],
        ]);

        $updateData = [
            'category' => $validated['category'] ?? 'Campus Life',
            'icon' => $validated['icon'] ?? 'fa-solid fa-camera',
            'caption' => $validated['caption'] ?? null,
            'order' => $validated['order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ];

        if ($request->hasFile('image')) {
            if ($gallery->image && ! str_starts_with($gallery->image, 'assets/')) {
                Storage::disk('public')->delete($gallery->image);
            }
            $updateData['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery->update($updateData);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery photo updated successfully!');
    }

    /**
     * Remove the gallery item.
     */
    public function destroy(GalleryItem $gallery): RedirectResponse
    {
        if ($gallery->image && ! str_starts_with($gallery->image, 'assets/')) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item deleted successfully!');
    }

    /**
     * Toggle active state.
     */
    public function toggle(GalleryItem $gallery): RedirectResponse
    {
        $gallery->update(['is_active' => ! $gallery->is_active]);
        $status = $gallery->is_active ? 'activated' : 'deactivated';

        return redirect()->route('admin.gallery.index')->with('success', "Gallery item {$status} successfully!");
    }
}
