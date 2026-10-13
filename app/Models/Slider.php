<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Get the full URL for the main slide banner image.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('assets/images/hero-slider-campus.png');
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
     * Get the full URL for the image on image (overlay graphic).
     */
    public function getImageOnImageUrlAttribute(): ?string
    {
        if (empty($this->image_on_image)) {
            return null;
        }

        if (str_starts_with($this->image_on_image, 'http://') || str_starts_with($this->image_on_image, 'https://')) {
            return $this->image_on_image;
        }

        if (str_starts_with($this->image_on_image, 'assets/')) {
            return asset($this->image_on_image);
        }

        return asset('storage/'.ltrim($this->image_on_image, '/'));
    }

    /**
     * Backward-compatible alias for image on image URL.
     */
    public function getOverlayImageUrlAttribute(): ?string
    {
        return $this->image_on_image_url;
    }

    /**
     * Resolve absolute disk path of the main image.
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
     * Resolve absolute disk path of the image on image.
     */
    public function getImageOnImageRealPath(): ?string
    {
        if (empty($this->image_on_image)) {
            return null;
        }

        if (str_starts_with($this->image_on_image, 'assets/')) {
            $path = public_path($this->image_on_image);

            return file_exists($path) ? $path : null;
        }

        if (Storage::disk('public')->exists($this->image_on_image)) {
            return Storage::disk('public')->path($this->image_on_image);
        }

        $directPath = public_path('storage/'.ltrim($this->image_on_image, '/'));

        return file_exists($directPath) ? $directPath : null;
    }

    /**
     * Dynamic file size of the main image computed from disk.
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
     * Dynamic dimensions of the main image (e.g. "1920 × 800 px").
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
     * Dynamic file size of image on image computed from disk.
     */
    public function getImageOnImageSizeAttribute(): ?string
    {
        $realPath = $this->getImageOnImageRealPath();
        if ($realPath && file_exists($realPath)) {
            return $this->formatBytes(filesize($realPath));
        }

        return null;
    }

    /**
     * Dynamic dimensions of image on image (e.g. "500 × 600 px").
     */
    public function getImageOnImageDimensionsAttribute(): ?string
    {
        $realPath = $this->getImageOnImageRealPath();
        if ($realPath && file_exists($realPath)) {
            $info = @getimagesize($realPath);
            if ($info && isset($info[0], $info[1])) {
                return "{$info[0]} × {$info[1]} px";
            }
        }

        return null;
    }

    /**
     * Format raw bytes into human-readable format.
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
