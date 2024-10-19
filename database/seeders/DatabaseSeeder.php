<?php

namespace Database\Seeders;

use App\Models\Education;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      $this->call([
          StudentSeeder::class,
          ProjectsSeeder::class,
          EducationSeeder::class,
          LanguageSeeder::class,
          LanguageStudentSeeder::class,
          ExperienceSeeder::class,
          SocialNetworkSeeder::class,
          SocialNetworkStudentSeeder::class,
          SkillSeeder::class,
          SkillStudentSeeder::class

      ]);
    }
}
