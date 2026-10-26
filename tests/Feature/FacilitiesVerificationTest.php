<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FacilitiesVerificationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test facilities page renders with verified campus data, metrics, and cards.
     */
    public function test_facilities_page_renders_with_verified_data(): void
    {
        $response = $this->get(route('facilities'));
        $response->assertStatus(200);

        // Header and verified campus metrics
        $response->assertSee('More than Classrooms, A Place to Grow.');
        $response->assertSee('10,000 m²');
        $response->assertSee('Campus Land Area');
        $response->assertSee('25 Smart');
        $response->assertSee('Classrooms');
        $response->assertSee('Dedicated Science,');
        $response->assertSee('Math &amp; Tech Labs', false);

        // Infrastructure Classification (Operational vs Planned)
        $response->assertSee('CURRENT OPERATIONAL INFRASTRUCTURE');
        $response->assertSee('CBSE COMPLIANCE');
        $response->assertSee('Planned Expansion');
        $response->assertSee('Upcoming dedicated Pre-Primary Wing');

        // Verified Facility Cards
        $response->assertSee('Smart Classrooms');
        $response->assertSee('47.08 m² each');
        $response->assertSee('Science &amp; Mathematics Laboratories', false);
        $response->assertSee('Composite Science Lab');
        $response->assertSee('Robotics &amp; Technology Labs', false);
        $response->assertSee('STEAM robotics kits');
        $response->assertSee('Library &amp; Resource Center', false);
        $response->assertSee('Green Sports Lawns &amp; Playgrounds', false);
        $response->assertSee('Multi-Purpose Hall &amp; Assembly Space', false);
        $response->assertSee('GPS-Enabled School Transport');
        $response->assertSee('Safety &amp; 24/7 CCTV Security', false);
        $response->assertSee('Hygienic Dining Space');
        $response->assertSee('Infirmary &amp; First-Aid Center', false);
        $response->assertSee('Eco-Friendly Green Campus');
        $response->assertSee('Arts &amp; Creative Studios', false);

        // Stats Highlight Strip
        $response->assertSee('Campus Land Area (~2.5 Acres)');
        $response->assertSee('Smart Classrooms (47.08 m² each)');
        $response->assertSee('Dedicated Labs (Science, Math &amp; Tech)', false);

        // Pre-Footer CTA
        $response->assertSee('Take a Campus Tour.');
        $response->assertSee('Schedule a Campus Visit');
    }

    /**
     * Test admin can update facilities page content via CMS settings.
     */
    public function test_admin_can_update_facilities_page_via_cms(): void
    {
        $admin = User::factory()->create();

        Setting::set('facilities_hero_title', 'World-Class Learning Spaces in Parbhani.');
        Setting::set('facilities_campus_area', '10,000 Sq. Mtrs. (~2.47 Acres)');

        $response = $this->get(route('facilities'));
        $response->assertStatus(200);
        $response->assertSee('World-Class Learning Spaces in Parbhani.');
        $response->assertSee('10,000 Sq. Mtrs. (~2.47 Acres)');
    }
}
