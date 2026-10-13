<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    /**
     * Display a listing of contact inquiries.
     */
    public function index(Request $request)
    {
        $query = ContactInquiry::query()->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $inquiries = $query->paginate(15)->withQueryString();

        return view('admin.inquiries.index', compact('inquiries'));
    }

    /**
     * Display the specified inquiry details.
     */
    public function show($id)
    {
        $inquiry = ContactInquiry::findOrFail($id);

        if (request()->ajax() || request()->wantsJson()) {
            return response()->json($inquiry);
        }

        return view('admin.inquiries.show', compact('inquiry'));
    }

    /**
     * Update the inquiry status.
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:new,in_progress,resolved',
        ]);

        $inquiry = ContactInquiry::findOrFail($id);
        $inquiry->update(['status' => $request->status]);

        return redirect()->back()->with(
            'success',
            "Inquiry from {$inquiry->name} marked as " . ucfirst(str_replace('_', ' ', $request->status)) . "."
        );
    }

    /**
     * Remove the inquiry from storage.
     */
    public function destroy($id)
    {
        $inquiry = ContactInquiry::findOrFail($id);
        $name = $inquiry->name;
        $inquiry->delete();

        return redirect()->back()->with('success', "Inquiry from {$name} has been removed.");
    }
}
