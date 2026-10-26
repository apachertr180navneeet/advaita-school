<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicProgramme extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'features' => 'array',
        'subjects' => 'array',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Supported Stages.
     */
    public const STAGES = [
        'pre_primary' => [
            'label' => 'Pre-Primary',
            'classes' => 'Nursery · LKG · UKG',
            'badge' => '#F37021',
            'icon' => 'fa-solid fa-shapes',
        ],
        'primary' => [
            'label' => 'Primary Stage',
            'classes' => 'Classes 1 to 5',
            'badge' => '#0284C7',
            'icon' => 'fa-solid fa-book-open-reader',
        ],
        'secondary' => [
            'label' => 'Secondary Stage',
            'classes' => 'Classes 6 to 10',
            'badge' => '#7C3AED',
            'icon' => 'fa-solid fa-graduation-cap',
        ],
    ];

    /**
     * Scope active items ordered.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('order')->orderBy('id');
    }

    /**
     * Scope by stage.
     */
    public function scopeByStage(Builder $query, string $stage): Builder
    {
        return $query->where('stage', $stage);
    }

    /**
     * Get image URL.
     */
    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('assets/images/about-philosophy-student.jpg');
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
     * Get human-readable stage label.
     */
    public function getStageLabelAttribute(): string
    {
        return self::STAGES[$this->stage]['label'] ?? ucfirst(str_replace('_', ' ', $this->stage));
    }
}
