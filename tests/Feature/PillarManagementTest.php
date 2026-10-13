<?php

namespace Tests\Feature;

use App\Models\Pillar;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PillarManagementTest extends TestCase
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

    public function test_guests_cannot_access_pillar_management(): void
    {
        $response = $this->get(route('admin.pillars.index'));
        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_view_pillars_index(): void
    {
        Pillar::create([
            'order' => 1,
            'badge_number' => '01',
            'theme_color' => 'orange',
            'title' => 'Test Pillar Title',
            'description' => 'Test Pillar Description',
            'image' => 'assets/images/pillar-card-1.jpg',
            'tags' => [
                ['label' => 'Robotics Lab', 'icon' => 'fa-solid fa-robot'],
            ],
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->get(route('admin.pillars.index'));

        $response->assertStatus(200);
        $response->assertSee('Three Pillars Management');
        $response->assertSee('Test Pillar Title');
        $response->assertSee('Robotics Lab');
    }

    public function test_admin_can_update_section_header(): void
    {
        $response = $this->actingAs($this->admin)->patch(route('admin.pillars.section-header'), [
            'eyebrow' => 'CUSTOM EYEBROW',
            'title_1' => 'Custom Dark Title',
            'title_2' => 'Custom Orange Title',
            'subtitle' => 'Custom Subtitle for Pillars Section',
            'cta_text' => 'Learn More Today',
            'cta_url' => '#custom-link',
        ]);

        $response->assertRedirect(route('admin.pillars.index'));

        $this->assertEquals('CUSTOM EYEBROW', Setting::get('pillar_section_eyebrow'));
        $this->assertEquals('Custom Dark Title', Setting::get('pillar_section_title_1'));
        $this->assertEquals('Custom Orange Title', Setting::get('pillar_section_title_2'));
        $this->assertEquals('Custom Subtitle for Pillars Section', Setting::get('pillar_section_subtitle'));
    }

    public function test_admin_can_view_create_pillar_page(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.pillars.create'));

        $response->assertStatus(200);
        $response->assertSee('Create New Pillar Card');
        $response->assertSee('Card Color Theme');
    }

    public function test_admin_can_create_new_pillar(): void
    {
        $image = UploadedFile::fake()->image('pillar_sample.jpg', 600, 400);

        $response = $this->actingAs($this->admin)->post(route('admin.pillars.store'), [
            'title' => 'Innovation & Arts Centre',
            'badge_number' => '04',
            'theme_color' => 'teal',
            'description' => 'A creative space fostering artistic and design excellence.',
            'image' => $image,
            'order' => 4,
            'is_active' => '1',
            'tag_labels' => ['Art Studio', 'Pottery Lab'],
            'tag_icons' => ['fa-solid fa-palette', 'fa-solid fa-hands'],
        ]);

        $response->assertRedirect(route('admin.pillars.index'));

        $this->assertDatabaseHas('pillars', [
            'title' => 'Innovation & Arts Centre',
            'badge_number' => '04',
            'theme_color' => 'teal',
            'order' => 4,
            'is_active' => true,
        ]);

        $createdPillar = Pillar::where('title', 'Innovation & Arts Centre')->first();
        $this->assertCount(2, $createdPillar->tags);
        $this->assertEquals('Art Studio', $createdPillar->tags[0]['label']);
    }

    public function test_admin_can_update_existing_pillar(): void
    {
        $pillar = Pillar::create([
            'order' => 1,
            'badge_number' => '01',
            'theme_color' => 'orange',
            'title' => 'Original Title',
            'description' => 'Original Description',
            'image' => 'assets/images/pillar-card-1.jpg',
            'tags' => [['label' => 'Old Tag', 'icon' => 'fa-solid fa-check']],
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->put(route('admin.pillars.update', $pillar->id), [
            'title' => 'Updated Pillar Title',
            'badge_number' => '01',
            'theme_color' => 'blue',
            'description' => 'Updated Description',
            'order' => 1,
            'is_active' => '1',
            'tag_labels' => ['New Tag 1', 'New Tag 2'],
            'tag_icons' => ['fa-solid fa-star', 'fa-solid fa-gem'],
        ]);

        $response->assertRedirect(route('admin.pillars.index'));

        $pillar->refresh();
        $this->assertEquals('Updated Pillar Title', $pillar->title);
        $this->assertEquals('blue', $pillar->theme_color);
        $this->assertCount(2, $pillar->tags);
    }

    public function test_admin_can_toggle_pillar_status(): void
    {
        $pillar = Pillar::create([
            'order' => 1,
            'theme_color' => 'orange',
            'title' => 'Toggle Status Pillar',
            'image' => 'assets/images/pillar-card-1.jpg',
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->patch(route('admin.pillars.toggle-status', $pillar->id));

        $response->assertRedirect(route('admin.pillars.index'));
        $this->assertFalse($pillar->fresh()->is_active);
    }

    public function test_admin_can_delete_pillar(): void
    {
        $pillar = Pillar::create([
            'order' => 1,
            'theme_color' => 'orange',
            'title' => 'Delete Test Pillar',
            'image' => 'assets/images/pillar-card-1.jpg',
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->delete(route('admin.pillars.destroy', $pillar->id));

        $response->assertRedirect(route('admin.pillars.index'));
        $this->assertDatabaseMissing('pillars', ['id' => $pillar->id]);
    }

    public function test_homepage_renders_dynamic_pillars_and_settings(): void
    {
        Setting::set('pillar_section_title_1', 'Special Pillars of');
        Setting::set('pillar_section_title_2', 'Our Academy');

        Pillar::create([
            'order' => 1,
            'badge_number' => '01',
            'theme_color' => 'orange',
            'title' => 'Future-ready Labs & Smart Classrooms Test',
            'description' => 'From robotics for the youngest to digital language.',
            'image' => 'assets/images/pillar-card-1.jpg',
            'tags' => [
                ['label' => 'Robotics Lab Test', 'icon' => 'fa-solid fa-robot'],
            ],
            'is_active' => true,
        ]);

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Special Pillars of');
        $response->assertSee('Our Academy');
        $response->assertSee('Future-ready Labs &amp; Smart Classrooms Test', false);
        $response->assertSee('Robotics Lab Test');
    }
}
