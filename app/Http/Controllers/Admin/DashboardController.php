<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use App\Models\OnlineRegistration;
use App\Models\Pillar;
use App\Models\Slider;
use App\Models\WhyChooseCard;

class DashboardController extends Controller
{
    /**
     * Display the Admin Dashboard with both Online Registrations and Contact Enquiries.
     */
    public function index()
    {
        $stats = [
            'total_registrations' => OnlineRegistration::count(),
            'new_registrations' => OnlineRegistration::where('status', 'submitted')->count(),
            'reviewed_registrations' => OnlineRegistration::where('status', 'under_review')->count(),
            'approved_registrations' => OnlineRegistration::where('status', 'approved')->count(),

            'total_inquiries' => ContactInquiry::count(),
            'new_inquiries' => ContactInquiry::where('status', 'new')->count(),
            'resolved_inquiries' => ContactInquiry::where('status', 'resolved')->count(),

            'total_sliders' => Slider::count(),
            'active_sliders' => Slider::where('is_active', true)->count(),

            'total_pillars' => Pillar::count(),
            'active_pillars' => Pillar::where('is_active', true)->count(),

            'total_why_choose' => WhyChooseCard::count(),
            'active_why_choose' => WhyChooseCard::where('is_active', true)->count(),
        ];

        $registrations = OnlineRegistration::latest()->get();
        $inquiries = ContactInquiry::latest()->get();

        // Create unified chronological list of both submissions
        $combinedList = collect();

        foreach ($registrations as $reg) {
            $combinedList->push([
                'type' => 'registration',
                'id' => $reg->id,
                'identifier' => $reg->application_no,
                'name' => $reg->full_name,
                'subtext' => 'Applying for: '.($reg->applying_class ?? 'N/A').($reg->academic_year ? ' ('.$reg->academic_year.')' : ''),
                'contact_name' => $reg->father_name ?? $reg->mother_name ?? $reg->full_name,
                'phone' => $reg->phone,
                'email' => $reg->email,
                'details' => ($reg->prev_school_name ? 'Prev: '.$reg->prev_school_name : 'New Admission').($reg->city ? ' · '.$reg->city : ''),
                'status' => $reg->status,
                'status_route' => route('admin.registrations.status', $reg->id),
                'show_route' => route('admin.registrations.show', $reg->id),
                'created_at' => $reg->created_at,
                'raw' => $reg->toArray(),
            ]);
        }

        foreach ($inquiries as $inq) {
            $combinedList->push([
                'type' => 'inquiry',
                'id' => $inq->id,
                'identifier' => 'INQ-'.str_pad($inq->id, 4, '0', STR_PAD_LEFT),
                'name' => $inq->name,
                'subtext' => 'Subject: '.($inq->subject ?? 'General Enquiry'),
                'contact_name' => $inq->name,
                'phone' => $inq->phone,
                'email' => $inq->email,
                'details' => $inq->message,
                'status' => $inq->status,
                'status_route' => route('admin.inquiries.status', $inq->id),
                'show_route' => route('admin.inquiries.show', $inq->id),
                'created_at' => $inq->created_at,
                'raw' => $inq->toArray(),
            ]);
        }

        $combinedList = $combinedList->sortByDesc('created_at')->values();

        return view('admin.dashboard', compact(
            'stats',
            'registrations',
            'inquiries',
            'combinedList'
        ));
    }
}
