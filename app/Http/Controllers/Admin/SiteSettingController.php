<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteSettingController extends Controller
{
    /**
     * Display the global site settings view.
     */
    public function index(): View
    {
        $settings = [
            'site_school_name' => Setting::get('site_school_name', 'Advaita School of Excellence'),
            'site_tagline' => Setting::get('site_tagline', 'Sanmati Sevabhavi Sanstha'),
            'site_affiliation_no' => Setting::get('site_affiliation_no', '1130920'),
            'site_school_code' => Setting::get('site_school_code', '30878'),
            'site_phone_primary' => Setting::get('site_phone_primary', '094130 62851'),
            'site_phone_secondary' => Setting::get('site_phone_secondary', '+91 98765 43210'),
            'site_landline' => Setting::get('site_landline', '02452-224455'),
            'site_whatsapp_number' => Setting::get('site_whatsapp_number', '919413062851'),
            'site_email_primary' => Setting::get('site_email_primary', 'info@advaitaschool.edu.in'),
            'site_email_admissions' => Setting::get('site_email_admissions', 'admissions@advaitaschool.edu.in'),
            'site_address' => Setting::get('site_address', 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra - 431401'),
            'site_school_hours' => Setting::get('site_school_hours', 'Mon – Sat | 8:00 AM – 3:00 PM'),
            'site_office_hours' => Setting::get('site_office_hours', 'Mon – Sat | 9:00 AM – 5:00 PM'),
            'site_facebook_url' => Setting::get('site_facebook_url', 'https://facebook.com'),
            'site_instagram_url' => Setting::get('site_instagram_url', 'https://instagram.com'),
            'site_youtube_url' => Setting::get('site_youtube_url', 'https://youtube.com'),
            'site_linkedin_url' => Setting::get('site_linkedin_url', 'https://linkedin.com'),
            'site_google_map_embed' => Setting::get('site_google_map_embed', 'https://maps.google.com/maps?q=Advaita+School+of+Excellence,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed'),
            'site_google_map_link' => Setting::get('site_google_map_link', 'https://www.google.com/maps/place/Advaita+School+of+Excellence/@19.2634,76.7749,17z/'),
        ];

        return view('admin.site-settings.index', compact('settings'));
    }

    /**
     * Update global site settings.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'site_school_name' => ['required', 'string', 'max:255'],
            'site_tagline' => ['nullable', 'string', 'max:255'],
            'site_affiliation_no' => ['nullable', 'string', 'max:100'],
            'site_school_code' => ['nullable', 'string', 'max:100'],
            'site_phone_primary' => ['required', 'string', 'max:50'],
            'site_phone_secondary' => ['nullable', 'string', 'max:50'],
            'site_landline' => ['nullable', 'string', 'max:50'],
            'site_whatsapp_number' => ['nullable', 'string', 'max:50'],
            'site_email_primary' => ['required', 'email', 'max:255'],
            'site_email_admissions' => ['nullable', 'email', 'max:255'],
            'site_address' => ['required', 'string', 'max:500'],
            'site_school_hours' => ['nullable', 'string', 'max:100'],
            'site_office_hours' => ['nullable', 'string', 'max:100'],
            'site_facebook_url' => ['nullable', 'url', 'max:255'],
            'site_instagram_url' => ['nullable', 'url', 'max:255'],
            'site_youtube_url' => ['nullable', 'url', 'max:255'],
            'site_linkedin_url' => ['nullable', 'url', 'max:255'],
            'site_google_map_embed' => ['nullable', 'string', 'max:1000'],
            'site_google_map_link' => ['nullable', 'string', 'max:1000'],
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value ? trim($value) : null);
        }

        return redirect()->route('admin.site-settings.index')->with('success', 'Global site settings and contact information updated successfully!');
    }
}
