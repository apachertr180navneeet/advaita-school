<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class WhyChooseCard extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Supported theme color options with visual badges.
     */
    public const THEME_COLORS = [
        'orange' => [
            'label' => 'Warm Orange',
            'badge' => '#F37021',
            'gradient' => 'linear-gradient(135deg, #F37021 0%, #E05D0E 100%)',
        ],
        'blue' => [
            'label' => 'Sky Blue',
            'badge' => '#0284C7',
            'gradient' => 'linear-gradient(135deg, #0284C7 0%, #0369A1 100%)',
        ],
        'teal' => [
            'label' => 'Emerald Teal',
            'badge' => '#059669',
            'gradient' => 'linear-gradient(135deg, #059669 0%, #047857 100%)',
        ],
        'purple' => [
            'label' => 'Royal Purple',
            'badge' => '#7C3AED',
            'gradient' => 'linear-gradient(135deg, #7C3AED 0%, #6D28D9 100%)',
        ],
        'coral' => [
            'label' => 'Coral Red',
            'badge' => '#EF4444',
            'gradient' => 'linear-gradient(135deg, #EF4444 0%, #DC2626 100%)',
        ],
        'cyan' => [
            'label' => 'Deep Cyan',
            'badge' => '#0D9488',
            'gradient' => 'linear-gradient(135deg, #0D9488 0%, #0F766E 100%)',
        ],
    ];

    /**
     * Get the full URL for the card image.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('assets/images/adv-choose-1.jpg');
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
     * Resolve absolute disk path of the card image.
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
     * Dynamic file size of the card image.
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
     * Dynamic dimensions of the card image.
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
     * CSS class for the theme color (e.g. 'theme-orange', 'theme-blue').
     */
    public function getThemeClassAttribute(): string
    {
        $validThemes = array_keys(self::THEME_COLORS);
        $color = in_array($this->theme_color, $validThemes, true) ? $this->theme_color : 'orange';

        return "theme-{$color}";
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
