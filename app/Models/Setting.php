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

    /**
     * Return key site contact and social settings with standard fallbacks.
     *
     * @return array<string, string|null>
     */
    public static function siteSummary(): array
    {
        return [
            'school_name' => static::get('site_school_name', 'Advaita School of Excellence'),
            'affiliation_no' => static::get('site_affiliation_no', '1130920'),
            'phone_primary' => static::get('site_phone_primary', '094130 62851'),
            'phone_secondary' => static::get('site_phone_secondary', '+91 98765 43210'),
            'landline' => static::get('site_landline', '02452-224455'),
            'email_primary' => static::get('site_email_primary', 'info@advaitaschool.edu.in'),
            'email_admissions' => static::get('site_email_admissions', 'admissions@advaitaschool.edu.in'),
            'address' => static::get('site_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra - 431401'),
            'school_hours' => static::get('site_school_hours', 'Mon – Sat | 8:00 AM – 3:00 PM'),
            'whatsapp_number' => static::get('site_whatsapp_number', '919413062851'),
            'facebook_url' => static::get('site_facebook_url', 'https://facebook.com'),
            'instagram_url' => static::get('site_instagram_url', 'https://instagram.com'),
            'youtube_url' => static::get('site_youtube_url', 'https://youtube.com'),
            'linkedin_url' => static::get('site_linkedin_url', 'https://linkedin.com'),
            'google_map_embed' => static::get('site_google_map_embed', 'https://maps.google.com/maps?q=Advaita+School+of+Excellence,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed'),
            'google_map_link' => static::get('site_google_map_link', 'https://www.google.com/maps/place/Advaita+School+of+Excellence/@19.2634,76.7749,17z/'),
        ];
    }
}
