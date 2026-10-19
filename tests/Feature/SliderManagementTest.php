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

    public function test_admin_can_view_sliders_index(): void
    {
        $slider = Slider::create([
            'title_1' => 'First Test Headline',
            'title_2' => 'Second Highlight Tagline',
            'description' => 'A wonderful inspiring description.',
            'image' => 'assets/images/hero-slider-campus.png',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->get(route('admin.sliders.index'));

        $response->assertStatus(200);
        $response->assertSee('First Test Headline');
        $response->assertSee('Second Highlight Tagline');
        $response->assertSee('Recommended Image Dimensions');
    }

    public function test_admin_can_view_create_slider_page(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.sliders.create'));

        $response->assertStatus(200);
        $response->assertSee('Create New Hero Slide');
        $response->assertSee('Recommended Image Size:');
        $response->assertSee('Slider Image (Banner)');
    }

    public function test_admin_can_create_new_slider_with_image(): void
    {
        $mainImage = UploadedFile::fake()->image('banner.jpg', 1920, 800);

        $response = $this->actingAs($this->admin)->post(route('admin.sliders.store'), [
            'title_1' => 'Empowering Future Leaders',
            'title_2' => 'World-Class Learning',
            'description' => 'Developing critical thinking and global vision.',
            'image' => $mainImage,
            'order' => 1,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.sliders.index'));
        $this->assertDatabaseHas('sliders', [
            'title_1' => 'Empowering Future Leaders',
            'title_2' => 'World-Class Learning',
            'is_active' => true,
        ]);
    }

    public function test_admin_can_create_slider_without_title_1(): void
    {
        $mainImage = UploadedFile::fake()->image('banner_no_title.jpg', 1920, 800);

        $response = $this->actingAs($this->admin)->post(route('admin.sliders.store'), [
            'title_1' => null,
            'title_2' => 'Standalone Highlight',
            'description' => 'A slide without primary title 1.',
            'image' => $mainImage,
            'order' => 1,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.sliders.index'));
        $this->assertDatabaseHas('sliders', [
            'title_1' => null,
            'title_2' => 'Standalone Highlight',
        ]);
    }

    public function test_admin_can_update_existing_slider(): void
    {
        $slider = Slider::create([
            'title_1' => 'Original Title',
            'image' => 'assets/images/hero-slider-campus.png',
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

    public function test_admin_can_update_slider_with_null_title_1(): void
    {
        $slider = Slider::create([
            'title_1' => 'Has Title 1',
            'image' => 'assets/images/hero-slider-campus.png',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->put(route('admin.sliders.update', $slider->id), [
            'title_1' => '',
            'title_2' => 'Only Title 2',
            'order' => 1,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.sliders.index'));
        $this->assertDatabaseHas('sliders', [
            'id' => $slider->id,
            'title_1' => null,
            'title_2' => 'Only Title 2',
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

    public function test_homepage_renders_dynamic_slides_with_image(): void
    {
        Slider::create([
            'title_1' => 'Dynamic Curious Minds',
            'title_2' => 'Dynamic Confident Futures',
            'description' => 'Dynamic school description for tests.',
            'image' => 'assets/images/hero-slider-campus.png',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Dynamic Curious Minds');
        $response->assertSee('Dynamic Confident Futures');
        $response->assertSee('Dynamic school description for tests.');
    }

    public function test_homepage_does_not_render_buttons_when_data_or_url_missing(): void
    {
        Slider::create([
            'title_1' => 'Slide Without Buttons',
            'image' => 'assets/images/hero-slider-campus.png',
            'btn_1_text' => null,
            'btn_1_url' => null,
            'btn_2_text' => null,
            'btn_2_url' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Slide Without Buttons');
        $response->assertDontSee('adv-hero-btn-apply');
        $response->assertDontSee('adv-hero-btn-explore');
    }

    public function test_homepage_renders_only_button_with_valid_text_and_url(): void
    {
        Slider::create([
            'title_1' => 'Slide With Only Button 1',
            'image' => 'assets/images/hero-slider-campus.png',
            'btn_1_text' => 'Custom Apply Now',
            'btn_1_url' => '/admission-info',
            'btn_2_text' => 'Missing URL Button', // text present but no URL
            'btn_2_url' => null,
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Custom Apply Now');
        $response->assertSee('/admission-info');
        $response->assertDontSee('Missing URL Button');
    }

    public function test_storage_fallback_serves_uploaded_slide_image(): void
    {
        Storage::fake('public');
        $uploaded = UploadedFile::fake()->image('test-hero.jpg', 1920, 800);
        $path = $uploaded->store('sliders', 'public');

        // Verify storage file exists on the public disk
        Storage::disk('public')->assertExists($path);

        $response = $this->get('/storage/'.$path);

        $response->assertStatus(200);
    }

    public function test_storage_fallback_blocks_directory_traversal_and_missing_files(): void
    {
        $this->get('/storage/../.env')->assertStatus(404);
        $this->get('/storage/non-existent-slider-image.jpg')->assertStatus(404);
    }

    public function test_storage_link_route_can_be_executed_from_web(): void
    {
        $response = $this->get('/storage-link');

        $response->assertStatus(200);
        $response->assertSee('Server Storage Link');
    }

    public function test_run_migrations_route_can_be_executed_from_web(): void
    {
        $response = $this->get('/run-migrations');

        $response->assertStatus(200);
        $response->assertSee('Database Migration Runner');

        $redirect = $this->get('/migrate');
        $redirect->assertRedirect(route('migrations.run'));
    }
}
