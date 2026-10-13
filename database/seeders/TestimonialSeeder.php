<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'parent_name' => 'Priya Sharma',
                'child_info' => "Parent of Ananya Sharma\nClass VI",
                'content' => 'Advaita has been a blessing for our family. The school provides a perfect balance of academics, values and co-curricular activities. We have seen our daughter grow into a confident, responsible and curious learner.',
                'rating' => 5,
                'avatar' => 'assets/images/testimonial-parent-1.jpg',
                'theme_color' => 'orange',
                'order' => 1,
            ],
            [
                'parent_name' => 'Rahul Mehta',
                'child_info' => "Parent of Vihaan Mehta\nClass VIII",
                'content' => "The teachers at Advaita are truly dedicated and supportive. The school's focus on holistic development has helped my son discover his strengths and build leadership skills. We are grateful to be a part of the Advaita family.",
                'rating' => 5,
                'avatar' => 'assets/images/testimonial-parent-2.jpg',
                'theme_color' => 'blue',
                'order' => 2,
            ],
            [
                'parent_name' => 'Sneha Iyer',
                'child_info' => "Parent of Arjun Iyer\nClass V",
                'content' => "Advaita offers a safe, nurturing and inspiring environment. The blend of modern infrastructure, caring faculty and value-based education gives us complete confidence in our child's future.",
                'rating' => 5,
                'avatar' => 'assets/images/testimonial-parent-3.jpg',
                'theme_color' => 'orange',
                'order' => 3,
            ],
        ];

        foreach ($items as $item) {
            Testimonial::create($item);
        }
    }
}
