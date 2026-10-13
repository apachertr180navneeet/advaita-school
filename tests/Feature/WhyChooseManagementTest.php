<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use App\Models\WhyChooseCard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class WhyChooseManagementTest extends TestCase
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

    public function test_guests_cannot_access_why_choose_management(): void
    {
        $response = $this->get(route('admin.why-choose.index'));
        $response->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_view_why_choose_cards_and_section_settings(): void
    {
        WhyChooseCard::create([
            'order' => 1,
            'badge_number' => '04',
            'theme_color' => 'purple',
            'title' => 'Safe & Secure Campus',
            'description' => '24/7 CCTV surveillance, verified support staff, emergency response protocols.',
            'image' => 'assets/images/adv-choose-4.jpg',
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->get(route('admin.why-choose.index'));

        $response->assertStatus(200);
        $response->assertSee('Why Choose Advaita');
        $response->assertSee('Safe &amp; Secure Campus', false);
        $response->assertSee('04');
        $response->assertSee('Royal Purple');
    }

    public function test_admin_can_update_why_choose_section_header(): void
    {
        $payload = [
            'eyebrow' => 'DISCOVER THE EXCELLENCE',
            'title_1' => 'Why Parents Trust',
            'title_2' => 'Advaita Parbhani?',
            'subtitle' => 'Empowering future leaders with balanced academics, sports, and STEAM.',
            'cta_text' => 'Join Advaita Today',
            'cta_url' => '#admissions',
        ];

        $response = $this->actingAs($this->admin)->patch(route('admin.why-choose.section-header'), $payload);

        $response->assertRedirect(route('admin.why-choose.index'));
        $response->assertSessionHas('success', 'Why Choose Advaita section heading updated successfully!');

        $this->assertEquals($payload['eyebrow'], Setting::get('why_choose_eyebrow'));
        $this->assertEquals($payload['title_1'], Setting::get('why_choose_title_1'));
        $this->assertEquals($payload['title_2'], Setting::get('why_choose_title_2'));
        $this->assertEquals($payload['subtitle'], Setting::get('why_choose_subtitle'));
        $this->assertEquals($payload['cta_text'], Setting::get('why_choose_cta_text'));
        $this->assertEquals($payload['cta_url'], Setting::get('why_choose_cta_url'));
    }

    public function test_admin_can_create_why_choose_card_with_image_upload(): void
    {
        $file = UploadedFile::fake()->image('campus-advantage.jpg', 600, 400);

        $payload = [
            'title' => 'Modern STEAM Labs',
            'description' => 'Equipped with robotics, 3D printing, and IoT development kits for classes 3 to 10.',
            'badge_number' => '07',
            'theme_color' => 'teal',
            'order' => 7,
            'image' => $file,
            'is_active' => '1',
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.why-choose.store'), $payload);

        $response->assertRedirect(route('admin.why-choose.index'));
        $response->assertSessionHas('success', 'New advantage card added successfully!');

        $this->assertDatabaseHas('why_choose_cards', [
            'title' => 'Modern STEAM Labs',
            'badge_number' => '07',
            'theme_color' => 'teal',
            'order' => 7,
            'is_active' => true,
        ]);

        $card = WhyChooseCard::where('title', 'Modern STEAM Labs')->first();
        Storage::disk('public')->assertExists($card->image);
    }

    public function test_admin_can_update_why_choose_card(): void
    {
        $card = WhyChooseCard::create([
            'order' => 5,
            'badge_number' => '05',
            'theme_color' => 'coral',
            'title' => 'Future-Ready Skills',
            'description' => 'Original description for future skills.',
            'image' => 'assets/images/adv-choose-5.jpg',
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->put(route('admin.why-choose.update', $card), [
            'title' => 'Future-Ready Skills Updated',
            'description' => 'Inquiry-driven learning, robotics, coding, public speaking.',
            'badge_number' => '05',
            'theme_color' => 'purple',
            'order' => 5,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.why-choose.index'));
        $response->assertSessionHas('success', 'Card updated successfully!');

        $this->assertDatabaseHas('why_choose_cards', [
            'id' => $card->id,
            'title' => 'Future-Ready Skills Updated',
            'theme_color' => 'purple',
        ]);
    }

    public function test_admin_can_toggle_card_status(): void
    {
        $card = WhyChooseCard::create([
            'order' => 1,
            'badge_number' => '01',
            'theme_color' => 'orange',
            'title' => 'Toggle Status Test',
            'description' => 'Description test',
            'image' => 'assets/images/adv-choose-1.jpg',
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->patch(route('admin.why-choose.toggle-status', $card));

        $response->assertRedirect(route('admin.why-choose.index'));
        $this->assertDatabaseHas('why_choose_cards', [
            'id' => $card->id,
            'is_active' => false,
        ]);
    }

    public function test_admin_can_delete_why_choose_card(): void
    {
        $file = UploadedFile::fake()->image('delete-test.jpg', 600, 400);
        $path = $file->store('why-choose', 'public');

        $card = WhyChooseCard::create([
            'order' => 99,
            'badge_number' => '99',
            'theme_color' => 'cyan',
            'title' => 'Card To Delete',
            'description' => 'Will be deleted.',
            'image' => $path,
            'is_active' => true,
        ]);

        $response = $this->actingAs($this->admin)->delete(route('admin.why-choose.destroy', $card));

        $response->assertRedirect(route('admin.why-choose.index'));
        $this->assertDatabaseMissing('why_choose_cards', ['id' => $card->id]);
        Storage::disk('public')->assertMissing($path);
    }

    public function test_homepage_renders_dynamic_why_choose_cards_and_settings(): void
    {
        Setting::set('why_choose_eyebrow', 'WHY CHOOSE SPECIAL');
        Setting::set('why_choose_title_1', 'Discover Why');
        Setting::set('why_choose_title_2', 'Advaita Shines');
        Setting::set('why_choose_subtitle', 'Custom dynamic subtitle for Why Choose Advaita.');
        Setting::set('why_choose_cta_text', 'Book A School Visit');
        Setting::set('why_choose_cta_url', '#visit-school');

        WhyChooseCard::create([
            'order' => 1,
            'badge_number' => '99',
            'theme_color' => 'purple',
            'title' => 'Unique Dynamic Feature Card',
            'description' => 'Remarkable unique dynamic content for homepage test.',
            'image' => 'assets/images/adv-choose-1.jpg',
            'is_active' => true,
        ]);

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('WHY CHOOSE SPECIAL');
        $response->assertSee('Discover Why');
        $response->assertSee('Advaita Shines');
        $response->assertSee('Custom dynamic subtitle for Why Choose Advaita.');
        $response->assertSee('Unique Dynamic Feature Card');
        $response->assertSee('Remarkable unique dynamic content for homepage test.');
        $response->assertSee('99');
        $response->assertSee('Book A School Visit');
    }
}
