<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class StaffMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'designation',
        'qualification',
        'badge_color',
        'photo',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    public const BADGE_COLORS = [
        'orange' => [
            'label' => 'Orange',
            'pill_class' => 'role-orange',
            'qual_class' => 'qual-orange',
            'color' => '#F37021',
        ],
        'blue' => [
            'label' => 'Blue',
            'pill_class' => 'role-blue',
            'qual_class' => 'qual-blue',
            'color' => '#0284c7',
        ],
        'purple' => [
            'label' => 'Purple',
            'pill_class' => 'role-purple',
            'qual_class' => 'qual-purple',
            'color' => '#7c3aed',
        ],
        'rose' => [
            'label' => 'Rose',
            'pill_class' => 'role-rose',
            'qual_class' => 'qual-rose',
            'color' => '#e11d48',
        ],
        'green' => [
            'label' => 'Green',
            'pill_class' => 'role-green',
            'qual_class' => 'qual-green',
            'color' => '#16a34a',
        ],
        'amber' => [
            'label' => 'Amber',
            'pill_class' => 'role-amber',
            'qual_class' => 'qual-amber',
            'color' => '#d97706',
        ],
        'cyan' => [
            'label' => 'Cyan',
            'pill_class' => 'role-cyan',
            'qual_class' => 'qual-cyan',
            'color' => '#0284c7',
        ],
        'pink' => [
            'label' => 'Pink',
            'pill_class' => 'role-pink',
            'qual_class' => 'qual-pink',
            'color' => '#db2777',
        ],
    ];

    /**
     * Scope query to only active staff members.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get the accessible public photo URL.
     */
    public function getPhotoUrlAttribute(): ?string
    {
        if (empty($this->photo)) {
            return null;
        }

        if (str_starts_with($this->photo, 'http://') || str_starts_with($this->photo, 'https://')) {
            return $this->photo;
        }

        if (str_starts_with($this->photo, 'assets/')) {
            return asset($this->photo);
        }

        if (Storage::disk('public')->exists($this->photo)) {
            return Storage::disk('public')->url($this->photo);
        }

        return asset($this->photo);
    }

    /**
     * Get pill class for badge.
     */
    public function getPillClassAttribute(): string
    {
        return self::BADGE_COLORS[$this->badge_color]['pill_class'] ?? 'role-blue';
    }

    /**
     * Get qualification class for icon/text.
     */
    public function getQualClassAttribute(): string
    {
        return self::BADGE_COLORS[$this->badge_color]['qual_class'] ?? 'qual-blue';
    }
}
