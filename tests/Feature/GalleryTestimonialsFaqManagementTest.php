<?php

namespace Tests\Feature;

use App\Models\Faq;
use App\Models\GalleryItem;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class GalleryTestimonialsFaqManagementTest extends TestCase
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

    public function test_guests_cannot_access_gallery_testimonials_or_faqs(): void
    {
        $this->get(route('admin.gallery.index'))->assertRedirect(route('admin.login'));
        $this->get(route('admin.testimonials.index'))->assertRedirect(route('admin.login'));
        $this->get(route('admin.faqs.index'))->assertRedirect(route('admin.login'));
    }

    public function test_admin_can_view_gallery_index_and_update_header(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.gallery.index'));
        $response->assertStatus(200);
        $response->assertSee('Campus Gallery Photos');

        $headerPayload = [
            'eyebrow' => 'NEW GALLERY EYEBROW',
            'title_1' => 'Our Visual Journey,',
            'title_2' => 'every moment counts.',
            'subtitle' => 'Captured memories from the best school.',
            'btn_1_text' => 'View Full Album',
            'btn_1_url' => '/gallery',
            'btn_2_text' => 'Watch Drone Tour',
            'btn_2_url' => '#video-tour',
        ];

        $res = $this->actingAs($this->admin)->patch(route('admin.gallery.section-header'), $headerPayload);
        $res->assertRedirect(route('admin.gallery.index'));
        $this->assertSame('NEW GALLERY EYEBROW', Setting::get('gallery_eyebrow'));
        $this->assertSame('Our Visual Journey,', Setting::get('gallery_title_1'));
    }

    public function test_admin_can_create_and_manage_gallery_photo(): void
    {
        $fakeImg = UploadedFile::fake()->image('campus-drone.jpg', 800, 600);

        $payload = [
            'image' => $fakeImg,
            'category' => 'Drone Aviation Lab',
            'icon' => 'fa-solid fa-helicopter',
            'caption' => 'Students operating STEM drones on athletic field',
            'order' => 12,
            'is_active' => '1',
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.gallery.store'), $payload);
        $response->assertRedirect(route('admin.gallery.index'));

        $item = GalleryItem::where('category', 'Drone Aviation Lab')->first();
        $this->assertNotNull($item);
        $this->assertSame('Drone Aviation Lab', $item->category);
        $this->assertTrue($item->is_active);
        Storage::disk('public')->assertExists($item->image);

        // Toggle status
        $this->actingAs($this->admin)->patch(route('admin.gallery.toggle-status', $item->id));
        $this->assertFalse($item->fresh()->is_active);

        // Delete photo
        $this->actingAs($this->admin)->delete(route('admin.gallery.destroy', $item->id));
        $this->assertNull(GalleryItem::find($item->id));
    }

    public function test_admin_can_manage_testimonials(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.testimonials.index'));
        $response->assertStatus(200);
        $response->assertSee('Parent Testimonials Management');

        // Update section header
        $this->actingAs($this->admin)->patch(route('admin.testimonials.section-header'), [
            'eyebrow' => 'PARENT REVIEWS',
            'title_1' => 'What Parents',
            'title_2' => 'Cherish Most',
            'subtitle' => 'Unfiltered stories and experiences.',
        ])->assertRedirect(route('admin.testimonials.index'));

        $this->assertSame('PARENT REVIEWS', Setting::get('testimonials_eyebrow'));

        // Create new testimonial
        $fakeAvatar = UploadedFile::fake()->image('parent-avatar.jpg', 300, 300);
        $postRes = $this->actingAs($this->admin)->post(route('admin.testimonials.store'), [
            'parent_name' => 'Vikram Singhania',
            'child_info' => 'Parent of Aarav | Grade 9',
            'content' => 'Outstanding individual attention and superb sports infrastructure.',
            'rating' => 5,
            'theme_color' => 'blue',
            'order' => 4,
            'is_active' => '1',
            'avatar' => $fakeAvatar,
        ]);
        $postRes->assertRedirect(route('admin.testimonials.index'));

        $testi = Testimonial::where('parent_name', 'Vikram Singhania')->first();
        $this->assertNotNull($testi);
        $this->assertSame('blue', $testi->theme_color);
        Storage::disk('public')->assertExists($testi->avatar);

        // Edit testimonial
        $this->actingAs($this->admin)->put(route('admin.testimonials.update', $testi->id), [
            'parent_name' => 'Vikram Singhania',
            'child_info' => 'Parent of Aarav | Grade 10',
            'content' => 'Updated review text with more details.',
            'rating' => 5,
            'theme_color' => 'orange',
            'order' => 5,
            'is_active' => '1',
        ])->assertRedirect(route('admin.testimonials.index'));

        $this->assertSame('orange', $testi->fresh()->theme_color);
    }

    public function test_admin_can_manage_faqs(): void
    {
        $response = $this->actingAs($this->admin)->get(route('admin.faqs.index'));
        $response->assertStatus(200);
        $response->assertSee('Frequently Asked Questions');

        // Create FAQ
        $postRes = $this->actingAs($this->admin)->post(route('admin.faqs.store'), [
            'question' => 'Is transport provided for distant areas?',
            'answer' => 'Yes, GPS buses cover all major stops across Parbhani with verified drivers and female conductors.',
            'order' => 6,
            'is_active' => '1',
        ]);
        $postRes->assertRedirect(route('admin.faqs.index'));

        $faq = Faq::where('question', 'Is transport provided for distant areas?')->first();
        $this->assertNotNull($faq);

        // Update FAQ
        $this->actingAs($this->admin)->put(route('admin.faqs.update', $faq->id), [
            'question' => 'Is transport provided for distant areas?',
            'answer' => 'Yes, modern GPS buses operate on 12 distinct routes.',
            'order' => 6,
            'is_active' => '1',
        ])->assertRedirect(route('admin.faqs.index'));

        $this->assertStringContainsString('12 distinct routes', $faq->fresh()->answer);
    }

    public function test_homepage_renders_dynamic_gallery_testimonials_and_faqs(): void
    {
        // Custom items
        GalleryItem::create([
            'image' => 'assets/images/gallery/gallery-school-band.jpg',
            'category' => 'Championship Band',
            'caption' => 'State champions drum squad',
            'order' => 1,
            'is_active' => true,
        ]);

        Testimonial::create([
            'parent_name' => 'Deepak Malhotra',
            'child_info' => 'Parent of Riya | Class 4',
            'content' => 'Advaita teachers take wonderful personal care of our daughter.',
            'rating' => 5,
            'theme_color' => 'orange',
            'order' => 1,
            'is_active' => true,
        ]);

        Faq::create([
            'question' => 'What are the school lab facilities?',
            'answer' => 'We offer Robotics, STEAM, Computer, Physics, Chemistry, and Math Labs.',
            'order' => 1,
            'is_active' => true,
        ]);

        $home = $this->get(route('home'));
        $home->assertStatus(200);
        $home->assertSee('Championship Band');
        $home->assertSee('Deepak Malhotra');
        $home->assertSee('What are the school lab facilities?');
        $home->assertSee('Robotics, STEAM, Computer');
    }

    public function test_homepage_limits_faqs_to_five(): void
    {
        for ($i = 1; $i <= 8; $i++) {
            Faq::create([
                'question' => "FAQ Question {$i}?",
                'answer' => "FAQ Answer {$i}.",
                'order' => $i,
                'is_active' => true,
            ]);
        }

        $response = $this->get(route('home'));
        $response->assertStatus(200);

        for ($i = 1; $i <= 5; $i++) {
            $response->assertSee("FAQ Question {$i}?");
        }

        $response->assertDontSee('FAQ Question 6?');
        $response->assertDontSee('FAQ Question 7?');
        $response->assertDontSee('FAQ Question 8?');
    }
}
