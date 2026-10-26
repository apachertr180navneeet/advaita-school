<?php

namespace Tests\Feature;

use App\Models\AdmissionEnquiry;
use App\Models\FeeStructure;
use App\Models\OnlineRegistration;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdmissionsModuleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test admissions pages render successfully.
     */
    public function test_admissions_pages_render_successfully(): void
    {
        $response = $this->get(route('admission-info'));
        $response->assertStatus(200);
        $response->assertSee('ADMISSION GUIDELINES');
        $response->assertSee('Documents Required for');
        $response->assertSee('Birth Certificate', false);
        $response->assertSee('Aadhaar Card', false);
        $response->assertSee('Original School Leaving Certificate (SLC)');
        $response->assertSee('Ration Card');
        $response->assertSee('Electricity Bill');
        $response->assertSee('Three Passport-size Photographs of the Student');
        $response->assertSee('Caste Certificate (If Applicable)');
        $response->assertSee('UDISE Number of the Previous / Current School');
        $response->assertSee('Talk to an Admission Counsellor');
        $response->assertSee('Ms. Vaishnavi');
        $response->assertSee('tel:9689898973');
        $response->assertSee('tel:9146066216');
        $response->assertSee('Get Directions to School');
        $response->assertSee('https://www.google.com/maps/dir/?api=1', false);
        $response->assertSee('destination=Advaita+School+of+Excellence', false);
        $response->assertSee('WhatsApp Enquiry');
        $response->assertSee('https://wa.me/919689898973?text=', false);
        $response->assertSee('Transport Facilities');
        $response->assertSee('Quick Admission Enquiry');

        $responseFee = $this->get(route('fee-structure'));
        $responseFee->assertStatus(200);
        $responseFee->assertSee('Fee Structure');
    }

    /**
     * Test admission guidelines page renders with all required sections.
     */
    public function test_admission_guidelines_page_renders_with_all_sections(): void
    {
        $response = $this->get(route('admission-guidelines'));
        $response->assertStatus(200);

        // Header & Scope
        $response->assertSee('Admission Guidelines &');
        $response->assertSee('Eligibility Protocol', false);
        $response->assertSee('PRE-PRIMARY TO GRADE X');

        // Section A: Age Criteria & Phased Schedule
        $response->assertSee('Class-wise Minimum Age Matrix');
        $response->assertSee('Nursery');
        $response->assertSee('Minimum 3 years');
        $response->assertSee('Junior KG');
        $response->assertSee('Minimum 4 years');
        $response->assertSee('Senior KG');
        $response->assertSee('Minimum 5 years');
        $response->assertSee('Grade I');
        $response->assertSee('Minimum 6 years');
        $response->assertSee('Grades II–VIII');
        $response->assertSee('Grades IX–X');
        $response->assertSee('Academic Year 2027–28');
        $response->assertSee('Academic Year 2028–29');
        $response->assertSee('Academic Year 2029–30');
        $response->assertSee('Academic Year 2030–31');
        $response->assertSee('30 June');
        $response->assertSee('government notifications', false);

        // Section B: 7 Required Document Categories
        $response->assertSee('7-Category Verification Checklist');
        $response->assertSee('Birth Certificate');
        $response->assertSee('Passport-Size Photographs');
        $response->assertSee('Aadhaar Details, Where Applicable');
        $response->assertSee('Previous Class Report Card');
        $response->assertSee('Transfer Certificate (TC), Where Applicable');
        $response->assertSee('Identity and Address Proof');
        $response->assertSee('Additional Documents, If Prescribed by the Authorities');

        // Section C: 5-Step Admission Procedure
        $response->assertSee('5-Step Admission Procedure');
        $response->assertSee('Submit Online Enquiry or Registration Form');
        $response->assertSee('Submit the Required Documents');
        $response->assertSee('Attend an Interaction or Assessment', false);
        $response->assertSee('Complete Prescribed Admission Formalities');
        $response->assertSee('Receive Admission Confirmation');

        // Section D: Class Eligibility & CBSE Rules
        $response->assertSee('Class Eligibility &amp; CBSE Rules', false);
        $response->assertSee('Grades II–VIII');
        $response->assertSee('Grade IX');
        $response->assertSee('Grade X');
        $response->assertSee('Direct admission is not permitted except under specific exceptions prescribed by CBSE');

        // Section E: Important Instructions
        $response->assertSee('All information and documents must be accurate and authentic');
        $response->assertSee('Registration does not guarantee admission');
        $response->assertSee('Admissions are subject to seat availability and applicable rules');
        $response->assertSee('Admission to Grades IX and X is subject to applicable CBSE requirements');
        $response->assertSee('Parents must complete all formalities within the stipulated time');

        // Quick Actions & Contacts
        $response->assertSee('Ms. Vaishnavi');
        $response->assertSee('tel:9689898973');
        $response->assertSee('tel:9146066216');
        $response->assertSee('https://wa.me/919689898973?text=', false);
        $response->assertSee('https://www.google.com/maps/dir/?api=1', false);
    }

    /**
     * Test admission guidelines PDF download route.
     */
    public function test_admission_guidelines_pdf_download(): void
    {
        $response = $this->get(route('admission-guidelines.download'));
        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
        $response->assertHeader('Content-Disposition', 'attachment; filename="Admission_Guidelines_Advaita_School_Parbhani.pdf"');
        $this->assertStringStartsWith('%PDF-1.4', $response->getContent());
    }

    /**
     * Test admission guidelines print view route.
     */
    public function test_admission_guidelines_print_view(): void
    {
        $response = $this->get(route('admission-guidelines.print'));
        $response->assertStatus(200);
        $response->assertSee('Admission Guidelines – Advaita School of Excellence, Parbhani');
        $response->assertSee('30 June');
        $response->assertSee('Ms. Vaishnavi');
    }

    /**
     * Test quick enquiry submission saves record with valid 10-digit mobile number.
     */
    public function test_quick_enquiry_submission_succeeds_and_saves_to_database(): void
    {
        $data = [
            'parent_name' => 'Sanjay Patil',
            'ward_name' => 'Aditya Patil',
            'mobile_number' => '9822123456',
            'applying_class' => 'Class 5',
            'academic_year' => '2026-27',
            'notes' => 'Inquiring about bus route for Jintur Road',
        ];

        $response = $this->post(route('admission-enquiry.store'), $data);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('admission_enquiries', [
            'parent_name' => 'Sanjay Patil',
            'ward_name' => 'Aditya Patil',
            'mobile_number' => '9822123456',
            'applying_class' => 'Class 5',
        ]);
    }

    /**
     * Test quick enquiry validation fails with invalid mobile number.
     */
    public function test_quick_enquiry_fails_with_invalid_mobile(): void
    {
        $data = [
            'parent_name' => 'Sanjay Patil',
            'ward_name' => 'Aditya Patil',
            'mobile_number' => '12345', // Invalid
            'applying_class' => 'Class 5',
        ];

        $response = $this->post(route('admission-enquiry.store'), $data);
        $response->assertSessionHasErrors(['mobile_number']);
    }

    /**
     * Test quick enquiry honeypot blocks bots.
     */
    public function test_quick_enquiry_honeypot_blocks_bot(): void
    {
        $data = [
            'parent_name' => 'Bot Parent',
            'ward_name' => 'Bot Child',
            'mobile_number' => '9822123456',
            'website' => 'http://spam-link.com', // Honeypot filled
        ];

        $response = $this->post(route('admission-enquiry.store'), $data);
        $response->assertSessionHas('success'); // Fake success for bots
        $this->assertDatabaseMissing('admission_enquiries', [
            'parent_name' => 'Bot Parent',
        ]);
    }

    /**
     * Test fee structure shows under-review notice when unpublished.
     */
    public function test_fee_structure_shows_under_review_notice_when_unpublished(): void
    {
        Setting::set('fee_structure_published', false);

        $response = $this->get(route('fee-structure'));
        $response->assertStatus(200);
        $response->assertSee('Under Final Management Review');
    }

    /**
     * Test fee structure displays dynamic tables when published.
     */
    public function test_fee_structure_displays_dynamic_tables_when_published(): void
    {
        Setting::set('fee_structure_published', true);

        // Ensure at least one fee entry exists
        FeeStructure::updateOrCreate(
            ['class_name' => 'Class 1'],
            [
                'wing' => 'primary',
                'tuition_fee' => 60000,
                'development_fee' => 10000,
                'exam_fee' => 2500,
                'annual_total' => 72500,
                'term1_fee' => 36250,
                'term2_fee' => 36250,
                'order' => 4,
            ]
        );

        $response = $this->get(route('fee-structure'));
        $response->assertStatus(200);
        $response->assertSee('Class-wise Fee Structure');
        $response->assertSee('Class 1');
        $response->assertSee('72,500');
    }

    /**
     * Test detailed online registration generates unique application ID.
     */
    public function test_online_registration_generates_application_number_and_redirects_to_acknowledgement(): void
    {
        Storage::fake('public');

        $data = [
            'academic_year' => '2026-27',
            'applying_class' => 'Class 1',
            'full_name' => 'Ishaan Sharma',
            'dob' => '2020-05-15',
            'gender' => 'male',
            'father_name' => 'Vikram Sharma',
            'mother_name' => 'Sunita Sharma',
            'primary_mobile' => '9822334455',
            'email' => 'ishaan.parent@gmail.com',
            'address' => 'Station Road, Parbhani',
            'city' => 'Parbhani',
            'state' => 'Maharashtra',
            'pincode' => '431401',
            'declaration' => '1',
            'birth_certificate' => UploadedFile::fake()->create('birth_cert.pdf', 200, 'application/pdf'),
        ];

        $response = $this->post(route('online-registration.store'), $data);

        $registration = OnlineRegistration::where('full_name', 'Ishaan Sharma')->first();
        $this->assertNotNull($registration);
        $this->assertStringStartsWith('ADV-', $registration->application_no);

        $response->assertRedirect(route('online-registration.success', $registration->application_no));

        // Test the acknowledgement receipt view
        $receiptResponse = $this->get(route('online-registration.success', $registration->application_no));
        $receiptResponse->assertStatus(200);
        $receiptResponse->assertSee($registration->application_no);
        $receiptResponse->assertSee('Ishaan Sharma');
    }

    /**
     * Test admin can view and update enquiry status.
     */
    public function test_admin_can_manage_enquiries(): void
    {
        $admin = User::first() ?? User::factory()->create();

        $enquiry = AdmissionEnquiry::create([
            'parent_name' => 'Ganesh Rao',
            'ward_name' => 'Rohan Rao',
            'mobile_number' => '9890123456',
            'applying_class' => 'Class 8',
            'status' => 'pending',
        ]);

        $this->actingAs($admin)
            ->get(route('admin.admission-enquiries.index'))
            ->assertStatus(200)
            ->assertSee('Rohan Rao');

        $this->actingAs($admin)
            ->patch(route('admin.admission-enquiries.status', $enquiry->id), [
                'status' => 'contacted',
                'counselor_notes' => 'Spoke to father, campus visit scheduled.',
            ])
            ->assertRedirect();

        $this->assertDatabaseHas('admission_enquiries', [
            'id' => $enquiry->id,
            'status' => 'contacted',
            'admin_notes' => 'Spoke to father, campus visit scheduled.',
        ]);
    }
}
