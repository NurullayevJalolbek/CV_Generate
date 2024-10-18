<?php

namespace Database\Factories;

use App\Models\Cv;
use App\Models\Student;
use App\Models\Lessons;
use App\Models\HardSkill;
use App\Models\SoftSkill;
use App\Models\Projects;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cv>
 */
class CvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Cv::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'lesson_id' => Lessons::factory(),
            'hard_skill_id' => HardSkill::factory(),
            'soft_skill_id' => SoftSkill::factory(),
            'project_id' => Projects::factory(),
            'experience_id' => Experience::factory(),
        ];
    }
}
