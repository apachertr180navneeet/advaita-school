<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicResult extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Supported Result Categories.
     */
    public const CATEGORIES = [
        'board' => [
            'label' => 'Board Examination Results',
            'short_label' => 'Board Results',
            'badge' => '#083B7A',
            'icon' => 'fa-solid fa-graduation-cap',
        ],
        'olympiad' => [
            'label' => 'Olympiad Results',
            'short_label' => 'Olympiads',
            'badge' => '#0284C7',
            'icon' => 'fa-solid fa-medal',
        ],
        'abacus' => [
            'label' => 'Abacus Competition Results',
            'short_label' => 'Abacus & Mental Math',
            'badge' => '#F37021',
            'icon' => 'fa-solid fa-calculator',
        ],
        'iit_foundation' => [
            'label' => 'IIT Foundation Achievements',
            'short_label' => 'IIT Foundation',
            'badge' => '#7C3AED',
            'icon' => 'fa-solid fa-atom',
        ],
        'competitive' => [
            'label' => 'Other Competitive Examination Results',
            'short_label' => 'Competitive Exams',
            'badge' => '#059669',
            'icon' => 'fa-solid fa-trophy',
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
     * Scope featured items.
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope by category.
     */
    public function scopeByCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }

    /**
     * Scope by academic year.
     */
    public function scopeByYear(Builder $query, string $year): Builder
    {
        return $query->where('academic_year', $year);
    }

    /**
     * Get photo URL.
     */
    public function getPhotoUrlAttribute(): string
    {
        if (empty($this->photo)) {
            return asset('assets/images/om-dhoot-clean.jpg');
        }

        if (str_starts_with($this->photo, 'http://') || str_starts_with($this->photo, 'https://')) {
            return $this->photo;
        }

        if (str_starts_with($this->photo, 'assets/')) {
            return asset($this->photo);
        }

        return asset('storage/'.ltrim($this->photo, '/'));
    }

    /**
     * Get certificate URL.
     */
    public function getCertificateUrlAttribute(): ?string
    {
        if (empty($this->certificate)) {
            return null;
        }

        if (str_starts_with($this->certificate, 'http://') || str_starts_with($this->certificate, 'https://')) {
            return $this->certificate;
        }

        if (str_starts_with($this->certificate, 'assets/')) {
            return asset($this->certificate);
        }

        return asset('storage/'.ltrim($this->certificate, '/'));
    }

    /**
     * Get category label.
     */
    public function getCategoryLabelAttribute(): string
    {
        return self::CATEGORIES[$this->category]['label'] ?? ucfirst(str_replace('_', ' ', $this->category));
    }

    /**
     * Get category badge color.
     */
    public function getCategoryBadgeAttribute(): string
    {
        return self::CATEGORIES[$this->category]['badge'] ?? '#083B7A';
    }

    /**
     * Get category icon.
     */
    public function getCategoryIconAttribute(): string
    {
        return self::CATEGORIES[$this->category]['icon'] ?? 'fa-solid fa-award';
    }
}
