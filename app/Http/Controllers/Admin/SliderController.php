<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the sliders.
     */
    public function index()
    {
        $sliders = Slider::orderBy('order', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new slider.
     */
    public function create()
    {
        $nextOrder = (Slider::max('order') ?? 0) + 1;

        return view('admin.sliders.create', compact('nextOrder'));
    }

    /**
     * Store a newly created slider in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_1' => ['required', 'string', 'max:255'],
            'title_2' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'btn_1_text' => ['nullable', 'string', 'max:100'],
            'btn_1_url' => ['nullable', 'string', 'max:255'],
            'btn_2_text' => ['nullable', 'string', 'max:100'],
            'btn_2_url' => ['nullable', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data = [
            'title_1' => $validated['title_1'],
            'title_2' => $validated['title_2'] ?? null,
            'description' => $validated['description'] ?? null,
            'btn_1_text' => $validated['btn_1_text'] ?? null,
            'btn_1_url' => $validated['btn_1_url'] ?? null,
            'btn_2_text' => $validated['btn_2_text'] ?? null,
            'btn_2_url' => $validated['btn_2_url'] ?? null,
            'order' => $validated['order'] ?? ((Slider::max('order') ?? 0) + 1),
            'is_active' => $request->boolean('is_active', true),
        ];

        // Process Main Image
        if ($request->hasFile('image')) {
            $mainFile = $request->file('image');
            $mainPath = $mainFile->store('sliders', 'public');
            $data['image'] = $mainPath;
        }

        Slider::create($data);

        return redirect()->route('admin.sliders.index')->with('success', 'Hero slide created successfully!');
    }

    /**
     * Show the form for editing the specified slider.
     */
    public function edit(int $id)
    {
        $slider = Slider::findOrFail($id);

        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified slider in storage.
     */
    public function update(Request $request, int $id)
    {
        $slider = Slider::findOrFail($id);

        $validated = $request->validate([
            'title_1' => ['required', 'string', 'max:255'],
            'title_2' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'btn_1_text' => ['nullable', 'string', 'max:100'],
            'btn_1_url' => ['nullable', 'string', 'max:255'],
            'btn_2_text' => ['nullable', 'string', 'max:100'],
            'btn_2_url' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $slider->title_1 = $validated['title_1'];
        $slider->title_2 = $validated['title_2'] ?? null;
        $slider->description = $validated['description'] ?? null;
        $slider->btn_1_text = $validated['btn_1_text'] ?? null;
        $slider->btn_1_url = $validated['btn_1_url'] ?? null;
        $slider->btn_2_text = $validated['btn_2_text'] ?? null;
        $slider->btn_2_url = $validated['btn_2_url'] ?? null;
        $slider->order = $validated['order'] ?? $slider->order;
        $slider->is_active = $request->boolean('is_active');

        // Handle Main Image replacement
        if ($request->hasFile('image')) {
            if ($slider->image && ! str_starts_with($slider->image, 'assets/')) {
                Storage::disk('public')->delete($slider->image);
            }

            $mainFile = $request->file('image');
            $slider->image = $mainFile->store('sliders', 'public');
        }

        $slider->save();

        return redirect()->route('admin.sliders.index')->with('success', 'Hero slide updated successfully!');
    }

    /**
     * Remove the specified slider from storage.
     */
    public function destroy(int $id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->image && ! str_starts_with($slider->image, 'assets/')) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Hero slide deleted successfully.');
    }

    /**
     * Toggle the active status of the specified slider.
     */
    public function toggleStatus(int $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->is_active = ! $slider->is_active;
        $slider->save();

        $statusLabel = $slider->is_active ? 'activated' : 'deactivated';

        return redirect()->route('admin.sliders.index')->with('success', "Slide #{$slider->id} has been {$statusLabel}.");
    }
}
