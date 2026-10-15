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
            'site_phone_primary' => '094130 62851',
            'site_phone_secondary' => '+91 98765 43210',
            'site_landline' => '02452-224455',
            'site_whatsapp_number' => '919413062851',
            'site_email_primary' => 'info@advaitaschool.edu.in',
            'site_email_admissions' => 'admissions@advaitaschool.edu.in',
            'site_address' => 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra - 431401',
            'site_school_hours' => 'Mon – Sat | 8:00 AM – 3:00 PM',
            'site_office_hours' => 'Mon – Sat | 9:00 AM – 5:00 PM',
            'site_facebook_url' => 'https://facebook.com',
            'site_instagram_url' => 'https://instagram.com',
            'site_youtube_url' => 'https://youtube.com',
            'site_linkedin_url' => 'https://linkedin.com',
            'site_google_map_embed' => 'https://maps.google.com/maps?q=Advaita+School+of+Excellence,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed',
            'site_google_map_link' => 'https://www.google.com/maps/place/Advaita+School+of+Excellence/@19.2634,76.7749,17z/',
        ];

        foreach ($settings as $key => $value) {
            Setting::firstOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
