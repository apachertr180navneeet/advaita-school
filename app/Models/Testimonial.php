<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
        'rating' => 'integer',
    ];

    /**
     * Get the full URL for the parent avatar.
     */
    public function getAvatarUrlAttribute(): string
    {
        if (empty($this->avatar)) {
            return asset('assets/images/testimonial-parent-1.jpg');
        }

        if (str_starts_with($this->avatar, 'http://') || str_starts_with($this->avatar, 'https://')) {
            return $this->avatar;
        }

        if (str_starts_with($this->avatar, 'assets/')) {
            return asset($this->avatar);
        }

        return asset('storage/'.ltrim($this->avatar, '/'));
    }

    /**
     * Resolve absolute disk path of the avatar.
     */
    public function getAvatarRealPath(): ?string
    {
        if (empty($this->avatar)) {
            return null;
        }

        if (str_starts_with($this->avatar, 'assets/')) {
            $path = public_path($this->avatar);

            return file_exists($path) ? $path : null;
        }

        if (Storage::disk('public')->exists($this->avatar)) {
            return Storage::disk('public')->path($this->avatar);
        }

        $directPath = public_path('storage/'.ltrim($this->avatar, '/'));

        return file_exists($directPath) ? $directPath : null;
    }

    /**
     * Human-readable file size.
     */
    public function getAvatarSizeAttribute(): ?string
    {
        $realPath = $this->getAvatarRealPath();
        if ($realPath && file_exists($realPath)) {
            $bytes = filesize($realPath);
            if ($bytes <= 0) {
                return '0 B';
            }
            $units = ['B', 'KB', 'MB', 'GB'];
            $pow = floor(log($bytes, 1024));
            $pow = min((int) $pow, count($units) - 1);

            return round($bytes / (1024 ** $pow), 1).' '.$units[$pow];
        }

        return null;
    }
}
