<?php

namespace Tests\Feature;

use App\Models\StaffMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class StaffManagementTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_public_our_staff_page_displays_active_staff_members(): void
    {
        $staff = StaffMember::create([
            'name' => 'Prof. Ananya Sen',
            'designation' => 'HEAD - COMPUTER SCIENCE',
            'qualification' => 'M.Tech., Ph.D.',
            'badge_color' => 'purple',
            'order' => 10,
            'is_active' => true,
        ]);

        $inactiveStaff = StaffMember::create([
            'name' => 'Inactive Teacher',
            'designation' => 'TRAINEE',
            'qualification' => 'B.Ed.',
            'badge_color' => 'blue',
            'order' => 99,
            'is_active' => false,
        ]);

        $response = $this->get(route('our-staff'));

        $response->assertStatus(200);
        $response->assertSee('Prof. Ananya Sen');
        $response->assertSee('HEAD - COMPUTER SCIENCE');
        $response->assertSee('M.Tech., Ph.D.');
        $response->assertDontSee('Inactive Teacher');
    }

    public function test_guest_cannot_access_staff_admin_management(): void
    {
        $response = $this->get(route('admin.staff.index'));
        $response->assertRedirect(route('admin.login'));
    }

    public function test_authenticated_admin_can_view_staff_roster(): void
    {
        $admin = User::first() ?? User::factory()->create();

        $response = $this->actingAs($admin)->get(route('admin.staff.index'));

        $response->assertStatus(200);
        $response->assertSee('Faculty &amp; Staff Members', false);
    }

    public function test_admin_can_create_new_staff_member(): void
    {
        Storage::fake('public');
        $admin = User::first() ?? User::factory()->create();

        $photo = UploadedFile::fake()->image('staff_photo.jpg', 400, 400);

        $response = $this->actingAs($admin)->post(route('admin.staff.store'), [
            'name' => 'Dr. Kulkarni',
            'designation' => 'HEAD - BIOLOGY',
            'qualification' => 'M.Sc., Ph.D.',
            'badge_color' => 'green',
            'order' => 5,
            'is_active' => '1',
            'photo' => $photo,
        ]);

        $response->assertRedirect(route('admin.staff.index'));
        $this->assertDatabaseHas('staff_members', [
            'name' => 'Dr. Kulkarni',
            'designation' => 'HEAD - BIOLOGY',
            'qualification' => 'M.Sc., Ph.D.',
            'badge_color' => 'green',
            'is_active' => true,
        ]);
    }

    public function test_admin_can_update_staff_member(): void
    {
        $admin = User::first() ?? User::factory()->create();
        $staff = StaffMember::create([
            'name' => 'Original Faculty Name',
            'designation' => 'TEACHER',
            'qualification' => 'B.Ed.',
            'badge_color' => 'orange',
            'order' => 1,
            'is_active' => true,
        ]);

        $response = $this->actingAs($admin)->put(route('admin.staff.update', $staff->id), [
            'name' => 'Updated Faculty Name',
            'designation' => 'VICE PRINCIPAL & ACADEMIC HEAD',
            'qualification' => 'M.A., M.Ed.',
            'badge_color' => 'blue',
            'order' => 1,
            'is_active' => '1',
        ]);

        $response->assertRedirect(route('admin.staff.index'));
        $this->assertDatabaseHas('staff_members', [
            'id' => $staff->id,
            'name' => 'Updated Faculty Name',
            'designation' => 'VICE PRINCIPAL & ACADEMIC HEAD',
        ]);
    }

    public function test_admin_can_toggle_staff_active_status(): void
    {
        $admin = User::first() ?? User::factory()->create();
        $staff = StaffMember::create([
            'name' => 'Toggle Teacher',
            'designation' => 'MUSIC INSTRUCTOR',
            'qualification' => 'Sangeet Visharad',
            'badge_color' => 'amber',
            'order' => 20,
            'is_active' => true,
        ]);

        $response = $this->actingAs($admin)->patch(route('admin.staff.toggle-status', $staff->id));

        $response->assertRedirect(route('admin.staff.index'));
        $this->assertDatabaseHas('staff_members', [
            'id' => $staff->id,
            'is_active' => false,
        ]);
    }

    public function test_admin_can_delete_staff_member(): void
    {
        $admin = User::first() ?? User::factory()->create();
        $staff = StaffMember::create([
            'name' => 'Temporary Teacher',
            'designation' => 'SUBSTITUTE',
            'qualification' => 'B.Sc.',
            'badge_color' => 'rose',
            'order' => 99,
            'is_active' => true,
        ]);

        $response = $this->actingAs($admin)->delete(route('admin.staff.destroy', $staff->id));

        $response->assertRedirect(route('admin.staff.index'));
        $this->assertDatabaseMissing('staff_members', [
            'id' => $staff->id,
        ]);
    }

    public function test_admin_can_update_section_header(): void
    {
        $admin = User::first() ?? User::factory()->create();

        $response = $this->actingAs($admin)->patch(route('admin.staff.section-header'), [
            'eyebrow' => 'DYNAMIC EDUCATORS',
            'title_prefix' => 'Our Passionate',
            'title_highlight' => 'Mentors & Faculty.',
            'description' => 'Updated dynamic section description for our teachers.',
        ]);

        $response->assertRedirect(route('admin.staff.index'));

        $publicResponse = $this->get(route('our-staff'));
        $publicResponse->assertSee('DYNAMIC EDUCATORS');
        $publicResponse->assertSee('Our Passionate');
        $publicResponse->assertSee('Mentors &amp; Faculty.', false);
    }
}
