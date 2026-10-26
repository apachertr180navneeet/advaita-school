<?php

namespace Database\Seeders;

use App\Models\AdmissionEnquiry;
use App\Models\FeeStructure;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class AdmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Initial Global Admissions & Fee Settings
        Setting::updateOrCreate(
            ['key' => 'fee_structure_published'],
            ['value' => '0'] // Default to under-review notice as per requirements
        );

        Setting::updateOrCreate(
            ['key' => 'fee_academic_year'],
            ['value' => '2026–27']
        );

        Setting::updateOrCreate(
            ['key' => 'fee_last_updated'],
            ['value' => date('F Y')]
        );

        Setting::updateOrCreate(
            ['key' => 'fee_pending_notice'],
            ['value' => 'The class-wise fee structure for Academic Session 2026–27 is currently under final review and will be published shortly upon approval by school management. For provisional fee estimates or immediate admission counseling, please contact our admissions office or submit a Quick Enquiry.']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_counsellor_name'],
            ['value' => 'Ms. Vaishnavi']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_counsellor_phone'],
            ['value' => '9689898973']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_school_phone1'],
            ['value' => '9689898973']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_school_phone2'],
            ['value' => '9146066216']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_whatsapp_number'],
            ['value' => '9689898973']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_whatsapp_message'],
            ['value' => 'Hello, I would like to enquire about school admission. Please share the admission process, eligibility criteria, required documents, and fee structure.']
        );

        Setting::updateOrCreate(
            ['key' => 'school_official_address'],
            ['value' => 'Near Sanmati Campus, Jintur Road, Parbhani, Maharashtra – 431401']
        );

        Setting::updateOrCreate(
            ['key' => 'school_maps_destination'],
            ['value' => 'Advaita School of Excellence, Jintur Road, Parbhani, Maharashtra 431401']
        );

        Setting::updateOrCreate(
            ['key' => 'school_maps_directions_url'],
            ['value' => 'https://www.google.com/maps/dir/?api=1&destination=Advaita+School+of+Excellence,+Jintur+Road,+Parbhani,+Maharashtra+431401']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_helpline_phone'],
            ['value' => '9689898973']
        );

        Setting::updateOrCreate(
            ['key' => 'admission_helpline_email'],
            ['value' => 'admissions@advaita.edu.in']
        );

        // 2. Class-Wise Fee Structures (Management drafts)
        $classes = [
            ['class_name' => 'Nursery', 'wing' => 'pre_primary', 'tuition_fee' => 38000, 'dev_fee' => 6000, 'exam_fee' => 2000, 'term1' => 18000, 'term2' => 14000, 'term3' => 14000, 'order' => 1],
            ['class_name' => 'LKG', 'wing' => 'pre_primary', 'tuition_fee' => 40000, 'dev_fee' => 6000, 'exam_fee' => 2000, 'term1' => 19000, 'term2' => 14500, 'term3' => 14500, 'order' => 2],
            ['class_name' => 'UKG', 'wing' => 'pre_primary', 'tuition_fee' => 42000, 'dev_fee' => 6000, 'exam_fee' => 2000, 'term1' => 20000, 'term2' => 15000, 'term3' => 15000, 'order' => 3],
            ['class_name' => 'Class 1', 'wing' => 'primary', 'tuition_fee' => 44000, 'dev_fee' => 7000, 'exam_fee' => 2500, 'term1' => 21500, 'term2' => 16000, 'term3' => 16000, 'order' => 4],
            ['class_name' => 'Class 2', 'wing' => 'primary', 'tuition_fee' => 46000, 'dev_fee' => 7000, 'exam_fee' => 2500, 'term1' => 22500, 'term2' => 16500, 'term3' => 16500, 'order' => 5],
            ['class_name' => 'Class 3', 'wing' => 'primary', 'tuition_fee' => 48000, 'dev_fee' => 7000, 'exam_fee' => 2500, 'term1' => 23500, 'term2' => 17000, 'term3' => 17000, 'order' => 6],
            ['class_name' => 'Class 4', 'wing' => 'primary', 'tuition_fee' => 50000, 'dev_fee' => 7500, 'exam_fee' => 2500, 'term1' => 24500, 'term2' => 17750, 'term3' => 17750, 'order' => 7],
            ['class_name' => 'Class 5', 'wing' => 'primary', 'tuition_fee' => 52000, 'dev_fee' => 7500, 'exam_fee' => 2500, 'term1' => 25500, 'term2' => 18250, 'term3' => 18250, 'order' => 8],
            ['class_name' => 'Class 6', 'wing' => 'secondary', 'tuition_fee' => 55000, 'dev_fee' => 8000, 'exam_fee' => 3000, 'term1' => 27000, 'term2' => 19500, 'term3' => 19500, 'order' => 9],
            ['class_name' => 'Class 7', 'wing' => 'secondary', 'tuition_fee' => 58000, 'dev_fee' => 8000, 'exam_fee' => 3000, 'term1' => 28000, 'term2' => 20500, 'term3' => 20500, 'order' => 10],
            ['class_name' => 'Class 8', 'wing' => 'secondary', 'tuition_fee' => 60000, 'dev_fee' => 8500, 'exam_fee' => 3500, 'term1' => 29500, 'term2' => 21250, 'term3' => 21250, 'order' => 11],
            ['class_name' => 'Class 9', 'wing' => 'secondary', 'tuition_fee' => 64000, 'dev_fee' => 9000, 'exam_fee' => 4000, 'term1' => 31500, 'term2' => 22750, 'term3' => 22750, 'order' => 12],
            ['class_name' => 'Class 10', 'wing' => 'secondary', 'tuition_fee' => 68000, 'dev_fee' => 9000, 'exam_fee' => 4500, 'term1' => 33500, 'term2' => 24000, 'term3' => 24000, 'order' => 13],
        ];

        foreach ($classes as $item) {
            $annualTotal = $item['tuition_fee'] + $item['dev_fee'] + $item['exam_fee'];

            FeeStructure::updateOrCreate(
                [
                    'class_name' => $item['class_name'],
                    'academic_year' => '2026-27',
                ],
                [
                    'wing' => $item['wing'],
                    'admission_fee' => 5000,
                    'tuition_fee' => $item['tuition_fee'],
                    'development_fee' => $item['dev_fee'],
                    'exam_fee' => $item['exam_fee'],
                    'annual_total' => $annualTotal,
                    'term1_fee' => $item['term1'],
                    'term2_fee' => $item['term2'],
                    'term3_fee' => $item['term3'],
                    'is_published' => false,
                    'notes' => 'Includes curricular books guidance and sports mentoring.',
                    'order' => $item['order'],
                ]
            );
        }

        // 3. Sample Admission Enquiries
        $enquiries = [
            [
                'parent_name' => 'Dr. Rajesh Patil',
                'ward_name' => 'Aarav Patil',
                'mobile_number' => '9822012345',
                'applying_class' => 'Nursery',
                'academic_year' => '2026-27',
                'notes' => 'Interested in Pre-Primary wing upcoming campus, inquiry for transport from Station Road.',
                'status' => 'new',
            ],
            [
                'parent_name' => 'Mrs. Sneha Deshmukh',
                'ward_name' => 'Isha Deshmukh',
                'mobile_number' => '9423156789',
                'applying_class' => 'Class 6',
                'academic_year' => '2026-27',
                'notes' => 'Inquiry for NEET / IIT Foundation integrated mentorship and Olympiads.',
                'status' => 'contacted',
                'admin_notes' => 'Called parent on 25 Oct. Invited for campus counseling session on Saturday.',
            ],
            [
                'parent_name' => 'Mr. Vikram Shinde',
                'ward_name' => 'Aditya Shinde',
                'mobile_number' => '9890123456',
                'applying_class' => 'Class 1',
                'academic_year' => '2026-27',
                'notes' => 'Seeking admission for Class 1, inquiry about Abacus and mental arithmetic curriculum.',
                'status' => 'follow_up',
                'admin_notes' => 'Shared brochure on WhatsApp. Scheduled document verification.',
            ],
        ];

        foreach ($enquiries as $enq) {
            AdmissionEnquiry::updateOrCreate(
                ['mobile_number' => $enq['mobile_number'], 'ward_name' => $enq['ward_name']],
                $enq
            );
        }
    }
}
