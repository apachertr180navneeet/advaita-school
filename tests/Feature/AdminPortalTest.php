<?php

namespace Tests\Feature;

use App\Models\ContactInquiry;
use App\Models\OnlineRegistration;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AdminPortalTest extends TestCase
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

    public function test_admin_login_page_renders_successfully(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
        $response->assertSee('Admin Portal Login');
        $response->assertSee('admin@advaita.com');
    }

    public function test_admin_cannot_access_dashboard_without_login(): void
    {
        $response = $this->get('/admin/dashboard');
        $response->assertRedirect('/admin/login');
    }

    public function test_admin_can_login_with_valid_credentials(): void
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@advaita.com',
            'password' => 'admin123',
        ]);

        $this->assertAuthenticatedAs($this->admin);
        $response->assertRedirect('/admin/dashboard');
    }

    public function test_admin_cannot_login_with_invalid_credentials(): void
    {
        $response = $this->post('/admin/login', [
            'email' => 'admin@advaita.com',
            'password' => 'wrongpassword',
        ]);

        $this->assertGuest();
        $response->assertSessionHasErrors('email');
    }

    public function test_authenticated_admin_can_view_dashboard(): void
    {
        $response = $this->actingAs($this->admin)->get('/admin/dashboard');
        $response->assertStatus(200);
        $response->assertSee('Dashboard Overview');
        $response->assertSee('Welcome, Advaita Administrator!');
    }

    public function test_authenticated_admin_can_view_registrations_and_update_status(): void
    {
        $registration = OnlineRegistration::create([
            'application_no' => 'ADV-2026-TEST',
            'full_name' => 'Test Student',
            'applying_class' => 'Class 6',
            'phone' => '9876543210',
            'status' => 'submitted',
        ]);

        $response = $this->actingAs($this->admin)->get('/admin/registrations');
        $response->assertStatus(200);
        $response->assertSee('ADV-2026-TEST');
        $response->assertSee('Test Student');

        // Test status update
        $updateResponse = $this->actingAs($this->admin)->patch("/admin/registrations/{$registration->id}/status", [
            'status' => 'approved',
        ]);
        $updateResponse->assertSessionHas('success');

        $this->assertDatabaseHas('online_registrations', [
            'id' => $registration->id,
            'status' => 'approved',
        ]);
    }

    public function test_authenticated_admin_can_view_inquiries_and_update_status(): void
    {
        $inquiry = ContactInquiry::create([
            'name' => 'Test Parent',
            'email' => 'parent@example.com',
            'subject' => 'Admissions query',
            'message' => 'Please provide information about Class 6 admission details.',
            'status' => 'new',
        ]);

        $response = $this->actingAs($this->admin)->get('/admin/inquiries');
        $response->assertStatus(200);
        $response->assertSee('Test Parent');

        // Test status update
        $updateResponse = $this->actingAs($this->admin)->patch("/admin/inquiries/{$inquiry->id}/status", [
            'status' => 'resolved',
        ]);
        $updateResponse->assertSessionHas('success');

        $this->assertDatabaseHas('contact_inquiries', [
            'id' => $inquiry->id,
            'status' => 'resolved',
        ]);
    }

    public function test_admin_can_logout(): void
    {
        $response = $this->actingAs($this->admin)->post('/admin/logout');
        $this->assertGuest();
        $response->assertRedirect('/admin/login');
    }
}
