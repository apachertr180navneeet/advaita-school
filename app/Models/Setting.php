<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    /**
     * Get a setting value by key, with optional fallback default.
     */
    public static function get(string $key, ?string $default = null): ?string
    {
        $setting = static::where('key', $key)->first();

        return $setting ? ($setting->value ?? $default) : $default;
    }

    /**
     * Set a setting value by key.
     */
    public static function set(string $key, ?string $value): self
    {
        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }
}
