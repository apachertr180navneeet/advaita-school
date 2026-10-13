<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SeoManagementTest extends TestCase
{
    use RefreshDatabase;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::create([
            'name' => 'Advaita Administrator',
            'email' => 'admin@advaita.com',
            'password' => Hash::make('admin123'),
        ]);
    }

    public function test_guests_cannot_access_seo_management(): void
    {
        $response = $this->get(route('admin.seo.index'));
        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_view_seo_management_page(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.seo.index'));

        $response->assertStatus(200);
        $response->assertSee('Search Engine Optimization (SEO)');
        $response->assertSee('Homepage SEO Title');
        $response->assertSee('Meta Description');
        $response->assertSee('Meta Keywords');
        $response->assertSee('Advaita School of Excellence, Parbhani');
    }

    public function test_admin_can_update_seo_settings(): void
    {
        $payload = [
            'home_seo_title' => 'Advaita International Academy, Parbhani | Best CBSE School',
            'home_seo_description' => 'Admissions open for 2026-27 at Advaita International Academy, Parbhani. Offering top STEAM education and world-class sports.',
            'home_seo_keywords' => 'Advaita International, CBSE School Parbhani, Admissions 2026, Best School',
        ];

        $response = $this->actingAs($this->admin)->patch(route('admin.seo.update'), $payload);

        $response->assertRedirect(route('admin.seo.index'));
        $response->assertSessionHas('success', 'Homepage SEO settings updated successfully!');

        $this->assertEquals($payload['home_seo_title'], Setting::get('home_seo_title'));
        $this->assertEquals($payload['home_seo_description'], Setting::get('home_seo_description'));
        $this->assertEquals($payload['home_seo_keywords'], Setting::get('home_seo_keywords'));
    }

    public function test_seo_update_validation_requires_title_and_description(): void
    {
        $response = $this->actingAs($this->admin)->patch(route('admin.seo.update'), [
            'home_seo_title' => '',
            'home_seo_description' => '',
        ]);

        $response->assertSessionHasErrors(['home_seo_title', 'home_seo_description']);
    }

    public function test_homepage_reflects_dynamic_seo_settings(): void
    {
        Setting::set('home_seo_title', 'Custom Dynamic Title - Advaita School');
        Setting::set('home_seo_description', 'Custom dynamic meta description for testing SEO compliance.');
        Setting::set('home_seo_keywords', 'custom, dynamic, seo, test');

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('<title>Custom Dynamic Title - Advaita School</title>', false);
        $response->assertSee('name="description" content="Custom dynamic meta description for testing SEO compliance."', false);
        $response->assertSee('name="keywords" content="custom, dynamic, seo, test"', false);
        $response->assertSee('property="og:title" content="Custom Dynamic Title - Advaita School"', false);
    }
}
