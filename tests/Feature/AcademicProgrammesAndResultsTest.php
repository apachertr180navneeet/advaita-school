<?php

namespace Tests\Feature;

use App\Models\AcademicProgramme;
use App\Models\AcademicResult;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AcademicProgrammesAndResultsTest extends TestCase
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

    public function test_academics_and_sub_wing_pages_render_successfully(): void
    {
        // 1. Academics Overview
        $res = $this->get('/academics');
        $res->assertStatus(200);
        $res->assertSee('A Strong Foundation');
        $res->assertSee('Pre-Primary Wing');
        $res->assertSee('Primary (Classes 1–5)');
        $res->assertSee('Secondary &amp; IIT Foundation', false);

        // 2. Pre-Primary Wing
        $res = $this->get('/academics/pre-primary');
        $res->assertStatus(200);
        $res->assertSee('PRE-PRIMARY WING');
        $res->assertSee('Our State-of-the-Art New Pre-Primary Wing');
        $res->assertSee('Planned 2026 Features');
        $res->assertSee('Completed &amp; Active Facilities', false);

        // 3. Primary Wing
        $res = $this->get('/academics/primary');
        $res->assertStatus(200);
        $res->assertSee('PRIMARY WING');
        $res->assertSee('Abacus &amp; Mental Arithmetic Programme', false);
        $res->assertSee('National &amp; International Olympiad Mentorship', false);

        // 4. Secondary Wing
        $res = $this->get('/academics/secondary');
        $res->assertStatus(200);
        $res->assertSee('SECONDARY WING');
        $res->assertSee('Dedicated NEET / IIT Foundation Programme');
        $res->assertSee('Consistent 100% CBSE Class 10 Board Results');

        // 5. Results Hub
        $res = $this->get('/results');
        $res->assertStatus(200);
        $res->assertSee('Centralized');
        $res->assertSee('Results');
        $res->assertSee('Board Exam');
        $res->assertSee('Olympiad');
        $res->assertSee('Abacus');
        $res->assertSee('IIT / NEET Foundation');
    }

    public function test_results_page_filters_by_category_and_year(): void
    {
        $boardResult = AcademicResult::create([
            'category' => 'board',
            'academic_year' => '2025-26',
            'title' => 'CBSE Class 10 Topper',
            'exam_name' => 'CBSE Board Examination',
            'student_name' => 'Om Dhoot',
            'class_grade' => 'Class 10',
            'score' => '98.40%',
            'rank' => 'District 1st',
            'is_active' => true,
            'order' => 1,
        ]);

        $abacusResult = AcademicResult::create([
            'category' => 'abacus',
            'academic_year' => '2024-25',
            'title' => 'Abacus Gold Trophy',
            'exam_name' => 'State Level Abacus',
            'student_name' => 'Yashraj Shinde',
            'class_grade' => 'Class 4',
            'score' => 'Champion of Champions',
            'is_active' => true,
            'order' => 2,
        ]);

        // Filter Board
        $res = $this->get('/results?category=board');
        $res->assertStatus(200);
        $res->assertSee('Om Dhoot');

        // Filter Abacus
        $res = $this->get('/results?category=abacus');
        $res->assertStatus(200);
        $res->assertSee('Yashraj Shinde');

        // Filter Year 2024-25
        $res = $this->get('/results?year=2024-25');
        $res->assertStatus(200);
        $res->assertSee('Yashraj Shinde');
    }

    public function test_admin_can_manage_academic_programmes_crud(): void
    {
        // 1. List
        $res = $this->actingAs($this->admin)->get(route('admin.academic-programmes.index'));
        $res->assertStatus(200);
        $res->assertSee('Academic Programmes');

        // 2. Create form
        $res = $this->actingAs($this->admin)->get(route('admin.academic-programmes.create'));
        $res->assertStatus(200);

        // 3. Store
        $payload = [
            'stage' => 'primary',
            'title' => 'Vedic Mathematics Specialization',
            'subtitle' => 'Speed calculation techniques',
            'classes' => 'Classes 3 to 5',
            'badge_text' => 'Math Track',
            'description' => 'Fast arithmetic drills for young scholars.',
            'features_text' => "Mental calculation\nSpeed tests",
            'subjects_text' => "Vedic Math\nLogic Drills",
            'order' => 10,
            'is_active' => '1',
        ];

        $postRes = $this->actingAs($this->admin)->post(route('admin.academic-programmes.store'), $payload);
        $postRes->assertRedirect(route('admin.academic-programmes.index'));
        $this->assertDatabaseHas('academic_programmes', [
            'title' => 'Vedic Mathematics Specialization',
            'stage' => 'primary',
        ]);

        $prog = AcademicProgramme::where('title', 'Vedic Mathematics Specialization')->first();

        // 4. Edit form
        $editRes = $this->actingAs($this->admin)->get(route('admin.academic-programmes.edit', $prog));
        $editRes->assertStatus(200);
        $editRes->assertSee('Vedic Mathematics Specialization');

        // 5. Update
        $updatePayload = array_merge($payload, ['title' => 'Advanced Vedic Math Academy']);
        $putRes = $this->actingAs($this->admin)->put(route('admin.academic-programmes.update', $prog), $updatePayload);
        $putRes->assertRedirect(route('admin.academic-programmes.index'));
        $this->assertDatabaseHas('academic_programmes', [
            'id' => $prog->id,
            'title' => 'Advanced Vedic Math Academy',
        ]);

        // 6. Toggle Status (redirects back)
        $toggleRes = $this->actingAs($this->admin)
            ->from(route('admin.academic-programmes.index'))
            ->patch(route('admin.academic-programmes.toggle-status', $prog));
        $toggleRes->assertRedirect(route('admin.academic-programmes.index'));
        $this->assertEquals(0, $prog->fresh()->is_active);

        // 7. Destroy
        $delRes = $this->actingAs($this->admin)->delete(route('admin.academic-programmes.destroy', $prog));
        $delRes->assertRedirect(route('admin.academic-programmes.index'));
        $this->assertDatabaseMissing('academic_programmes', ['id' => $prog->id]);
    }

    public function test_admin_can_manage_academic_results_crud(): void
    {
        // 1. List
        $res = $this->actingAs($this->admin)->get(route('admin.results.index'));
        $res->assertStatus(200);
        $res->assertSee('Results &amp; Student Achievements', false);

        // 2. Create form
        $res = $this->actingAs($this->admin)->get(route('admin.results.create'));
        $res->assertStatus(200);

        // 3. Store
        $payload = [
            'category' => 'olympiad',
            'academic_year' => '2025-26',
            'title' => 'SOF NSO National Gold Medal',
            'exam_name' => 'National Science Olympiad',
            'student_name' => 'Aryan Verma',
            'class_grade' => 'Class 5',
            'score' => '100/100',
            'rank' => 'National Rank 1',
            'description' => 'Scored perfect score in second level NSO.',
            'is_featured' => '1',
            'is_active' => '1',
            'order' => 1,
        ];

        $postRes = $this->actingAs($this->admin)->post(route('admin.results.store'), $payload);
        $postRes->assertRedirect(route('admin.results.index'));
        $this->assertDatabaseHas('academic_results', [
            'student_name' => 'Aryan Verma',
            'category' => 'olympiad',
            'score' => '100/100',
        ]);

        $result = AcademicResult::where('student_name', 'Aryan Verma')->first();

        // 4. Edit form
        $editRes = $this->actingAs($this->admin)->get(route('admin.results.edit', $result));
        $editRes->assertStatus(200);
        $editRes->assertSee('Aryan Verma');

        // 5. Update
        $updatePayload = array_merge($payload, ['rank' => 'International Rank 1']);
        $putRes = $this->actingAs($this->admin)->put(route('admin.results.update', $result), $updatePayload);
        $putRes->assertRedirect(route('admin.results.index'));
        $this->assertDatabaseHas('academic_results', [
            'id' => $result->id,
            'rank' => 'International Rank 1',
        ]);

        // 6. Toggle Status (redirects back)
        $toggleRes = $this->actingAs($this->admin)
            ->from(route('admin.results.index'))
            ->patch(route('admin.results.toggle-status', $result));
        $toggleRes->assertRedirect(route('admin.results.index'));
        $this->assertEquals(0, $result->fresh()->is_active);

        // 7. Destroy
        $delRes = $this->actingAs($this->admin)->delete(route('admin.results.destroy', $result));
        $delRes->assertRedirect(route('admin.results.index'));
        $this->assertDatabaseMissing('academic_results', ['id' => $result->id]);
    }
}
