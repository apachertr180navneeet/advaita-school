<?php

namespace Database\Seeders;

use App\Models\ContactInquiry;
use App\Models\OnlineRegistration;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with default Admin and realistic dummy data.
     */
    public function run(): void
    {
        // 1. Create Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@advaita.com'],
            [
                'name' => 'Advaita Administrator',
                'password' => Hash::make('admin123'),
            ]
        );

        // Also add secondary demo admin
        User::updateOrCreate(
            ['email' => 'admin@advaitaschool.edu.in'],
            [
                'name' => 'Principal Desk Admin',
                'password' => Hash::make('password'),
            ]
        );

        // 2. Seed Realistic Online Registrations (if empty)
        if (OnlineRegistration::count() === 0) {
            OnlineRegistration::create([
                'application_no' => 'ADV-2026-0001',
                'username' => 'aarav_d',
                'email' => 'rajesh.deshmukh@gmail.com',
                'full_name' => 'Aarav Rajesh Deshmukh',
                'phone' => '9823145678',
                'branch' => 'Advaita School of Excellence, Parbhani',
                'academic_year' => '2026-2027',
                'parent_course' => 'School (Classes 1 to 10)',
                'applying_class' => 'Class 5',
                'highest_qualification' => 'Primary (Class 1 to 5)',
                'percentage' => '88.5%',
                'year_passed' => '2026',
                'prev_school_name' => 'Podar International School, Parbhani',
                'prev_school_address' => 'Kalyan Nagar, Parbhani',
                'first_name' => 'Aarav',
                'middle_name' => 'Rajesh',
                'last_name' => 'Deshmukh',
                'gender' => 'Male',
                'dob' => '2015-06-14',
                'place_of_birth' => 'Parbhani',
                'blood_group' => 'B+',
                'nationality' => 'Indian',
                'religion' => 'Hindu',
                'caste' => 'Maratha',
                'mother_tongue' => 'Marathi',
                'aadhar_no' => '4589 1234 5678',
                'father_name' => 'Rajesh Deshmukh',
                'father_occupation' => 'Government Officer',
                'father_phone' => '9823145678',
                'mother_name' => 'Sunita Deshmukh',
                'mother_occupation' => 'Professor',
                'mother_phone' => '9823145679',
                'residential_address' => 'Plot No 24, Shivaji Nagar, Behind Collector Office, Parbhani',
                'city' => 'Parbhani',
                'state' => 'Maharashtra',
                'pincode' => '431401',
                'emergency_contact_name' => 'Rajesh Deshmukh',
                'emergency_contact_phone' => '9823145678',
                'transportation_required' => 'Yes',
                'declaration_accepted' => true,
                'status' => 'submitted',
            ]);

            OnlineRegistration::create([
                'application_no' => 'ADV-2026-0002',
                'username' => 'ananya_k',
                'email' => 'vinayak.kulkarni@yahoo.com',
                'full_name' => 'Ananya Vinayak Kulkarni',
                'phone' => '9890123456',
                'branch' => 'Advaita School of Excellence, Parbhani',
                'academic_year' => '2026-2027',
                'parent_course' => 'School (Classes 1 to 10)',
                'applying_class' => 'Class 1',
                'highest_qualification' => 'Pre-Primary / Kindergarten',
                'percentage' => 'Grade A+',
                'year_passed' => '2026',
                'prev_school_name' => 'Kidzee Pre-School',
                'prev_school_address' => 'Station Road, Parbhani',
                'first_name' => 'Ananya',
                'middle_name' => 'Vinayak',
                'last_name' => 'Kulkarni',
                'gender' => 'Female',
                'dob' => '2019-09-22',
                'place_of_birth' => 'Parbhani',
                'blood_group' => 'O+',
                'nationality' => 'Indian',
                'religion' => 'Hindu',
                'caste' => 'Brahmin',
                'mother_tongue' => 'Marathi',
                'aadhar_no' => '6781 2345 9012',
                'father_name' => 'Vinayak Kulkarni',
                'father_occupation' => 'Software Engineer',
                'father_phone' => '9890123456',
                'mother_name' => 'Pooja Kulkarni',
                'mother_occupation' => 'Chartered Accountant',
                'mother_phone' => '9890123457',
                'residential_address' => 'Row House 4, Gururaj Colony, Vasmat Road, Parbhani',
                'city' => 'Parbhani',
                'state' => 'Maharashtra',
                'pincode' => '431401',
                'emergency_contact_name' => 'Vinayak Kulkarni',
                'emergency_contact_phone' => '9890123456',
                'transportation_required' => 'Yes',
                'declaration_accepted' => true,
                'status' => 'under_review',
            ]);

            OnlineRegistration::create([
                'application_no' => 'ADV-2026-0003',
                'username' => 'rohan_patil',
                'email' => 'patil.enterprises@gmail.com',
                'full_name' => 'Rohan Mahesh Patil',
                'phone' => '9422112233',
                'branch' => 'Advaita School of Excellence, Parbhani',
                'academic_year' => '2026-2027',
                'parent_course' => 'Foundation NEET / IIT',
                'applying_class' => 'Class 9',
                'highest_qualification' => 'Middle School (Class 6 to 8)',
                'percentage' => '94.2%',
                'year_passed' => '2026',
                'prev_school_name' => 'Saraswati Vidyalaya',
                'prev_school_address' => 'Subhash Road, Parbhani',
                'first_name' => 'Rohan',
                'middle_name' => 'Mahesh',
                'last_name' => 'Patil',
                'gender' => 'Male',
                'dob' => '2011-12-05',
                'place_of_birth' => 'Nanded',
                'blood_group' => 'A+',
                'nationality' => 'Indian',
                'religion' => 'Hindu',
                'caste' => 'Maratha',
                'mother_tongue' => 'Marathi',
                'aadhar_no' => '9912 3456 7810',
                'father_name' => 'Mahesh Patil',
                'father_occupation' => 'Businessman',
                'father_phone' => '9422112233',
                'mother_name' => 'Rekha Patil',
                'mother_occupation' => 'Homemaker',
                'mother_phone' => '9422112234',
                'residential_address' => 'Flat 302, Sai Heights, Jintur Road, Parbhani',
                'city' => 'Parbhani',
                'state' => 'Maharashtra',
                'pincode' => '431401',
                'emergency_contact_name' => 'Mahesh Patil',
                'emergency_contact_phone' => '9422112233',
                'transportation_required' => 'No',
                'declaration_accepted' => true,
                'status' => 'approved',
            ]);

            OnlineRegistration::create([
                'application_no' => 'ADV-2026-0004',
                'username' => 'priya_sharma',
                'email' => 'amit.sharma.pbh@gmail.com',
                'full_name' => 'Priya Amit Sharma',
                'phone' => '9765432100',
                'branch' => 'Advaita School of Excellence, Parbhani',
                'academic_year' => '2026-2027',
                'parent_course' => 'Pre-Primary Wing (Nursery - UKG)',
                'applying_class' => 'Nursery',
                'highest_qualification' => 'Pre-Primary / Kindergarten',
                'percentage' => 'N/A',
                'year_passed' => '2026',
                'prev_school_name' => 'First Admission',
                'prev_school_address' => 'Parbhani',
                'first_name' => 'Priya',
                'middle_name' => 'Amit',
                'last_name' => 'Sharma',
                'gender' => 'Female',
                'dob' => '2022-03-18',
                'place_of_birth' => 'Parbhani',
                'blood_group' => 'AB+',
                'nationality' => 'Indian',
                'religion' => 'Hindu',
                'caste' => 'General',
                'mother_tongue' => 'Hindi',
                'aadhar_no' => '1234 5678 9012',
                'father_name' => 'Amit Sharma',
                'father_occupation' => 'Bank Manager',
                'father_phone' => '9765432100',
                'mother_name' => 'Kavita Sharma',
                'mother_occupation' => 'Teacher',
                'mother_phone' => '9765432101',
                'residential_address' => 'Bunglow 12, Anand Nagar, Near Railway Station, Parbhani',
                'city' => 'Parbhani',
                'state' => 'Maharashtra',
                'pincode' => '431401',
                'emergency_contact_name' => 'Amit Sharma',
                'emergency_contact_phone' => '9765432100',
                'transportation_required' => 'Yes',
                'declaration_accepted' => true,
                'status' => 'submitted',
            ]);
        }

        // 3. Seed Realistic Contact Inquiries (if empty)
        if (ContactInquiry::count() === 0) {
            ContactInquiry::create([
                'name' => 'Vivek Rathi',
                'email' => 'vivek.rathi@gmail.com',
                'phone' => '9822113344',
                'subject' => 'Admissions enquiry',
                'message' => 'Hello team, what is the age cutoff criteria for Nursery & LKG admissions for academic year 2026-27? Also, is mid-term transfer accepted?',
                'status' => 'new',
            ]);

            ContactInquiry::create([
                'name' => 'Meera Kulkarni',
                'email' => 'meera.k@gmail.com',
                'phone' => '9890445566',
                'subject' => 'Fee Structure Enquiry',
                'message' => 'Kindly share the detailed fee breakdown for Class 8 including lab fees, activity fees, and bus transportation route for Vasmat Road.',
                'status' => 'in_progress',
            ]);

            ContactInquiry::create([
                'name' => 'Dr. Anand Shinde',
                'email' => 'dr.shinde.hospital@gmail.com',
                'phone' => '9423112299',
                'subject' => 'Academic Curriculum & Foundation',
                'message' => 'Interested in knowing details about the NEET/IIT Foundation mentorship program for Class 9 students and weekend doubt-solving sessions.',
                'status' => 'resolved',
            ]);

            ContactInquiry::create([
                'name' => 'Sunita Gaikwad',
                'email' => 'sunita.gaikwad82@gmail.com',
                'phone' => '9766554433',
                'subject' => 'Campus Tour Booking',
                'message' => 'We would love to visit the campus and robotics lab this Saturday morning around 10:30 AM with our daughter. Please confirm availability.',
                'status' => 'new',
            ]);
        }

        // 4. Seed Sliders, Pillars, Why Choose, Gallery, Testimonials, FAQs, All Page SEO, Global Site Settings & Page Content
        $this->call([
            SliderSeeder::class,
            PillarSeeder::class,
            WhyChooseCardSeeder::class,
            GalleryItemSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            AllPageSeoSeeder::class,
            SiteSettingSeeder::class,
            PageContentSeeder::class,
        ]);
    }
}
