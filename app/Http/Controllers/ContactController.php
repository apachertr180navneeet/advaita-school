<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $seo = [
            'title' => Setting::get('seo_contact_title', 'Contact Us - Advaita School of Excellence, Parbhani'),
            'description' => Setting::get('seo_contact_description', 'Get in touch with Advaita School of Excellence, Parbhani. Find our address, phone numbers, email, interactive Google map, and visit hours.'),
            'keywords' => Setting::get('seo_contact_keywords', 'Contact Advaita School, Parbhani school phone number, school address, admission contact'),
        ];

        $site = [
            'phone_primary' => Setting::get('site_phone_primary', '+91 9689898973'),
            'phone_secondary' => Setting::get('site_phone_secondary', '+91 9689898973'),
            'landline' => Setting::get('site_landline', '+91 9689898973'),
            'whatsapp_number' => Setting::get('site_whatsapp_number', '919689898973'),
            'email_primary' => Setting::get('site_email_primary', 'admissions.advaita@gmail.com'),
            'email_admissions' => Setting::get('site_email_admissions', 'admissions.advaita@gmail.com'),
            'email_principal' => Setting::get('site_email_principal', 'principal.advaita2019@gmail.com'),
            'address' => Setting::get('site_address', '394, Madhav Nagar, Gangakhed Rd, Brahmangaon, Tq. Dist. Parbhani (MS)'),
            'school_hours' => Setting::get('site_school_hours', 'Mon – Sat | 8:00 AM – 3:00 PM'),
            'office_hours' => Setting::get('site_office_hours', 'Mon – Sat | 9:00 AM – 5:00 PM'),
            'google_map_embed' => Setting::get('site_google_map_embed', 'https://maps.google.com/maps?q=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani&t=&z=15&ie=UTF8&iwloc=&output=embed'),
            'google_map_link' => Setting::get('site_google_map_link', 'https://www.google.com/maps/search/?api=1&query=394,+Madhav+Nagar,+Gangakhed+Rd,+Brahmangaon,+Parbhani'),
        ];

        return view('pages.contact', compact('seo', 'site'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:5',
        ]);

        $inquiry = ContactInquiry::create($validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you for reaching out! Our admissions counsellor will get back to you within 24 hours.',
                'inquiry' => $inquiry,
            ]);
        }

        return redirect()->back()->with('success', 'Thank you for reaching out! Our admissions counsellor will get back to you within 24 hours.');
    }
}
