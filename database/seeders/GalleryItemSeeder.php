<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GalleryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'image' => 'assets/images/gallery/gallery-school-band.jpg',
                'category' => 'School Band & Assembly',
                'icon' => 'fa-solid fa-drum',
                'caption' => 'Advaita School Marching Band and Drum Troupe',
                'custom_class' => 'position-center-band',
                'order' => 1,
            ],
            [
                'image' => 'assets/images/gallery/gallery-math-science-lab.jpg',
                'category' => 'Math & Science Labs',
                'icon' => 'fa-solid fa-flask-vial',
                'caption' => 'Mathematics and Practical Lab Experiment Session',
                'custom_class' => null,
                'order' => 2,
            ],
            [
                'image' => 'assets/images/gallery/gallery-football-match-sprint.jpg',
                'category' => 'Football League & Turf',
                'icon' => 'fa-solid fa-futbol',
                'caption' => 'Inter-House Football Championship and Sprint on Green Turf',
                'custom_class' => null,
                'order' => 3,
            ],
            [
                'image' => 'assets/images/gallery/gallery-art-studio-origami-planes.jpg',
                'category' => 'Art Studio & Origami',
                'icon' => 'fa-solid fa-paper-plane',
                'caption' => 'Art Studio Creative Origami Paper Airplanes Workshop',
                'custom_class' => null,
                'order' => 4,
            ],
            [
                'image' => 'assets/images/gallery/gallery-splash-pool-kids-play.jpg',
                'category' => 'Splash Pool & Play Arena',
                'icon' => 'fa-solid fa-water-ladder',
                'caption' => 'Young Children Splash Pool and Water Play Area with Slide',
                'custom_class' => null,
                'order' => 5,
            ],
            [
                'image' => 'assets/images/gallery/gallery-football-juggling-boy.jpg',
                'category' => 'Freestyle & Ball Skills',
                'icon' => 'fa-solid fa-medal',
                'caption' => 'Student Practicing Football Freestyle Ball Control',
                'custom_class' => null,
                'order' => 6,
            ],
            [
                'image' => 'assets/images/gallery/gallery-painted-hands-girl.jpg',
                'category' => 'Creative Arts & Expression',
                'icon' => 'fa-solid fa-palette',
                'caption' => 'Young Student Showing Joyful Painted Hands on Lawn',
                'custom_class' => null,
                'order' => 7,
            ],
            [
                'image' => 'assets/images/gallery/gallery-gymnastics-cartwheel.jpg',
                'category' => 'Gymnastics & Tumbling',
                'icon' => 'fa-solid fa-person-walking-dashed-line-arrow-right',
                'caption' => 'Student Performing Gymnastics Cartwheel on Lawn',
                'custom_class' => null,
                'order' => 8,
            ],
            [
                'image' => 'assets/images/gallery/gallery-parachute-lawn-building.jpg',
                'category' => 'Joyful Teamwork & Play',
                'icon' => 'fa-solid fa-shapes',
                'caption' => 'Primary Students Playing with Rainbow Parachute Before Campus Building',
                'custom_class' => null,
                'order' => 9,
            ],
            [
                'image' => 'assets/images/gallery/gallery-classroom-learning.jpg',
                'category' => 'Smart Classroom Learning',
                'icon' => 'fa-solid fa-chalkboard-user',
                'caption' => 'Attentive Students in Classroom Learning Session',
                'custom_class' => null,
                'order' => 10,
            ],
            [
                'image' => 'assets/images/gallery/gallery-foundation-achievers.jpg',
                'category' => 'IIT-JEE & NEET Foundation',
                'icon' => 'fa-solid fa-graduation-cap',
                'caption' => 'Students and Faculty with IIT-JEE and NEET Foundation Banner',
                'custom_class' => null,
                'order' => 11,
            ],
        ];

        foreach ($items as $item) {
            GalleryItem::create($item);
        }
    }
}
