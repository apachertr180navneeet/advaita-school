<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

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
