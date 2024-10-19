<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $skills = Skill::all();

        foreach ($students as $student) {
            $student->skills()->attach(
                $skills->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }

}
