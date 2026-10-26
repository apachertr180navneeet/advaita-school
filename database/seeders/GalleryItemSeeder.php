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
                'category' => 'Events & Celebrations',
                'icon' => 'fa-solid fa-drum',
                'caption' => 'Advaita School Marching Band and Drum Troupe',
                'custom_class' => 'position-center-band',
                'order' => 1,
            ],
            [
                'image' => 'assets/images/gallery/gallery-math-science-lab.jpg',
                'category' => 'Academics and Science Activities',
                'icon' => 'fa-solid fa-flask-vial',
                'caption' => 'Mathematics and Practical Lab Experiment Session',
                'custom_class' => null,
                'order' => 2,
            ],
            [
                'image' => 'assets/images/gallery/gallery-football-match-sprint.jpg',
                'category' => 'Sports & Competitions',
                'icon' => 'fa-solid fa-futbol',
                'caption' => 'Inter-House Football Championship and Sprint on Green Turf',
                'custom_class' => null,
                'order' => 3,
            ],
            [
                'image' => 'assets/images/gallery/gallery-art-studio-origami-planes.jpg',
                'category' => 'Art, Culture & Creativity',
                'icon' => 'fa-solid fa-paper-plane',
                'caption' => 'Art Studio Creative Origami Paper Airplanes Workshop',
                'custom_class' => null,
                'order' => 4,
            ],
            [
                'image' => 'assets/images/gallery/gallery-splash-pool-kids-play.jpg',
                'category' => 'Advaita Kids',
                'icon' => 'fa-solid fa-water-ladder',
                'caption' => 'Young Children Splash Pool and Water Play Area with Slide',
                'custom_class' => null,
                'order' => 5,
            ],
            [
                'image' => 'assets/images/gallery/gallery-football-juggling-boy.jpg',
                'category' => 'Sports & Competitions',
                'icon' => 'fa-solid fa-medal',
                'caption' => 'Student Practicing Football Freestyle Ball Control',
                'custom_class' => null,
                'order' => 6,
            ],
            [
                'image' => 'assets/images/gallery/gallery-painted-hands-girl.jpg',
                'category' => 'Art, Culture & Creativity',
                'icon' => 'fa-solid fa-palette',
                'caption' => 'Young Student Showing Joyful Painted Hands on Lawn',
                'custom_class' => 'position-center-painted-hands',
                'order' => 7,
            ],
            [
                'image' => 'assets/images/gallery/gallery-gymnastics-cartwheel.jpg',
                'category' => 'Sports & Competitions',
                'icon' => 'fa-solid fa-person-running',
                'caption' => 'Student Performing Gymnastics Cartwheel on Lawn',
                'custom_class' => null,
                'order' => 8,
            ],
            [
                'image' => 'assets/images/gallery/gallery-parachute-lawn-building.jpg',
                'category' => 'Life at Advaita',
                'icon' => 'fa-solid fa-shapes',
                'caption' => 'Primary Students Playing with Rainbow Parachute Before Campus Building',
                'custom_class' => null,
                'order' => 9,
            ],
            [
                'image' => 'assets/images/gallery/gallery-classroom-learning.jpg',
                'category' => 'Academics and Science Activities',
                'icon' => 'fa-solid fa-chalkboard-user',
                'caption' => 'Attentive Students in Classroom Learning Session',
                'custom_class' => null,
                'order' => 10,
            ],
            [
                'image' => 'assets/images/gallery/gallery-foundation-achievers.jpg',
                'category' => 'Student Leadership & Achievements',
                'icon' => 'fa-solid fa-award',
                'caption' => 'Students and Faculty with IIT-JEE and NEET Foundation Banner',
                'custom_class' => null,
                'order' => 11,
            ],
            [
                'image' => 'assets/images/gallery/educational-tour.jpg',
                'category' => 'Educational Tours & Excursions',
                'icon' => 'fa-solid fa-bus-simple',
                'caption' => 'Students on Field Study Excursion and Historical Site Visit',
                'custom_class' => null,
                'order' => 12,
            ],
            [
                'image' => 'assets/images/gallery/campus-building.png',
                'category' => 'Campus & Facilities',
                'icon' => 'fa-solid fa-landmark',
                'caption' => '10,000 Sq. Mtrs. State-of-the-Art Modern Academic Infrastructure',
                'custom_class' => null,
                'order' => 13,
            ],
        ];

        foreach ($items as $item) {
            GalleryItem::create($item);
        }
    }
}
