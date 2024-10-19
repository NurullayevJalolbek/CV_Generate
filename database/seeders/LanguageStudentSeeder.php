<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $languages = Language::all();

        foreach ($students as $student) {
            $student->languages()->attach(
                $languages->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }

}
