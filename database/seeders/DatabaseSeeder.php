<?php

namespace Database\Seeders;

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
          ExperienceSeeder::class,
          ProjectsSeeder::class,
          LessonsSeeder::class,
          HardSkillSeeder::class,
          SoftSkillSeeder::class,
          CvSeeder::class,
          LinkSeeder::class
      ]);
    }
}
