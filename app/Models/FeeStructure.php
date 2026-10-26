<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'admission_fee' => 'decimal:2',
        'tuition_fee' => 'decimal:2',
        'development_fee' => 'decimal:2',
        'exam_fee' => 'decimal:2',
        'annual_total' => 'decimal:2',
        'term1_fee' => 'decimal:2',
        'term2_fee' => 'decimal:2',
        'term3_fee' => 'decimal:2',
        'is_published' => 'boolean',
        'order' => 'integer',
    ];

    public const WINGS = [
        'pre_primary' => [
            'label' => 'Pre-Primary Wing',
            'classes' => 'Nursery · LKG · UKG',
            'badge' => '#F37021',
        ],
        'primary' => [
            'label' => 'Primary Wing',
            'classes' => 'Classes 1 to 5',
            'badge' => '#2563EB',
        ],
        'secondary' => [
            'label' => 'Secondary Wing',
            'classes' => 'Classes 6 to 10',
            'badge' => '#7C3AED',
        ],
    ];

    /**
     * Scope published items ordered.
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true)->orderBy('order')->orderBy('id');
    }

    /**
     * Scope by wing.
     */
    public function scopeByWing(Builder $query, string $wing): Builder
    {
        return $query->where('wing', $wing)->orderBy('order')->orderBy('id');
    }

    /**
     * Helper for formatted annual total.
     */
    public function getFormattedAnnualTotalAttribute(): string
    {
        return '₹ '.number_format((float) ($this->annual_total ?: ($this->tuition_fee + $this->development_fee + $this->exam_fee)), 0);
    }
}
