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
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'overlay_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'button_1_text' => ['nullable', 'string', 'max:100'],
            'button_1_url' => ['nullable', 'string', 'max:255'],
            'button_2_text' => ['nullable', 'string', 'max:100'],
            'button_2_url' => ['nullable', 'string', 'max:255'],
            'badge_text' => ['nullable', 'string', 'max:150'],
            'order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $data = [
            'title_1' => $validated['title_1'],
            'title_2' => $validated['title_2'] ?? null,
            'description' => $validated['description'] ?? null,
            'button_1_text' => $validated['button_1_text'] ?? null,
            'button_1_url' => $validated['button_1_url'] ?? null,
            'button_2_text' => $validated['button_2_text'] ?? null,
            'button_2_url' => $validated['button_2_url'] ?? null,
            'badge_text' => $validated['badge_text'] ?? null,
            'order' => $validated['order'] ?? ((Slider::max('order') ?? 0) + 1),
            'is_active' => $request->boolean('is_active', true),
        ];

        // Process Main Image
        if ($request->hasFile('image')) {
            $mainFile = $request->file('image');
            $mainPath = $mainFile->store('sliders', 'public');
            $data['image'] = $mainPath;

            $meta = $this->getImageMetadata($mainFile);
            $data['image_width'] = $meta['width'];
            $data['image_height'] = $meta['height'];
            $data['image_size'] = $meta['size_formatted'];
        }

        // Process Overlay Image ("Image on Image")
        if ($request->hasFile('overlay_image')) {
            $overlayFile = $request->file('overlay_image');
            $overlayPath = $overlayFile->store('sliders/overlays', 'public');
            $data['overlay_image'] = $overlayPath;

            $overlayMeta = $this->getImageMetadata($overlayFile);
            $data['overlay_image_width'] = $overlayMeta['width'];
            $data['overlay_image_height'] = $overlayMeta['height'];
            $data['overlay_image_size'] = $overlayMeta['size_formatted'];
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
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'overlay_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp,svg', 'max:5120'],
            'remove_overlay_image' => ['nullable', 'boolean'],
            'button_1_text' => ['nullable', 'string', 'max:100'],
            'button_1_url' => ['nullable', 'string', 'max:255'],
            'button_2_text' => ['nullable', 'string', 'max:100'],
            'button_2_url' => ['nullable', 'string', 'max:255'],
            'badge_text' => ['nullable', 'string', 'max:150'],
            'order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $slider->title_1 = $validated['title_1'];
        $slider->title_2 = $validated['title_2'] ?? null;
        $slider->description = $validated['description'] ?? null;
        $slider->button_1_text = $validated['button_1_text'] ?? null;
        $slider->button_1_url = $validated['button_1_url'] ?? null;
        $slider->button_2_text = $validated['button_2_text'] ?? null;
        $slider->button_2_url = $validated['button_2_url'] ?? null;
        $slider->badge_text = $validated['badge_text'] ?? null;
        $slider->order = $validated['order'] ?? $slider->order;
        $slider->is_active = $request->boolean('is_active');

        // Handle Main Image replacement
        if ($request->hasFile('image')) {
            // Delete old uploaded file if in storage
            if ($slider->image && ! str_starts_with($slider->image, 'assets/')) {
                Storage::disk('public')->delete($slider->image);
            }

            $mainFile = $request->file('image');
            $mainPath = $mainFile->store('sliders', 'public');
            $slider->image = $mainPath;

            $meta = $this->getImageMetadata($mainFile);
            $slider->image_width = $meta['width'];
            $slider->image_height = $meta['height'];
            $slider->image_size = $meta['size_formatted'];
        }

        // Handle Overlay Image removal
        if ($request->boolean('remove_overlay_image')) {
            if ($slider->overlay_image && ! str_starts_with($slider->overlay_image, 'assets/')) {
                Storage::disk('public')->delete($slider->overlay_image);
            }
            $slider->overlay_image = null;
            $slider->overlay_image_width = null;
            $slider->overlay_image_height = null;
            $slider->overlay_image_size = null;
        }
        // Handle Overlay Image replacement
        elseif ($request->hasFile('overlay_image')) {
            if ($slider->overlay_image && ! str_starts_with($slider->overlay_image, 'assets/')) {
                Storage::disk('public')->delete($slider->overlay_image);
            }

            $overlayFile = $request->file('overlay_image');
            $overlayPath = $overlayFile->store('sliders/overlays', 'public');
            $slider->overlay_image = $overlayPath;

            $overlayMeta = $this->getImageMetadata($overlayFile);
            $slider->overlay_image_width = $overlayMeta['width'];
            $slider->overlay_image_height = $overlayMeta['height'];
            $slider->overlay_image_size = $overlayMeta['size_formatted'];
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

        if ($slider->overlay_image && ! str_starts_with($slider->overlay_image, 'assets/')) {
            Storage::disk('public')->delete($slider->overlay_image);
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

    /**
     * Helper to extract image dimensions and formatted file size.
     */
    protected function getImageMetadata($file): array
    {
        $path = $file->getRealPath();
        $sizeBytes = $file->getSize();

        $width = null;
        $height = null;

        $info = @getimagesize($path);
        if ($info && isset($info[0], $info[1])) {
            $width = (int) $info[0];
            $height = (int) $info[1];
        }

        $sizeFormatted = $this->formatBytes($sizeBytes);

        return [
            'width' => $width,
            'height' => $height,
            'size_bytes' => $sizeBytes,
            'size_formatted' => $sizeFormatted,
        ];
    }

    /**
     * Format bytes into readable string (e.g., 450 KB, 1.2 MB).
     */
    protected function formatBytes(int $bytes, int $precision = 1): string
    {
        if ($bytes <= 0) {
            return '0 B';
        }

        $units = ['B', 'KB', 'MB', 'GB'];
        $power = floor(log($bytes, 1024));
        $power = min($power, count($units) - 1);

        $value = $bytes / (1024 ** $power);

        return round($value, $precision).' '.$units[$power];
    }
}
