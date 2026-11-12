<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class WelcomeSectionManagementTest extends TestCase
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

        Storage::fake('public');
    }

    public function test_guests_cannot_access_welcome_section_management(): void
    {
        $response = $this->get(route('admin.welcome-section.index'));

        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_view_welcome_section_page(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.welcome-section.index'));

        $response->assertStatus(200);
        $response->assertSee('About School / Welcome Section');
        $response->assertSee('ABOUT OUR SCHOOL');
        $response->assertSee('Welcome to');
        $response->assertSee('Advaita School of Excellence');
    }

    public function test_admin_can_update_welcome_section_settings(): void
    {
        $payload = [
            'image_tag' => 'Empowering Young Leaders',
            'badge_title' => 'Nursery to Grade 10',
            'badge_sub' => 'CBSE Affiliated No. 1130920',
            'eyebrow' => 'DISCOVER ADVAITA',
            'heading_prefix' => 'Step Into',
            'heading_brand' => 'A World of Learning',
            'quote' => 'Education is the passport to the future.',
            'description' => 'We nurture each student with personalized mentorship and academic rigor.',
            'feat_1_title' => 'STEM & Robotics',
            'feat_1_sub' => 'State of the art maker spaces',
            'feat_1_icon' => 'fa-solid fa-robot',
            'feat_2_title' => 'Sports & Arts',
            'feat_2_sub' => 'Holistic growth for all students',
            'feat_2_icon' => 'fa-solid fa-palette',
            'feat_3_title' => 'Safe Environment',
            'feat_3_sub' => 'Child safety is our priority',
            'feat_3_icon' => 'fa-solid fa-shield-cat',
            'feat_4_title' => 'Global Competencies',
            'feat_4_sub' => 'Preparing global citizens',
            'feat_4_icon' => 'fa-solid fa-earth-asia',
            'btn_1_text' => 'Read Our Story',
            'btn_1_url' => '/about-us',
            'btn_2_text' => 'Book Tour',
            'btn_2_url' => '/campus-visit',
        ];

        $response = $this->actingAs($this->admin)
            ->patch(route('admin.welcome-section.update'), $payload);

        $response->assertRedirect(route('admin.welcome-section.index'));
        $response->assertSessionHas('success');

        $this->assertSame('Empowering Young Leaders', Setting::get('welcome_image_tag'));
        $this->assertSame('Nursery to Grade 10', Setting::get('welcome_badge_title'));
        $this->assertSame('DISCOVER ADVAITA', Setting::get('welcome_eyebrow'));
        $this->assertSame('Step Into', Setting::get('welcome_heading_prefix'));
        $this->assertSame('A World of Learning', Setting::get('welcome_heading_brand'));
        $this->assertSame('Education is the passport to the future.', Setting::get('welcome_quote'));
        $this->assertSame('STEM & Robotics', Setting::get('welcome_feat_1_title'));
    }

    public function test_homepage_reflects_dynamic_welcome_settings(): void
    {
        Setting::set('welcome_badge_title', 'Play Group & Foundational');
        Setting::set('welcome_eyebrow', 'WELCOME TO OUR CAMPUS');
        Setting::set('welcome_heading_brand', 'Advaita Global Campus');

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Play Group &amp; Foundational', false);
        $response->assertSee('WELCOME TO OUR CAMPUS');
        $response->assertSee('Advaita Global Campus');
    }

    public function test_admin_can_upload_new_welcome_image(): void
    {
        $file = UploadedFile::fake()->image('campus_test.jpg', 1200, 800);

        $payload = [
            'image' => $file,
            'image_tag' => 'Excellence in Every Child',
            'badge_title' => 'Play Group',
            'badge_sub' => 'CBSE Affiliation No. 1130920',
            'eyebrow' => 'ABOUT OUR SCHOOL',
            'heading_prefix' => 'Welcome to',
            'heading_brand' => 'Advaita School of Excellence',
            'quote' => 'At Advaita, we believe in holistic education.',
            'description' => 'Established with a deep commitment to educational excellence.',
            'feat_1_title' => 'Academic Excellence',
            'feat_1_sub' => 'Strong foundation',
            'feat_2_title' => 'Holistic Development',
            'feat_2_sub' => 'Mind and body',
            'feat_3_title' => 'Safe Campus',
            'feat_3_sub' => 'Secure environment',
            'feat_4_title' => 'Future Learning',
            'feat_4_sub' => 'Modern skills',
        ];

        $response = $this->actingAs($this->admin)
            ->patch(route('admin.welcome-section.update'), $payload);

        $response->assertRedirect(route('admin.welcome-section.index'));

        $savedPath = Setting::get('welcome_image');
        $this->assertNotNull($savedPath);
        Storage::disk('public')->assertExists($savedPath);
    }
}

