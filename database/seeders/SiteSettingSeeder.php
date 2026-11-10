<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Seed global site information, contact details, social links, and timings.
     */
    public function run(): void
    {
        $settings = [
            'site_school_name' => 'Advaita School of Excellence',
            'site_tagline' => 'Sanmati Sevabhavi Sanstha',
            'site_affiliation_no' => '1130920',
            'site_school_code' => '30878',
            'site_phone_primary' => '+91 9689898973',
            'site_phone_secondary' => '+91 9689898973',
            'site_landline' => '+91 9689898973',
            'site_whatsapp_number' => '919689898973',
            'site_email_primary' => 'admissions.advaita@gmail.com',
            'site_email_admissions' => 'admissions.advaita@gmail.com',
            'site_email_principal' => 'principal.advaita2019@gmail.com',
            'site_address' => '394, Madhav Nagar, Gangakhed Rd, Brahmangaon, Tq. Dist. Parbhani (MS)',
            'site_school_hours' => 'Mon – Sat | 8:00 AM – 3:00 PM',
            'site_office_hours' => 'Mon – Sat | 9:00 AM – 5:00 PM',
            'site_facebook_url' => 'https://facebook.com',
            'site_instagram_url' => 'https://instagram.com',
            'site_youtube_url' => 'https://youtube.com',
            'site_linkedin_url' => 'https://linkedin.com',
            'site_google_map_embed' => 'https://maps.google.com/maps?q=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed',
            'site_google_map_link' => 'https://www.google.com/maps/search/?api=1&query=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani',
        ];

        foreach ($settings as $key => $value) {
            Setting::firstOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
