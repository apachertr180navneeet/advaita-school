<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CampusVisitManagementTest extends TestCase
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

    public function test_guests_cannot_access_campus_visit_management(): void
    {
        $response = $this->get(route('admin.campus-visit.index'));

        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_view_campus_visit_page(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.campus-visit.index'));

        $response->assertStatus(200);
        $response->assertSee('Campus Visit &amp; Admissions Banner', false);
        $response->assertSee('Come see the school');
        $response->assertSee('yourself.');
        $response->assertSee('TALK TO OUR COUNSELLOR');
    }

    public function test_admin_can_update_campus_visit_settings(): void
    {
        $payload = [
            'badge' => 'ADMISSIONS 2027–28 OPEN NOW',
            'title_1' => 'Step inside our vibrant campus',
            'title_2' => 'with your family.',
            'description' => 'Tour our classrooms, meet teachers, and explore our STEM innovation hubs.',
            'cursive_tag' => 'Schedule Today',
            'feat_1_title' => 'Personal Guides',
            'feat_1_sub' => 'Every day 9am to 6pm',
            'feat_2_title' => 'Multilingual Staff',
            'feat_2_sub' => 'English, Hindi, Marathi',
            'feat_3_title' => '100% Free Tour',
            'feat_3_sub' => 'No charges or commitments',
            'btn_title' => 'Book Your Tour',
            'btn_sub' => 'Quick Booking',
            'btn_url' => 'https://example.com/tour',
            'phone_label' => 'CALL ADMISSIONS DESK',
            'phone_number' => '+91 98765 43210',
        ];

        $response = $this->actingAs($this->admin)->patch(route('admin.campus-visit.update'), $payload);

        $response->assertRedirect(route('admin.campus-visit.index'));
        $response->assertSessionHas('success');

        $this->assertSame('ADMISSIONS 2027–28 OPEN NOW', Setting::get('campus_visit_badge'));
        $this->assertSame('Step inside our vibrant campus', Setting::get('campus_visit_title_1'));
        $this->assertSame('with your family.', Setting::get('campus_visit_title_2'));
        $this->assertSame('Tour our classrooms, meet teachers, and explore our STEM innovation hubs.', Setting::get('campus_visit_description'));
        $this->assertSame('Schedule Today', Setting::get('campus_visit_cursive_tag'));
        $this->assertSame('Personal Guides', Setting::get('campus_visit_feat_1_title'));
        $this->assertSame('+91 98765 43210', Setting::get('campus_visit_phone_number'));
    }

    public function test_admin_can_upload_custom_campus_image(): void
    {
        $fakeImage = UploadedFile::fake()->image('new-campus-facade.jpg', 1200, 750);

        $payload = [
            'title_1' => 'Come see the school',
            'title_2' => 'yourself.',
            'description' => 'Walk our campus, meet our faculty, experience our learning environment.',
            'image' => $fakeImage,
        ];

        $response = $this->actingAs($this->admin)->patch(route('admin.campus-visit.update'), $payload);

        $response->assertRedirect(route('admin.campus-visit.index'));
        $response->assertSessionHas('success');

        $storedPath = Setting::get('campus_visit_image');
        $this->assertNotNull($storedPath);
        Storage::disk('public')->assertExists($storedPath);
    }

    public function test_homepage_renders_dynamic_campus_visit_banner(): void
    {
        Setting::set('campus_visit_badge', 'EXCLUSIVE CAMPUS ACCESS');
        Setting::set('campus_visit_title_1', 'Experience Advaita School');
        Setting::set('campus_visit_title_2', 'yourself.');
        Setting::set('campus_visit_phone_number', '+91 99988 77766');

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('EXCLUSIVE CAMPUS ACCESS');
        $response->assertSee('Experience Advaita School');
        $response->assertSee('yourself.');
        $response->assertSee('+91 99988 77766');
    }

    public function test_validation_fails_when_required_fields_missing(): void
    {
        $response = $this->actingAs($this->admin)->patch(route('admin.campus-visit.update'), [
            'title_1' => '',
            'description' => '',
        ]);

        $response->assertSessionHasErrors(['title_1', 'description']);
    }
}
