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
                'name' => 'Divine Mam',
                'designation' => 'PRINCIPAL',
                'qualification' => 'M.A., B.Ed.',
                'badge_color' => 'orange',
                'photo' => 'assets/images/principal-desk.jpg',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Faculty Name 02',
                'designation' => 'VICE PRINCIPAL',
                'qualification' => 'M.Sc. (Mathematics), B.Ed.',
                'badge_color' => 'blue',
                'photo' => null,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Faculty Name 03',
                'designation' => 'SENIOR FACULTY - SCIENCE',
                'qualification' => 'M.Sc. (Physics), B.Ed.',
                'badge_color' => 'purple',
                'photo' => null,
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Faculty Name 04',
                'designation' => 'HEAD - ENGLISH DEPARTMENT',
                'qualification' => 'M.A. (English), M.Ed.',
                'badge_color' => 'rose',
                'photo' => null,
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Faculty Name 05',
                'designation' => 'SENIOR FACULTY - MATHEMATICS',
                'qualification' => 'M.Sc. (Maths), B.Ed.',
                'badge_color' => 'green',
                'photo' => null,
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Faculty Name 06',
                'designation' => 'HEAD - HINDI DEPARTMENT',
                'qualification' => 'M.A. (Hindi), B.Ed.',
                'badge_color' => 'amber',
                'photo' => null,
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Faculty Name 07',
                'designation' => 'SENIOR FACULTY - COMMERCE',
                'qualification' => 'M.Com., B.Ed.',
                'badge_color' => 'blue',
                'photo' => null,
                'order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Faculty Name 08',
                'designation' => 'HEAD - PRIMARY WING',
                'qualification' => 'M.A., D.Ed., B.Ed.',
                'badge_color' => 'rose',
                'photo' => null,
                'order' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($staff as $item) {
            StaffMember::updateOrCreate(
                ['name' => $item['name'], 'designation' => $item['designation']],
                $item
            );
        }
    }
}

