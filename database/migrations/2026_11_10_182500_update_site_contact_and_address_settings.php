<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $contactSettings = [
            'site_address' => '394, Madhav Nagar, Gangakhed Rd, Brahmangaon, Tq. Dist. Parbhani (MS)',
            'school_official_address' => '394, Madhav Nagar, Gangakhed Rd, Brahmangaon, Tq. Dist. Parbhani (MS)',
            'site_email_primary' => 'admissions.advaita@gmail.com',
            'site_email_admissions' => 'admissions.advaita@gmail.com',
            'site_email_principal' => 'principal.advaita2019@gmail.com',
            'contact_email' => 'admissions.advaita@gmail.com',
            'site_phone_primary' => '+91 9689898973',
            'site_phone_secondary' => '+91 9689898973',
            'site_whatsapp_number' => '919689898973',
            'campus_visit_phone_number' => '+91 9689898973',
            'site_google_map_embed' => 'https://maps.google.com/maps?q=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed',
            'site_google_map_link' => 'https://www.google.com/maps/search/?api=1&query=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani',
        ];

        foreach ($contactSettings as $key => $value) {
            DB::table('settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value, 'updated_at' => now(), 'created_at' => now()]
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reversible if needed
    }
};

