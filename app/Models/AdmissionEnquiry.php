<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Supported Inquiry Statuses.
     */
    public const STATUSES = [
        'new' => [
            'label' => 'New / Uncontacted',
            'badge_class' => 'status-pill inactive',
            'icon' => 'fa-solid fa-clock',
        ],
        'contacted' => [
            'label' => 'Contacted',
            'badge_class' => 'status-pill active',
            'icon' => 'fa-solid fa-phone',
        ],
        'follow_up' => [
            'label' => 'Follow Up Scheduled',
            'badge_class' => 'badge-blue-pill',
            'icon' => 'fa-regular fa-calendar-check',
        ],
        'admitted' => [
            'label' => 'Admitted / Converted',
            'badge_class' => 'badge-featured-pill',
            'icon' => 'fa-solid fa-circle-check',
        ],
        'closed' => [
            'label' => 'Closed',
            'badge_class' => 'badge-neutral',
            'icon' => 'fa-solid fa-xmark',
        ],
    ];

    /**
     * Scope for filtering by status.
     */
    public function scopeByStatus(Builder $query, ?string $status): Builder
    {
        if (! empty($status)) {
            return $query->where('status', $status);
        }

        return $query;
    }

    /**
     * Helper to get status label.
     */
    public function getStatusLabelAttribute(): string
    {
        return self::STATUSES[$this->status]['label'] ?? ucfirst($this->status);
    }
}
