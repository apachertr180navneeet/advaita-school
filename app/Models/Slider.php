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
     * Primary action button label (default: 'Apply for Admission').
     */
    public function getButton1TextAttribute(): string
    {
        return ! empty($this->btn_1_text) ? $this->btn_1_text : 'Apply for Admission';
    }

    /**
     * Primary action button link (default: '#admissions').
     */
    public function getButton1UrlAttribute(): string
    {
        return ! empty($this->btn_1_url) ? $this->btn_1_url : '#admissions';
    }

    /**
     * Secondary action button label (default: 'Explore Our School').
     */
    public function getButton2TextAttribute(): string
    {
        return ! empty($this->btn_2_text) ? $this->btn_2_text : 'Explore Our School';
    }

    /**
     * Secondary action button link (default: '#about').
     */
    public function getButton2UrlAttribute(): string
    {
        return ! empty($this->btn_2_url) ? $this->btn_2_url : '#about';
    }

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

        $cleanPath = ltrim($this->image, '/');
        if (str_starts_with($cleanPath, 'storage/')) {
            $cleanPath = substr($cleanPath, 8);
        }

        return asset('storage/'.$cleanPath);
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

        $cleanPath = ltrim($this->image, '/');
        if (str_starts_with($cleanPath, 'storage/')) {
            $cleanPath = substr($cleanPath, 8);
        }

        if (Storage::disk('public')->exists($cleanPath)) {
            return Storage::disk('public')->path($cleanPath);
        }

        $directPath = public_path('storage/'.$cleanPath);

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
