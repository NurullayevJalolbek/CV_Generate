<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ProjectControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $student = Student::factory()->create();
        Sanctum::actingAs($student);
    }
    /**
     * A basic feature test example.
     */
    public function test_create_a_project()
    {
        $student = Student::factory()->create();
        $response = $this->postJson('/api/projects', [
            "student_id" => $student->id,
            "name" => "test uchun  yaratilgan",
            "description" => "Bu test uchun tavsif matni.",
            "source_link" => "https://example.com/source",
            "demo_link" => "https://example.com/demo"
        ]);


        $response->assertStatus(201)
            ->assertJson([[
                "student_id" => $student->id,
                "name" => "test uchun  yaratilgan",
                "description" => "Bu test uchun tavsif matni.",
                "source_link" => "https://example.com/source",
                "demo_link" => "https://example.com/demo"
            ]]);
    }

    public function test_show_a_project()
    {
        $student = Student::factory()->create();
        $project = Project::factory()->create([
            "student_id" => $student->id,
            'name' => 'Test Project',
            'description' => 'Test uchun tavsif matni',
            'source_link' => 'https://example.com/source',
            'demo_link' => 'https://example.com/demo',
        ]);

        $response = $this->getJson('/api/projects/' . $project->id);


        $response->assertStatus(200)
            ->assertJson([
                "student_id" => $project->student_id,
                "name" => $project->name,
                "description" => $project->description,
                "source_link" => $project->source_link,
                "demo_link" => $project->demo_link
            ]);
    }

    public  function  test_update_a_project()
    {
        $student = Student::factory()->create();

        $project = Project::factory()->create([
            "student_id" => $student->id,
            'name' => 'Test Project',
            'description' => 'Test uchun tavsif matni',
            'source_link' => 'https://example.com/source',
            'demo_link' => 'https://example.com/demo',
        ]);

        $response = $this->putJson('/api/projects/' . $project->id, [
            "student_id" => $student->id,
            "name" => "test uchun  yaratilgan",
            "description" => "Bu test uchun tavsif matni.",
            "source_link" => "https://example.com/source",
            "demo_link" => "https://example.com/demo"
        ]);

        $response->assertStatus(200)
            ->assertJson([
                "student_id" => $project->student_id,
                "name" => "test uchun  yaratilgan",
                "description" => "Bu test uchun tavsif matni.",
                "source_link" => "https://example.com/source",
                "demo_link" => "https://example.com/demo"
            ]);
    }

    public  function  test_destroy_a_project()
    {
        $student = Student::factory()->create();

        $project = Project::factory()->create([
            "student_id" => $student->id,
            'name' => 'Test Project',
            'description' => 'Test uchun tavsif matni',
            'source_link' => 'https://example.com/source',
            'demo_link' => 'https://example.com/demo',
        ]);

        $response = $this->deleteJson('/api/projects/' . $project->id);

        $response->assertStatus(204);

    }

}
