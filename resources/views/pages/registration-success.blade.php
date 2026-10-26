@extends('layouts.app')

@section('title', "Application Received (#{$registration->application_no}) - Advaita School of Excellence")

@section('content')
<main id="main" class="main-content-wrapper" style="background: #F8FAFC; min-height: 85vh; padding: 60px 20px;">
    <div style="max-width: 820px; margin: 0 auto;">
        
        <!-- Success Alert Header -->
        <div class="text-center mb-32">
            <div style="width: 76px; height: 76px; border-radius: 50%; background: linear-gradient(135deg, #10B981 0%, #059669 100%); color: #ffffff; display: inline-flex; align-items: center; justify-content: center; font-size: 36px; box-shadow: 0 10px 25px rgba(16, 185, 129, 0.35); margin-bottom: 20px;">
                <i class="fa-solid fa-check"></i>
            </div>
            <span class="badge-featured-pill mb-8 d-inline-block" style="padding: 6px 16px; font-size: 12px;">
                APPLICATION SUBMISSION CONFIRMED
            </span>
            <h1 class="text-navy fs-28 font-extrabold m-0 mt-2" style="letter-spacing: -0.5px;">
                Thank you! Your Admission Application is Received.
            </h1>
            <p class="text-muted fs-15 mt-8" style="max-width: 600px; margin-left: auto; margin-right: auto;">
                We have successfully recorded the admission registration for <strong>{{ $registration->full_name }}</strong>. Please save your application number for all future correspondence.
            </p>
        </div>

        <!-- Printable Receipt Card -->
        <div id="printableReceipt" style="background: #ffffff; border: 1.5px solid #E2E8F0; border-radius: 20px; overflow: hidden; box-shadow: 0 12px 30px rgba(8, 59, 122, 0.06); margin-bottom: 24px;">
            <!-- Receipt Header -->
            <div style="background: linear-gradient(135deg, #083B7A 0%, #05244C 100%); color: #ffffff; padding: 24px 30px; display: flex; align-items: center; justify-content: space-between; flex-wrap: gap; gap: 16px;">
                <div>
                    <span style="font-size: 11px; font-weight: 800; letter-spacing: 1px; color: #FDBA74; text-transform: uppercase;">Advaita School of Excellence · Parbhani</span>
                    <h3 style="color: #ffffff; margin: 4px 0 0 0; font-size: 20px; font-weight: 800;">Official Registration Acknowledgement</h3>
                    <span style="font-size: 12px; opacity: 0.85;">CBSE Affiliation No. 1130920 · Academic Session {{ $registration->academic_year ?? '2026-27' }}</span>
                </div>
                <div style="text-align: right; background: rgba(255, 255, 255, 0.12); padding: 10px 18px; border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.2);">
                    <div style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; opacity: 0.85;">Application ID</div>
                    <div style="font-size: 20px; font-weight: 800; color: #ffffff;">{{ $registration->application_no }}</div>
                </div>
            </div>

            <!-- Receipt Body Grid -->
            <div style="padding: 30px;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1.5px dashed #E2E8F0;">
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Student Full Name</div>
                        <div class="text-navy fs-16 font-extrabold mt-2">{{ $registration->full_name }}</div>
                    </div>
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Applying For Class</div>
                        <div class="text-navy fs-16 font-extrabold mt-2">
                            <span class="badge-blue-pill fs-13 font-extrabold">{{ $registration->applying_class }}</span>
                        </div>
                    </div>
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Date of Birth / Gender</div>
                        <div class="text-dark fs-14 font-bold mt-2">
                            {{ $registration->dob ? date('d M Y', strtotime($registration->dob)) : 'N/A' }} 
                            @if($registration->gender) · {{ ucfirst($registration->gender) }} @endif
                        </div>
                    </div>
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Submission Timestamp</div>
                        <div class="text-dark fs-14 font-bold mt-2">{{ $registration->created_at->format('d M Y, h:i A') }}</div>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 24px;">
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Parent / Guardian Name</div>
                        <div class="text-dark fs-14 font-bold mt-2">{{ $registration->father_name ?? $registration->mother_name ?? $registration->parent_name ?? 'Parent' }}</div>
                    </div>
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Primary Mobile Number</div>
                        <div class="text-dark fs-14 font-bold mt-2">{{ $registration->phone ?? $registration->father_phone ?? 'N/A' }}</div>
                    </div>
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Email Address</div>
                        <div class="text-dark fs-14 font-bold mt-2">{{ $registration->email ?? 'N/A' }}</div>
                    </div>
                    <div>
                        <div class="text-muted fs-12 font-bold text-uppercase">Residential Address</div>
                        <div class="text-dark fs-13 font-semibold mt-2">{{ $registration->residential_address ?? 'Parbhani' }}, {{ $registration->city ?? 'Parbhani' }}</div>
                    </div>
                </div>

                <!-- Documents to Bring for Verification Box -->
                <div style="background: #FFFFFF; border: 1.5px solid #CBD5E1; border-radius: 14px; padding: 20px; margin-top: 20px;">
                    <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 8px; margin-bottom: 12px; border-bottom: 1px solid #E2E8F0; padding-bottom: 10px;">
                        <h4 class="text-navy fs-15 font-extrabold m-0 d-flex align-items-center gap-8">
                            <i class="fa-solid fa-folder-open text-orange"></i>
                            <span>Documents Required for School Admission (Bring on Visit)</span>
                        </h4>
                        <span style="font-size: 11px; background: #EEF2F6; color: #083B7A; padding: 2px 10px; border-radius: 6px; font-weight: 700;">Checklist</span>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 10px; font-size: 12.5px; color: #334155;">
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">1.</span>
                            <span>Photocopy of the student's Birth Certificate.</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">2.</span>
                            <span>Photocopy of the student's Aadhaar Card.</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">3.</span>
                            <span>Student's Aadhaar Card number.</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">4.</span>
                            <span>Original School Leaving Certificate (SLC).</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px; grid-column: 1 / -1;">
                            <span style="color: #083B7A; font-weight: 800;">5.</span>
                            <span>Photocopy of any one address proof (Ration Card, Electricity Bill, Passport, or Aadhaar Card).</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">6.</span>
                            <span>Photocopy of Aadhaar Card of either parent/guardian.</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">7.</span>
                            <span>Photocopy of PAN Card of either parent/guardian.</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">8.</span>
                            <span>Three passport-size photographs of the student.</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px;">
                            <span style="color: #083B7A; font-weight: 800;">9.</span>
                            <span>Caste Certificate (if applicable).</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px; grid-column: 1 / -1;">
                            <span style="color: #083B7A; font-weight: 800;">10.</span>
                            <span>UDISE Number of the previous/current school.</span>
                        </div>
                    </div>

                    <div style="margin-top: 14px; padding-top: 10px; border-top: 1px dashed #E2E8F0; font-size: 11.5px; color: #64748B;">
                        <strong>Note:</strong> Please verify the school's current document requirements before submitting the application.
                    </div>
                </div>

                <!-- Next Steps Info Box -->
                <div style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-radius: 14px; padding: 20px; margin-top: 20px;">
                    <h4 class="text-navy fs-15 font-extrabold m-0 mb-10 d-flex align-items-center gap-8">
                        <i class="fa-solid fa-list-check text-orange"></i>
                        <span>What Happens Next? (Admissions Procedure)</span>
                    </h4>
                    <ol style="margin: 0; padding-left: 20px; color: #475569; font-size: 13px; line-height: 1.6;">
                        <li><strong>Application Verification:</strong> Our admissions committee will review your submitted academic and personal credentials within 1 working day.</li>
                        <li><strong>Counselor Interaction Call:</strong> You will receive a phone confirmation on <strong>{{ $registration->phone ?? 'your registered mobile' }}</strong> to schedule a campus counseling session.</li>
                        <li><strong>Document Verification:</strong> Please bring the 10 documents listed above along with 2 sets of self-attested photocopies for final verification during your campus visit.</li>
                        <li><strong>Provisional Seat Confirmation:</strong> Upon verification and counseling interaction, admission confirmation and fee deposit slip will be issued.</li>
                    </ol>
                </div>
            </div>

            <!-- Receipt Footer Note -->
            <div style="background: #FAFBFD; padding: 16px 30px; border-top: 1px solid #E2E8F0; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; font-size: 12px; color: #64748B;">
                <span>Advaita School of Excellence · Admissions Helpline: +91 94221 75788 · Email: admissions@advaita.edu.in</span>
                <span>System Generated Electronic Receipt</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex align-items-center justify-content-center gap-14 flex-wrap">
            <button type="button" onclick="window.print()" class="btn-admin btn-primary" style="padding: 12px 24px; font-size: 14px;">
                <i class="fa-solid fa-print"></i>
                <span>Print Acknowledgement Receipt</span>
            </button>
            <a href="{{ route('home') }}" class="btn-admin btn-secondary" style="padding: 12px 24px; font-size: 14px;">
                <i class="fa-solid fa-house"></i>
                <span>Return to Home</span>
            </a>
            <a href="https://wa.me/919422175788?text=Hello%20Advaita%20Admissions%20Office,%20I%20have%20submitted%20online%20application%20{{ $registration->application_no }}%20for%20{{ urlencode($registration->full_name) }}." 
               target="_blank" class="btn-admin" style="padding: 12px 24px; font-size: 14px; background: #25D366; color: #ffffff; border: 1px solid #20BA5A;">
                <i class="fa-brands fa-whatsapp"></i>
                <span>Contact Admissions on WhatsApp</span>
            </a>
        </div>

    </div>
</main>

<style>
@media print {
    header, footer, .adv-navbar-wrapper, .btn-admin, .adv-topbar-wrapper {
        display: none !important;
    }
    body, main {
        background: #ffffff !important;
        padding: 0 !important;
    }
    #printableReceipt {
        box-shadow: none !important;
        border: 1px solid #000000 !important;
    }
}
</style>
@endsection
