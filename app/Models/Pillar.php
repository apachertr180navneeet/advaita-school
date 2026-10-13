<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pillar extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
        'tags' => 'array',
    ];

    /**
     * Get the full URL for the pillar image.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('assets/images/pillar-card-1.jpg');
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
     * Resolve absolute disk path of the pillar image.
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
     * Dynamic file size of the pillar image computed from disk.
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
     * Dynamic dimensions of the pillar image (e.g. "600 × 400 px").
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
     * Formatted 2-digit badge number (e.g., '01', '02').
     */
    public function getBadgeLabelAttribute(): string
    {
        if (! empty($this->badge_number)) {
            return $this->badge_number;
        }

        return sprintf('%02d', $this->order ?: 1);
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
