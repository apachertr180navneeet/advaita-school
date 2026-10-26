<?php

namespace App\Http\Controllers;

use App\Models\AdmissionEnquiry;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdmissionEnquiryController extends Controller
{
    /**
     * Store a quick admission enquiry submitted by parents.
     */
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        // 1. Honeypot check (hidden field to trap automated bots)
        if ($request->filled('website') || $request->filled('security_token_trap')) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for your interest! Our admissions counselor will contact you shortly.',
                ]);
            }

            return redirect()->back()->with('success', 'Thank you for your interest! Our admissions counselor will contact you shortly.');
        }

        // 2. Validate user input
        $validated = $request->validate([
            'parent_name' => ['required', 'string', 'max:255'],
            'ward_name' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'regex:/^[6-9]\d{9}$/'],
            'applying_class' => ['nullable', 'string', 'max:100'],
            'academic_year' => ['nullable', 'string', 'max:50'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ], [
            'parent_name.required' => "Please enter the parent's or guardian's full name.",
            'ward_name.required' => "Please enter the ward's (child's) name.",
            'mobile_number.required' => 'Please provide a valid 10-digit mobile number.',
            'mobile_number.regex' => 'Please enter a valid 10-digit Indian mobile number starting with 6, 7, 8, or 9.',
        ]);

        // 3. Prevent accidental duplicate submissions within 5 minutes
        $existingRecent = AdmissionEnquiry::where('mobile_number', $validated['mobile_number'])
            ->where('ward_name', $validated['ward_name'])
            ->where('created_at', '>=', Carbon::now()->subMinutes(5))
            ->first();

        if ($existingRecent) {
            $msg = 'We have already received your enquiry for '.$validated['ward_name'].'! Our admissions counselor will contact you shortly on '.$validated['mobile_number'].'.';

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $msg,
                ]);
            }

            return redirect()->back()->with('success', $msg);
        }

        // 4. Save Enquiry
        $validated['ip_address'] = $request->ip();
        $validated['status'] = 'new';
        $validated['academic_year'] = $validated['academic_year'] ?? '2026-27';

        $enquiry = AdmissionEnquiry::create($validated);

        $successMessage = "Thank you {$validated['parent_name']}! Your admission enquiry for {$validated['ward_name']} has been submitted successfully. Our counselor will contact you on {$validated['mobile_number']} within 24 hours.";

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $successMessage,
                'enquiry' => $enquiry,
            ]);
        }

        return redirect()->back()->with('success', $successMessage);
    }
}
