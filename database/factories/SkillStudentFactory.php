<?php

namespace Database\Factories;

use App\Models\Skill;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkillStudent>
 */
class SkillStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(), // Tasodifiy talaba yaratish
            'skill_id' => Skill::factory(), // Tasodifiy ko'nikma yaratish
        ];
    }
}
