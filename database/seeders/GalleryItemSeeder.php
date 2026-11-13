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
            // Life at Advaita (1-3)
            [
                'image' => 'assets/images/gallery-assembly.jpg',
                'category' => 'Life at Advaita',
                'icon' => 'fa-solid fa-school-flag',
                'caption' => 'Morning Assembly & Daily Rhythm',
                'custom_class' => null,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-parachute-lawn-building.jpg',
                'category' => 'Life at Advaita',
                'icon' => 'fa-solid fa-users',
                'caption' => 'Lawn Harmony & Campus Bonding',
                'custom_class' => null,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery-day-1.jpg',
                'category' => 'Life at Advaita',
                'icon' => 'fa-solid fa-sun',
                'caption' => 'Day One & Welcome Celebrations',
                'custom_class' => null,
                'order' => 3,
                'is_active' => true,
            ],

            // Campus & Facilities (4-6)
            [
                'image' => 'assets/images/gallery/campus-building.png',
                'category' => 'Campus & Facilities',
                'icon' => 'fa-solid fa-landmark',
                'caption' => 'Campus Architecture & Smart Wings',
                'custom_class' => null,
                'order' => 4,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/about-campus-courtyard.jpg',
                'category' => 'Campus & Facilities',
                'icon' => 'fa-solid fa-tree',
                'caption' => 'Green Courtyard & Campus Grounds',
                'custom_class' => null,
                'order' => 5,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/fac-library.jpg',
                'category' => 'Campus & Facilities',
                'icon' => 'fa-solid fa-book-open-reader',
                'caption' => 'Central Knowledge Library & Reading Bay',
                'custom_class' => null,
                'order' => 6,
                'is_active' => true,
            ],

            // Advaita Kids (7-10)
            [
                'image' => 'assets/images/gallery/gallery-splash-pool-kids-play.jpg',
                'category' => 'Advaita Kids',
                'icon' => 'fa-solid fa-water-ladder',
                'caption' => 'Splash Pool & Aquatic Water Arena',
                'custom_class' => null,
                'order' => 7,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-crawl-tunnel-kids.jpg',
                'category' => 'Advaita Kids',
                'icon' => 'fa-solid fa-shapes',
                'caption' => 'Caterpillar Tunnel & Motor Exploration',
                'custom_class' => null,
                'order' => 8,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-hula-hoop-kid.jpg',
                'category' => 'Advaita Kids',
                'icon' => 'fa-solid fa-child-reaching',
                'caption' => 'Ring Stepping & Motor Agility',
                'custom_class' => null,
                'order' => 9,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-parachute-activity.jpg',
                'category' => 'Advaita Kids',
                'icon' => 'fa-solid fa-cloud-sun',
                'caption' => 'Rainbow Parachute Cooperative Play',
                'custom_class' => null,
                'order' => 10,
                'is_active' => true,
            ],

            // Events & Celebrations (11-13)
            [
                'image' => 'assets/images/gallery/gallery-school-band.jpg',
                'category' => 'Events & Celebrations',
                'icon' => 'fa-solid fa-drum',
                'caption' => 'School Marching Band & Ceremonies',
                'custom_class' => 'position-center-band',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/cultural.jpg',
                'category' => 'Events & Celebrations',
                'icon' => 'fa-solid fa-cake-candles',
                'caption' => 'Annual Cultural Fest & Drama',
                'custom_class' => null,
                'order' => 12,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/dance.jpg',
                'category' => 'Events & Celebrations',
                'icon' => 'fa-solid fa-masks-theater',
                'caption' => 'Classical & Folk Dance Fest',
                'custom_class' => null,
                'order' => 13,
                'is_active' => true,
            ],

            // Academics & Science Activities (14-16)
            [
                'image' => 'assets/images/gallery/gallery-math-science-lab.jpg',
                'category' => 'Academics and Science Activities',
                'icon' => 'fa-solid fa-flask-vial',
                'caption' => 'Science & Mathematics Practical Labs',
                'custom_class' => null,
                'order' => 14,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-classroom-learning.jpg',
                'category' => 'Academics and Science Activities',
                'icon' => 'fa-solid fa-chalkboard-user',
                'caption' => 'Interactive Smart Classroom Learning',
                'custom_class' => null,
                'order' => 15,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/robotics-lab.png',
                'category' => 'Academics and Science Activities',
                'icon' => 'fa-solid fa-microchip',
                'caption' => 'Robotics & STEAM Innovation Lab',
                'custom_class' => null,
                'order' => 16,
                'is_active' => true,
            ],

            // Educational Tours & Excursions (17-18)
            [
                'image' => 'assets/images/gallery/educational-tour.jpg',
                'category' => 'Educational Tours & Excursions',
                'icon' => 'fa-solid fa-bus-simple',
                'caption' => 'Heritage & Science Museum Excursions',
                'custom_class' => null,
                'order' => 17,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/student-life.jpg',
                'category' => 'Educational Tours & Excursions',
                'icon' => 'fa-solid fa-compass',
                'caption' => 'Environmental Field Study & Outings',
                'custom_class' => null,
                'order' => 18,
                'is_active' => true,
            ],

            // Sports & Competitions (19-22)
            [
                'image' => 'assets/images/gallery/gallery-football-match-sprint.jpg',
                'category' => 'Sports & Competitions',
                'icon' => 'fa-solid fa-futbol',
                'caption' => 'Football Championship & Turf Sprint',
                'custom_class' => null,
                'order' => 19,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-sports-field-agility.jpg',
                'category' => 'Sports & Competitions',
                'icon' => 'fa-solid fa-trophy',
                'caption' => 'Campus Sports Ground & Athletics',
                'custom_class' => null,
                'order' => 20,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-gymnastics-cartwheel.jpg',
                'category' => 'Sports & Competitions',
                'icon' => 'fa-solid fa-person-running',
                'caption' => 'Gymnastics, Cartwheels & Tumbling',
                'custom_class' => null,
                'order' => 21,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-football-juggling-boy.jpg',
                'category' => 'Sports & Competitions',
                'icon' => 'fa-solid fa-medal',
                'caption' => 'Football Freestyle & Ball Handling',
                'custom_class' => null,
                'order' => 22,
                'is_active' => true,
            ],

            // Student Leadership & Achievements (23-24)
            [
                'image' => 'assets/images/gallery/gallery-foundation-achievers.jpg',
                'category' => 'Student Leadership & Achievements',
                'icon' => 'fa-solid fa-award',
                'caption' => 'Foundation Batch & Academic Scholars',
                'custom_class' => null,
                'order' => 23,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/achievements.jpg',
                'category' => 'Student Leadership & Achievements',
                'icon' => 'fa-solid fa-user-tie',
                'caption' => 'Student Council & Leadership Badges',
                'custom_class' => null,
                'order' => 24,
                'is_active' => true,
            ],

            // Art, Culture & Creativity (25-27)
            [
                'image' => 'assets/images/gallery/gallery-art-studio-origami-planes.jpg',
                'category' => 'Art, Culture & Creativity',
                'icon' => 'fa-solid fa-paper-plane',
                'caption' => 'Art Studio & Origami Paper Craft',
                'custom_class' => null,
                'order' => 25,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-painted-hands-girl.jpg',
                'category' => 'Art, Culture & Creativity',
                'icon' => 'fa-solid fa-palette',
                'caption' => 'Joyful Hand Painting & Color Studio',
                'custom_class' => 'position-center-painted-hands',
                'order' => 26,
                'is_active' => true,
            ],
            [
                'image' => 'assets/images/gallery/gallery-art-circle-kids.jpg',
                'category' => 'Art, Culture & Creativity',
                'icon' => 'fa-solid fa-paintbrush',
                'caption' => 'Collaborative Art & Canvas Studio',
                'custom_class' => null,
                'order' => 27,
                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            GalleryItem::updateOrCreate(
                ['image' => $item['image']],
                $item
            );
        }
    }
}
