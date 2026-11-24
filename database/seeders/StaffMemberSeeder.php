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
            [
                'name' => 'Mr. Avinash Hanchate',
                'designation' => 'Accountant',
                'qualification' => 'B.Com.',
                'badge_color' => 'blue',
                'photo' => 'assets/images/staff/avinash-hanchate.jpeg',
                'order' => 26,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Dinesh Halge',
                'designation' => 'TGT - Science',
                'qualification' => 'B.Sc., B.D.S.',
                'badge_color' => 'cyan',
                'photo' => 'assets/images/staff/dinesh-halge.png',
                'order' => 27,
                'is_active' => true,
            ],
            [
                'name' => 'Mr. Rajukumar Prajapati',
                'designation' => 'PRT - Mathematics & Science',
                'qualification' => 'B.E., B.Ed.',
                'badge_color' => 'blue',
                'photo' => 'assets/images/staff/rajukumar-prajapati.jpeg',
                'order' => 28,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Kemelia Sarkar',
                'designation' => 'PRT - Science',
                'qualification' => 'M.Sc.',
                'badge_color' => 'rose',
                'photo' => 'assets/images/staff/kemelia-sarkar.jpeg',
                'order' => 29,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Priya Pande',
                'designation' => 'Faculty - Commerce',
                'qualification' => 'M.Com.',
                'badge_color' => 'amber',
                'photo' => 'assets/images/staff/priya-pande.png',
                'order' => 30,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Sarika Harale',
                'designation' => 'PRT - Computer Instructor',
                'qualification' => 'M.C.A.',
                'badge_color' => 'cyan',
                'photo' => 'assets/images/staff/sarika-harale.png',
                'order' => 31,
                'is_active' => true,
            ],
            [
                'name' => 'Ms. Vandana Palkar',
                'designation' => 'NTT - Early Childhood',
                'qualification' => 'M.Com., ECCE',
                'badge_color' => 'pink',
                'photo' => 'assets/images/staff/vandana-palkar.png',
                'order' => 32,
                'is_active' => true,
            ],
        ];

        // Ensure photos from 'Teachers Details' are mirrored into public/assets/images/staff if available
        $teachersDetailsDir = base_path('Teachers Details');
        $publicStaffDir = public_path('assets/images/staff');
        if (! file_exists($publicStaffDir)) {
            @mkdir($publicStaffDir, 0755, true);
        }

        if (is_dir($teachersDetailsDir)) {
            $map = [
                'Mr. Amit Thakare Accountant BSC Agri.jpg' => 'amit-thakare.jpg',
                'Mr. Amol Palekar TGT B.sc B.Ed.jpg' => 'amol-palekar.jpg',
                'Mr. Anand Rampurkar PRO B.sc CS.jpg' => 'anand-rampurkar.jpg',
                'Mr. Bhimrao Wakale TGT M.A B.Ed.jpg' => 'bhimrao-wakale.jpg',
                'Mr. Deependra Singh TGT M.sc B.Ed.jpg' => 'deependra-singh.jpg',
                'Mr. Krushna Mane PRT M.sc.jpg' => 'krushna-mane.jpg',
                'Mr. Shivdas Shinde TGT M.Phil B.Ed.jpg' => 'shivdas-shinde.jpg',
                'Mr. Shrikant Jogdand M.A M.Lib.jpg' => 'shrikant-jogdand.jpg',
                'Mr. Shrikant Jogdand M.A M.Lib.jpg.jpeg' => 'shrikant-jogdand.jpg',
                'Mr. Siddharth Nagthankar TGT M.fa Painting B.Ed.png' => 'siddharth-nagthankar.png',
                'Mr. Sumit Rodge TGT M.sc B.Ed.png' => 'sumit-rodge.png',
                'Ms Radhika Deshmukh NTT B.A B.Ed.jpg' => 'radhika-deshmukh.jpg',
                'Ms. Anjali Iyer TGT M.A B.Ed.jpg' => 'anjali-iyer.jpg',
                'Ms. Ivy Brown Principal M.A M.Ed.jpeg' => 'ivy-brown.jpeg',
                'Ms. Ivy Brown Principal M.A M.Ed (1).jpeg' => 'ivy-brown.jpeg',
                'Ms. Jagruti Pingalkar Wealness Teacher M.A B.Ed.jpg' => 'jagruti-pingalkar.jpg',
                'Ms. Pooja Gondal PRT BA.jpg' => 'pooja-gondal.jpg',
                'Ms. Priyanka Raut PRT M.A.jpg' => 'priyanka-raut.jpg',
                'Ms. Sarita Swami NTT B.sc Ecce.jpg' => 'sarita-swami.jpg',
                'Ms. Sayali Aade PRT B.Fa ATD Ecce.jpg' => 'sayali-aade.jpg',
                'Ms. Sayali Aade PRT B.Fa ATD Ecce.jpg.jpeg' => 'sayali-aade.jpg',
                'Ms. Shally Agrawal PRT B.A B.Ed.jpg' => 'shally-agrawal.jpg',
                'Ms. Snehal Chavan NTT B.sc Ecce.png' => 'snehal-chavan.png',
                'Ms. Suraj Jogdand PRT B.Tech.jpg' => 'suraj-jogdand.jpg',
                'Ms. Urmila Durugkar Wealness Teacher M.A B.Ed.jpg' => 'urmila-durugkar.jpg',
                'Ms. Urmila Nitnaware TGT M.A B.Ed.jpg' => 'urmila-nitnaware.jpg',
                'Ms. Vaishali Maske TGT Mcm.jpg' => 'vaishali-maske.jpg',
                'Ms. Vidya Kale NTT B.Sc.jpg' => 'vidya-kale.jpg',
                'Mr. Avinash Hanchate Accountant B.Com.jpeg' => 'avinash-hanchate.jpeg',
                'Mr. Dinesh Halge TGT B.Sc B.D.S..png' => 'dinesh-halge.png',
                'Mr. Rajukumar Prajapati PRT B.E B.Ed.jpeg' => 'rajukumar-prajapati.jpeg',
                'Ms. Kemelia Sarkar PRT M.Sc.jpeg' => 'kemelia-sarkar.jpeg',
                'Ms. Priya Pande M.Com.png' => 'priya-pande.png',
                'Ms. Sarika Harale PRT MCA.png' => 'sarika-harale.png',
                'Ms. Vandana Palkar NTT  M.Com Ecce.png' => 'vandana-palkar.png',
            ];

            foreach ($map as $orig => $slug) {
                $src = $teachersDetailsDir.'/'.$orig;
                $destSlug = $publicStaffDir.'/'.$slug;
                $destOrig = $publicStaffDir.'/'.$orig;

                if (file_exists($src)) {
                    if (! file_exists($destSlug)) {
                        @copy($src, $destSlug);
                    }
                    if (! file_exists($destOrig)) {
                        @copy($src, $destOrig);
                    }
                }
            }
        }

        // Clean out legacy records
        StaffMember::truncate();

        foreach ($staff as $item) {
            StaffMember::create($item);
        }
    }
}
