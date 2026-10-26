<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdmissionEnquiryController extends Controller
{
    /**
     * Display a listing of admission enquiries.
     */
    public function index(Request $request): View
    {
        $query = AdmissionEnquiry::query()->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('class')) {
            $query->where('applying_class', $request->class);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('parent_name', 'like', "%{$search}%")
                    ->orWhere('ward_name', 'like', "%{$search}%")
                    ->orWhere('mobile_number', 'like', "%{$search}%")
                    ->orWhere('notes', 'like', "%{$search}%");
            });
        }

        $enquiries = $query->paginate(15)->withQueryString();

        $counts = [
            'all' => AdmissionEnquiry::count(),
            'new' => AdmissionEnquiry::where('status', 'new')->count(),
            'contacted' => AdmissionEnquiry::where('status', 'contacted')->count(),
            'follow_up' => AdmissionEnquiry::where('status', 'follow_up')->count(),
            'admitted' => AdmissionEnquiry::where('status', 'admitted')->count(),
            'closed' => AdmissionEnquiry::where('status', 'closed')->count(),
        ];

        $classes = [
            'Nursery', 'LKG', 'UKG',
            'Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5',
            'Class 6', 'Class 7', 'Class 8', 'Class 9', 'Class 10',
        ];

        return view('admin.admission-enquiries.index', compact('enquiries', 'counts', 'classes'));
    }

    /**
     * Update the status and counselor remarks.
     */
    public function updateStatus(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'status' => 'required|in:new,contacted,follow_up,admitted,closed',
            'admin_notes' => 'nullable|string|max:1000',
            'counselor_notes' => 'nullable|string|max:1000',
        ]);

        $enquiry = AdmissionEnquiry::findOrFail($id);
        $enquiry->update([
            'status' => $request->status,
            'admin_notes' => $request->input('admin_notes', $request->input('counselor_notes')),
        ]);

        return redirect()->back()->with(
            'success',
            "Enquiry for {$enquiry->ward_name} updated to ".(AdmissionEnquiry::STATUSES[$request->status]['label'] ?? ucfirst($request->status)).'.'
        );
    }

    /**
     * Remove the enquiry from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        $enquiry = AdmissionEnquiry::findOrFail($id);
        $name = $enquiry->ward_name;
        $enquiry->delete();

        return redirect()->back()->with('success', "Admission enquiry for {$name} deleted successfully.");
    }
}
