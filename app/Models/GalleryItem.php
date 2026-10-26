<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * The 9 official gallery categories with metadata.
     *
     * @var array<string, array{slug: string, icon: string}>
     */
    public const CATEGORIES = [
        'Life at Advaita' => [
            'slug' => 'life-at-advaita',
            'icon' => 'fa-solid fa-school-flag',
        ],
        'Events & Celebrations' => [
            'slug' => 'events-celebrations',
            'icon' => 'fa-solid fa-cake-candles',
        ],
        'Academics and Science Activities' => [
            'slug' => 'academics-science',
            'icon' => 'fa-solid fa-flask-vial',
        ],
        'Educational Tours & Excursions' => [
            'slug' => 'educational-tours',
            'icon' => 'fa-solid fa-bus-simple',
        ],
        'Sports & Competitions' => [
            'slug' => 'sports-competitions',
            'icon' => 'fa-solid fa-trophy',
        ],
        'Student Leadership & Achievements' => [
            'slug' => 'student-leadership',
            'icon' => 'fa-solid fa-award',
        ],
        'Art, Culture & Creativity' => [
            'slug' => 'art-culture',
            'icon' => 'fa-solid fa-palette',
        ],
        'Advaita Kids' => [
            'slug' => 'advaita-kids',
            'icon' => 'fa-solid fa-child-reaching',
        ],
        'Campus & Facilities' => [
            'slug' => 'campus-facilities',
            'icon' => 'fa-solid fa-landmark',
        ],
    ];

    /**
     * Resolve slug for a category name.
     */
    public static function getCategorySlug(?string $category): string
    {
        if (empty($category)) {
            return 'life-at-advaita';
        }

        foreach (self::CATEGORIES as $name => $data) {
            if (strcasecmp($name, $category) === 0) {
                return $data['slug'];
            }
        }

        return Str::slug($category);
    }

    /**
     * Resolve default icon for a category name.
     */
    public static function getCategoryIcon(?string $category): string
    {
        if (empty($category)) {
            return 'fa-solid fa-camera';
        }

        foreach (self::CATEGORIES as $name => $data) {
            if (strcasecmp($name, $category) === 0) {
                return $data['icon'];
            }
        }

        return 'fa-solid fa-camera';
    }

    /**
     * Get the full URL for the gallery image.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('assets/images/gallery/gallery-school-band.jpg');
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        if (str_starts_with($this->image, 'assets/')) {
            return asset($this->image);
        }

        return asset('storage/'.ltrim($this->image, '/'));
    }

    /**
     * Resolve absolute disk path of the image.
     */
    public function getImageRealPath(): ?string
    {
        if (empty($this->image)) {
            return null;
        }

        if (str_starts_with($this->image, 'assets/')) {
            $path = public_path($this->image);

            return file_exists($path) ? $path : null;
        }

        if (Storage::disk('public')->exists($this->image)) {
            return Storage::disk('public')->path($this->image);
        }

        $directPath = public_path('storage/'.ltrim($this->image, '/'));

        return file_exists($directPath) ? $directPath : null;
    }

    /**
     * Human-readable file size.
     */
    public function getImageSizeAttribute(): ?string
    {
        $realPath = $this->getImageRealPath();
        if ($realPath && file_exists($realPath)) {
            return $this->formatBytes(filesize($realPath));
        }

        return null;
    }

    /**
     * Image pixel dimensions.
     */
    public function getImageDimensionsAttribute(): ?string
    {
        $realPath = $this->getImageRealPath();
        if ($realPath && file_exists($realPath)) {
            $info = @getimagesize($realPath);
            if ($info && isset($info[0], $info[1])) {
                return "{$info[0]} × {$info[1]} px";
            }
        }

        return null;
    }

    /**
     * Helper to format raw bytes.
     */
    protected function formatBytes(int $bytes, int $precision = 1): string
    {
        if ($bytes <= 0) {
            return '0 B';
        }

        $units = ['B', 'KB', 'MB', 'GB'];
        $pow = floor(log($bytes, 1024));
        $pow = min((int) $pow, count($units) - 1);

        return round($bytes / (1024 ** $pow), $precision).' '.$units[$pow];
    }
}
