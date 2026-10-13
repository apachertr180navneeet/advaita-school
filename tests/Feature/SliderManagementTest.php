<?php

namespace Tests\Feature;

use App\Models\Slider;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SliderManagementTest extends TestCase
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

    public function test_guests_cannot_access_slider_management(): void
    {
        $response = $this->get(route('admin.sliders.index'));
        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_view_sliders_index_with_size_info(): void
    {
        $slider = Slider::create([
            'title_1' => 'First Test Headline',
            'title_2' => 'Second Highlight Tagline',
            'description' => 'A wonderful inspiring description.',
            'image' => 'assets/images/hero-slider-campus.png',
            'image_width' => 1920,
            'image_height' => 800,
            'image_size' => '450 KB',
            'overlay_image' => 'assets/images/contact-student-pointing-transparent.png',
            'overlay_image_width' => 500,
            'overlay_image_height' => 600,
            'overlay_image_size' => '180 KB',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->get(route('admin.sliders.index'));

        $response->assertStatus(200);
        $response->assertSee('First Test Headline');
        $response->assertSee('Second Highlight Tagline');
        $response->assertSee('1920 × 800 px');
        $response->assertSee('450 KB');
        $response->assertSee('500 × 600 px');
        $response->assertSee('180 KB');
        $response->assertSee('Recommended Image Dimensions');
    }

    public function test_admin_can_view_create_slider_page(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.sliders.create'));

        $response->assertStatus(200);
        $response->assertSee('Create New Hero Slide');
        $response->assertSee('Recommended Size:');
        $response->assertSee('1920 × 800 px');
        $response->assertSee('Image on Image (Floating Overlay Graphic)');
    }

    public function test_admin_can_create_new_slider_with_images_and_size_calculation(): void
    {
        $mainImage = UploadedFile::fake()->image('banner.jpg', 1920, 800);
        $overlayImage = UploadedFile::fake()->image('student_cutout.png', 500, 600);

        $response = $this->actingAs($this->admin)->post(route('admin.sliders.store'), [
            'title_1' => 'Empowering Future Leaders',
            'title_2' => 'World-Class Learning',
            'description' => 'Developing critical thinking and global vision.',
            'image' => $mainImage,
            'overlay_image' => $overlayImage,
            'button_1_text' => 'Apply Online',
            'button_1_url' => '/online-registration',
            'button_2_text' => 'Explore Campus',
            'button_2_url' => '/facilities',
            'badge_text' => '100% CBSE Excellence',
            'order' => 1,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.sliders.index'));
        $this->assertDatabaseHas('sliders', [
            'title_1' => 'Empowering Future Leaders',
            'title_2' => 'World-Class Learning',
            'image_width' => 1920,
            'image_height' => 800,
            'overlay_image_width' => 500,
            'overlay_image_height' => 600,
            'is_active' => true,
        ]);
    }

    public function test_admin_can_update_existing_slider(): void
    {
        $slider = Slider::create([
            'title_1' => 'Original Title',
            'image' => 'assets/images/hero-slider-campus.png',
            'image_width' => 1024,
            'image_height' => 373,
            'image_size' => '700 KB',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->put(route('admin.sliders.update', $slider->id), [
            'title_1' => 'Updated Headline Title',
            'title_2' => 'Updated Subtitle',
            'description' => 'Updated Description',
            'order' => 2,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.sliders.index'));
        $this->assertDatabaseHas('sliders', [
            'id' => $slider->id,
            'title_1' => 'Updated Headline Title',
            'title_2' => 'Updated Subtitle',
            'order' => 2,
        ]);
    }

    public function test_admin_can_toggle_slider_status(): void
    {
        $slider = Slider::create([
            'title_1' => 'Toggle Test Slide',
            'image' => 'assets/images/hero-slider-campus.png',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->patch(route('admin.sliders.toggle-status', $slider->id));

        $response->assertRedirect(route('admin.sliders.index'));
        $this->assertFalse($slider->fresh()->is_active);
    }

    public function test_admin_can_delete_slider(): void
    {
        $slider = Slider::create([
            'title_1' => 'Delete Test Slide',
            'image' => 'assets/images/hero-slider-campus.png',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->delete(route('admin.sliders.destroy', $slider->id));

        $response->assertRedirect(route('admin.sliders.index'));
        $this->assertDatabaseMissing('sliders', ['id' => $slider->id]);
    }

    public function test_homepage_renders_dynamic_slides_with_image_and_overlay(): void
    {
        Slider::create([
            'title_1' => 'Dynamic Curious Minds',
            'title_2' => 'Dynamic Confident Futures',
            'description' => 'Dynamic school description for tests.',
            'image' => 'assets/images/hero-slider-campus.png',
            'overlay_image' => 'assets/images/contact-student-pointing-transparent.png',
            'button_1_text' => 'Apply Today',
            'button_1_url' => '#admissions',
            'badge_text' => 'Excellence In Every Child',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Dynamic Curious Minds');
        $response->assertSee('Dynamic Confident Futures');
        $response->assertSee('Dynamic school description for tests.');
        $response->assertSee('Apply Today');
        $response->assertSee('adv-hero-overlay-image-container');
    }
}
