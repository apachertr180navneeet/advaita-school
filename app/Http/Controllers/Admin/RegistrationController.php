<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OnlineRegistration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of online student registrations.
     */
    public function index(Request $request)
    {
        $query = OnlineRegistration::query()->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('class')) {
            $query->where('applying_class', $request->class);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                    ->orWhere('application_no', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('father_name', 'like', "%{$search}%");
            });
        }

        $registrations = $query->paginate(15)->withQueryString();

        return view('admin.registrations.index', compact('registrations'));
    }

    /**
     * Display the specified registration details.
     */
    public function show($id)
    {
        $registration = OnlineRegistration::findOrFail($id);

        if (request()->ajax() || request()->wantsJson()) {
            return response()->json($registration);
        }

        return view('admin.registrations.show', compact('registration'));
    }

    /**
     * Update the registration status.
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:submitted,under_review,approved,rejected',
        ]);

        $registration = OnlineRegistration::findOrFail($id);
        $registration->update(['status' => $request->status]);

        return redirect()->back()->with(
            'success',
            "Application #{$registration->application_no} status updated to ".ucfirst(str_replace('_', ' ', $request->status)).'.'
        );
    }

    /**
     * Remove the registration from storage.
     */
    public function destroy($id)
    {
        $registration = OnlineRegistration::findOrFail($id);
        $appNo = $registration->application_no;
        $registration->delete();

        return redirect()->back()->with('success', "Registration #{$appNo} has been deleted.");
    }
}
