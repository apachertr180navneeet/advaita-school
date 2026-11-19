<?php

namespace Database\Seeders;

use App\Models\StaffMember;
use Illuminate\Database\Seeder;

class StaffMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staff = [
            [
                'name' => 'Ms. Ivy Brown',
                'designation' => 'Principal',
                'qualification' => 'M.A., M.Ed.',
                'badge_color' => 'orange',
                'photo' => 'assets/images/staff/ivy-brown.jpeg',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Amit Thakare',
                'designation' => 'Accountant',
                'qualification' => 'B.Sc. (Agri)',
                'badge_color' => 'blue',
                'photo' => 'assets/images/staff/amit-thakare.jpg',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Anand Rampurkar',
                'designation' => 'PRO & IT Admin',
                'qualification' => 'B.Sc. (CS)',
                'badge_color' => 'orange',
                'photo' => 'assets/images/staff/anand-rampurkar.jpg',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Shrikant Jogdand',
                'designation' => 'Librarian',
                'qualification' => 'M.A., M.Lib.',
                'badge_color' => 'purple',
                'photo' => 'assets/images/staff/shrikant-jogdand.jpg',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Jagruti Pingalkar',
                'designation' => 'Wellness Teacher',
                'qualification' => 'M.A., B.Ed.',
                'badge_color' => 'green',
                'photo' => 'assets/images/staff/jagruti-pingalkar.jpg',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Urmila Durugkar',
                'designation' => 'Wellness Teacher',
                'qualification' => 'M.A., B.Ed.',
                'badge_color' => 'green',
                'photo' => 'assets/images/staff/urmila-durugkar.jpg',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Deependra Singh',
                'designation' => 'TGT - Science',
                'qualification' => 'M.Sc., B.Ed.',
                'badge_color' => 'blue',
                'photo' => 'assets/images/staff/deependra-singh.jpg',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Sumit Rodge',
                'designation' => 'TGT - Science',
                'qualification' => 'M.Sc., B.Ed.',
                'badge_color' => 'purple',
                'photo' => 'assets/images/staff/sumit-rodge.png',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Amol Palekar',
                'designation' => 'TGT - Mathematics',
                'qualification' => 'B.Sc., B.Ed.',
                'badge_color' => 'cyan',
                'photo' => 'assets/images/staff/amol-palekar.jpg',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Anjali Iyer',
                'designation' => 'TGT - English',
                'qualification' => 'M.A., B.Ed.',
                'badge_color' => 'rose',
                'photo' => 'assets/images/staff/anjali-iyer.jpg',
                'order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Bhimrao Wakale',
                'designation' => 'TGT - Social Science',
                'qualification' => 'M.A., B.Ed.',
                'badge_color' => 'amber',
                'photo' => 'assets/images/staff/bhimrao-wakale.jpg',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Shivdas Shinde',
                'designation' => 'TGT - Languages',
                'qualification' => 'M.Phil., B.Ed.',
                'badge_color' => 'blue',
                'photo' => 'assets/images/staff/shivdas-shinde.jpg',
                'order' => 12,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Urmila Nitnaware',
                'designation' => 'TGT - Social Studies',
                'qualification' => 'M.A., B.Ed.',
                'badge_color' => 'amber',
                'photo' => 'assets/images/staff/urmila-nitnaware.jpg',
                'order' => 13,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Vaishali Maske',
                'designation' => 'TGT - Computer Science',
                'qualification' => 'M.C.M.',
                'badge_color' => 'cyan',
                'photo' => 'assets/images/staff/vaishali-maske.jpg',
                'order' => 14,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Siddharth Nagthankar',
                'designation' => 'TGT - Fine Arts & Painting',
                'qualification' => 'M.F.A. (Painting), B.Ed.',
                'badge_color' => 'pink',
                'photo' => 'assets/images/staff/siddharth-nagthankar.png',
                'order' => 15,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Krushna Mane',
                'designation' => 'PRT - Mathematics & Science',
                'qualification' => 'M.Sc.',
                'badge_color' => 'blue',
                'photo' => 'assets/images/staff/krushna-mane.jpg',
                'order' => 16,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Pooja Gondal',
                'designation' => 'PRT - Primary Educator',
                'qualification' => 'B.A.',
                'badge_color' => 'rose',
                'photo' => 'assets/images/staff/pooja-gondal.jpg',
                'order' => 17,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Priyanka Raut',
                'designation' => 'PRT - Primary Educator',
                'qualification' => 'M.A.',
                'badge_color' => 'amber',
                'photo' => 'assets/images/staff/priyanka-raut.jpg',
                'order' => 18,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Sayali Aade',
                'designation' => 'PRT - Arts & Crafts',
                'qualification' => 'B.F.A., A.T.D., ECCE',
                'badge_color' => 'pink',
                'photo' => 'assets/images/staff/sayali-aade.jpg',
                'order' => 19,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Shally Agrawal',
                'designation' => 'PRT - Primary Educator',
                'qualification' => 'B.A., B.Ed.',
                'badge_color' => 'green',
                'photo' => 'assets/images/staff/shally-agrawal.jpg',
                'order' => 20,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Suraj Jogdand',
                'designation' => 'PRT - Computer Instructor',
                'qualification' => 'B.Tech.',
                'badge_color' => 'blue',
                'photo' => 'assets/images/staff/suraj-jogdand.jpg',
                'order' => 21,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Radhika Deshmukh',
                'designation' => 'NTT - Pre-Primary',
                'qualification' => 'B.A., B.Ed.',
                'badge_color' => 'rose',
                'photo' => 'assets/images/staff/radhika-deshmukh.jpg',
                'order' => 22,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Sarita Swami',
                'designation' => 'NTT - Early Childhood',
                'qualification' => 'B.Sc., ECCE',
                'badge_color' => 'pink',
                'photo' => 'assets/images/staff/sarita-swami.jpg',
                'order' => 23,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Snehal Chavan',
                'designation' => 'NTT - Early Childhood',
                'qualification' => 'B.Sc., ECCE',
                'badge_color' => 'purple',
                'photo' => 'assets/images/staff/snehal-chavan.png',
                'order' => 24,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Vidya Kale',
                'designation' => 'NTT - Pre-Primary',
                'qualification' => 'B.Sc.',
                'badge_color' => 'rose',
                'photo' => 'assets/images/staff/vidya-kale.jpg',
                'order' => 25,
                'is_active' => true,
            ],
        ];

        // Clean out legacy records
        StaffMember::truncate();

        foreach ($staff as $item) {
            StaffMember::create($item);
        }
    }
}
