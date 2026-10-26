<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SchoolPagesAndFormsTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_school_pages_load_successfully(): void
    {
        $routes = [
            '/',
            '/about-us',
            '/vision-mission',
            '/chairmans-desk',
            '/principals-desk',
            '/our-staff',
            '/academics',
            '/academics/pre-primary',
            '/academics/primary',
            '/academics/secondary',
            '/results',
            '/admission-info',
            '/fee-structure',
            '/online-registration',
            '/facilities',
            '/gallery',
            '/blog',
            '/contact',
            '/mandatory-disclosure',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_legacy_projectphp_urls_redirect_to_laravel_routes(): void
    {
        $this->get('/projectphp')->assertRedirect('/');
        $this->get('/projectphp/index.php')->assertRedirect('/');
        $this->get('/projectphp/about-us.php')->assertRedirect('/about-us');
        $this->get('/projectphp/academics.php')->assertRedirect('/academics');
        $this->get('/projectphp/contact.php')->assertRedirect('/contact');
        $this->get('/pre-primary')->assertRedirect('/academics/pre-primary');
        $this->get('/primary')->assertRedirect('/academics/primary');
        $this->get('/secondary')->assertRedirect('/academics/secondary');
    }

    public function test_contact_form_submits_and_saves_to_database(): void
    {
        $payload = [
            'name' => 'Ramesh Sharma',
            'email' => 'ramesh@example.com',
            'phone' => '9876543210',
            'subject' => 'Admissions enquiry',
            'message' => 'Please provide information about Class 6 admission details.',
        ];

        $response = $this->post('/contact', $payload);
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_inquiries', [
            'email' => 'ramesh@example.com',
            'name' => 'Ramesh Sharma',
        ]);
    }

    public function test_online_registration_submits_and_saves_to_database(): void
    {
        $payload = [
            'username' => 'aarav_sharma',
            'email' => 'aarav.parent@example.com',
            'full_name' => 'Aarav Sharma',
            'phone' => '9876543210',
            'applying_class' => 'Class 5',
            'academic_year' => '2026-2027',
            'father_name' => 'Ramesh Sharma',
            'mother_name' => 'Sunita Sharma',
            'city' => 'Parbhani',
        ];

        $response = $this->post('/online-registration', $payload);
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('online_registrations', [
            'email' => 'aarav.parent@example.com',
            'full_name' => 'Aarav Sharma',
        ]);
    }
}
