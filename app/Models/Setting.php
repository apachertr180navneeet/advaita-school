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
            'phone_primary' => static::get('site_phone_primary', '+91 9689898973'),
            'phone_secondary' => static::get('site_phone_secondary', '+91 9689898973'),
            'landline' => static::get('site_landline', '+91 9689898973'),
            'email_primary' => static::get('site_email_primary', 'admissions.advaita@gmail.com'),
            'email_admissions' => static::get('site_email_admissions', 'admissions.advaita@gmail.com'),
            'email_principal' => static::get('site_email_principal', 'principal.advaita2019@gmail.com'),
            'address' => static::get('site_address', '394, Madhav Nagar, Gangakhed Rd, Brahmangaon, Tq. Dist. Parbhani (MS)'),
            'school_hours' => static::get('site_school_hours', 'Mon – Sat | 8:00 AM – 3:00 PM'),
            'whatsapp_number' => static::get('site_whatsapp_number', '919689898973'),
            'facebook_url' => static::get('site_facebook_url', 'https://facebook.com'),
            'instagram_url' => static::get('site_instagram_url', 'https://instagram.com'),
            'youtube_url' => static::get('site_youtube_url', 'https://youtube.com'),
            'linkedin_url' => static::get('site_linkedin_url', 'https://linkedin.com'),
            'google_map_embed' => static::get('site_google_map_embed', 'https://maps.google.com/maps?q=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed'),
            'google_map_link' => static::get('site_google_map_link', 'https://www.google.com/maps/search/?api=1&query=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani'),
        ];
    }
}
