<?php

namespace App\Http\Controllers;

use App\Models\OnlineRegistration;
use App\Models\Setting;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        $seo = [
            'title' => Setting::get('seo_online_registration_title', 'Online Student Registration (2026-27) - Advaita School of Excellence'),
            'description' => Setting::get('seo_online_registration_description', 'Apply online for student admission at Advaita School of Excellence, Parbhani. Fast, secure, and hassle-free registration form for academic year 2026-27.'),
            'keywords' => Setting::get('seo_online_registration_keywords', 'Online school admission form, student registration Parbhani, Advaita online admission'),
        ];

        return view('pages.online-registration', compact('seo'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'full_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'branch' => 'nullable|string|max:255',
            'academic_year' => 'nullable|string|max:50',
            'parent_course' => 'nullable|string|max:255',
            'applying_class' => 'nullable|string|max:100',
            'highest_qualification' => 'nullable|string|max:255',
            'percentage' => 'nullable|string|max:50',
            'year_passed' => 'nullable|string|max:50',
            'prev_school_name' => 'nullable|string|max:255',
            'prev_school_address' => 'nullable|string',
            'first_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:50',
            'dob' => 'nullable|date',
            'place_of_birth' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:50',
            'nationality' => 'nullable|string|max:100',
            'religion' => 'nullable|string|max:100',
            'caste' => 'nullable|string|max:100',
            'mother_tongue' => 'nullable|string|max:100',
            'aadhar_no' => 'nullable|string|max:50',
            'father_name' => 'nullable|string|max:255',
            'father_occupation' => 'nullable|string|max:255',
            'father_phone' => 'nullable|string|max:50',
            'mother_name' => 'nullable|string|max:255',
            'mother_occupation' => 'nullable|string|max:255',
            'mother_phone' => 'nullable|string|max:50',
            'residential_address' => 'nullable|string',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'pincode' => 'nullable|string|max:20',
            'emergency_contact_name' => 'nullable|string|max:255',
            'emergency_contact_phone' => 'nullable|string|max:50',
            'transportation_required' => 'nullable|string|max:50',
            'doc_photo' => 'nullable|file|max:5120',
            'doc_marksheet' => 'nullable|file|max:5120',
            'doc_tc' => 'nullable|file|max:5120',
            'doc_eligibility' => 'nullable|file|max:5120',
        ]);

        // File uploads
        if ($request->hasFile('doc_photo')) {
            $validated['student_photo_path'] = $request->file('doc_photo')->store('registrations/photos', 'public');
        }
        if ($request->hasFile('doc_marksheet')) {
            $validated['prev_marksheet_path'] = $request->file('doc_marksheet')->store('registrations/marksheets', 'public');
        }
        if ($request->hasFile('doc_tc')) {
            $validated['transfer_certificate_path'] = $request->file('doc_tc')->store('registrations/tc', 'public');
        }
        if ($request->hasFile('doc_eligibility')) {
            $validated['birth_certificate_path'] = $request->file('doc_eligibility')->store('registrations/eligibility', 'public');
        }

        // Generate application reference number
        $count = OnlineRegistration::count() + 1;
        $applicationNo = 'ADV-'.date('Y').'-'.str_pad($count, 4, '0', STR_PAD_LEFT);
        $validated['application_no'] = $applicationNo;
        $validated['declaration_accepted'] = true;
        $validated['status'] = 'submitted';

        $registration = OnlineRegistration::create($validated);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'application_no' => $applicationNo,
                'message' => "Application submitted successfully! Your Application ID is {$applicationNo}. Our admissions team will contact you shortly.",
                'redirect_url' => route('online-registration.success', $applicationNo),
                'registration' => $registration,
            ]);
        }

        return redirect()->route('online-registration.success', $applicationNo)->with(
            'success',
            "Application submitted successfully! Your Application ID is {$applicationNo}."
        );
    }

    /**
     * Display the application success & printable acknowledgement receipt page.
     */
    public function success(string $applicationNo)
    {
        $registration = OnlineRegistration::where('application_no', $applicationNo)->firstOrFail();

        $seo = [
            'title' => "Application Submitted ({$applicationNo}) - Advaita School of Excellence",
            'description' => "Your admission registration has been submitted successfully with Application ID {$applicationNo}.",
            'keywords' => 'Admission confirmation, application receipt, Advaita School of Excellence',
        ];

        return view('pages.registration-success', compact('registration', 'seo'));
    }
}
