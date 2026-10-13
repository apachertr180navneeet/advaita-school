<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
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
